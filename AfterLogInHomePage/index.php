<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Game - API Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="flex">
    <div class="start-container" id="start-container">
        <h1 class="title">CodixGo!!</h1>
        <button id="start-btn">Start</button>
    </div>

    <div class="difficulty-container hidden" id="difficulty-container">
        <h2 class="difficulty-title">Difficulty</h2>
        <div class="difficulty-btns">
            <button class="difficulty-btn" id="easy-btn">Easy</button>
            <button class="difficulty-btn" id="medium-btn">Medium</button>
            <button class="difficulty-btn" id="hard-btn">Hard</button>
        </div>
    </div>

    <div class="quiz-container hidden" id="quiz">
        <div class="quiz-header">
            <h2 id="question">Question Text</h2>
            <ul>
                <li>
                    <label for="a" class="choice-label">
                        <input type="radio" name="answer" id="a" class="answer">
                        <span class="choice-text" id="a_text">Answer A</span>
                    </label>
                </li>
                <li>
                    <label for="b" class="choice-label">
                        <input type="radio" name="answer" id="b" class="answer">
                        <span class="choice-text" id="b_text">Answer B</span>
                    </label>
                </li>
                <li>
                    <label for="c" class="choice-label">
                        <input type="radio" name="answer" id="c" class="answer">
                        <span class="choice-text" id="c_text">Answer C</span>
                    </label>
                </li>
                <li>
                    <label for="d" class="choice-label">
                        <input type="radio" name="answer" id="d" class="answer">
                        <span class="choice-text" id="d_text">Answer D</span>
                    </label>
                </li>
            </ul>
        </div>
        <button id="submit">Submit</button>
    </div>

    <script src="script.js"></script>
</body>
</html>
