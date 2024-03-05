<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['eid'])) {
            $_SESSION['play-eid'] = $_POST['eid'];
            $_SESSION['play-diff'] = $_POST['diff'];

            $conn = new mysqli('localhost', 'root', '', 'codixs');
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } else {
                $stmt = $conn->prepare("SELECT * FROM questions WHERE eid = ?");
                $stmt->bind_param("s", $_SESSION['play-eid']);
                $stmt->execute();
                $result = $stmt->get_result();
                $total = 0;
                while ($row = $result->fetch_assoc()) {
                    $total = $total + 1;
                }
                $_SESSION['total'] = $total;
                $stmt->close();
            }
            $conn->close();
        } else {
            http_response_code(400);
            echo '<script>alert("Error: eid parameter is missing in the request.");</script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Game - API Project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="navX.css">
</head>
<body class="layout">

<div class="start-container" id="start-container">
    <h1 class="title">CodixsGo!</h1>
    <button id="start-btn">Next</button>
</div>

<div class="difficulty-container hidden" id="difficulty-container">
    <h2 class="difficulty-title">Are you ready?</h2>
    <div class="difficulty-btns">
        <button class="difficulty-btn" id="easy-btn">Start</button>
    </div>
    <div class="question-selection">
        <label for="question-select">Total Questions:</label>
        <select id="question-select">
            <option value="<?php echo $_SESSION['total']; ?>"><?php echo $_SESSION['total']; ?></option>
        </select>
    </div>
</div>



<div class="quiz-container hidden" id="quiz">
    <div class="quiz-header">
        <h2 id="question">Question Text</h2>
        <ul>
            <li>
                <label for="a" class="choice-label" value ="a">
                    <input type="radio" name="answer" id="a" class="answer" value ="a">
                    <span class="choice-text" id="a_text">Answer A</span>
                </label>
            </li>
            <li>
                <label for="b" class="choice-label" value ="b">
                    <input type="radio" name="answer" id="b" class="answer" value ="b">
                    <span class="choice-text" id="b_text">Answer B</span>
                </label>
            </li>
            <li>
                <label for="c" class="choice-label" value ="c">
                    <input type="radio" name="answer" id="c" class="answer" value ="c">
                    <span class="choice-text" id="c_text">Answer C</span>
                </label>
            </li>
            <li>
                <label for="d" class="choice-label" value ="d">
                    <input type="radio" name="answer" id="d" class="answer" value ="d">
                    <span class="choice-text" id="d_text">Answer D</span>
                </label>
            </li>
        </ul>
    </div>
    <button id="submit" class ="submit">Submit</button>
</div>

<div class="score-container hidden" id="score-container">
    <span class="question">Question: <span id="question-count">0</span></span>
    <span class="score">Score: <span id="score">0</span></span>
    <span class="streak">Streak: <span id="streak">0</span></span>
    <span class="time-bonus">Time Bonus: <span id="time-bonus">0</span></span>
    <span class="points">Points: <span id="total-points">0</span></span>
</div>
<div class="result-container" id="result-container">
  <div class="result-title">Result</div>
  <div class="result-details">
    Score: <span id="score-result"></span><br>
    Points: <span id="points-result"></span>
  </div>
  <div class="result-comment" id="comment-result"></div>
  <button id="continue-btn">Continue</button> <!-- Add the Continue button here -->
</div>

<script src="script2.js"></script>
<script>
    var playDiff = '<?php echo $_SESSION['play-diff']; ?>';
</script>
</body>
</html>