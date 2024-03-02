<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Game - API Project</title>
    <link rel="stylesheet" href="quiz.css">
    <link rel="stylesheet" href="navX.css"> <!--Experimental Change-->
</head>
<body class="layout">
<nav class="sidebar">
    <header>
        <a href="#" class="logo">CodixsGo</a>
    </header>
    <div class="scrollbox">
        <div class="menu-title">Quiz</div>
        <div class="menu-content">
            <ul class="menu-items">
                <li class="item">
                    <a href="#">Question 1</a>
                </li>
                <li class="item">
                    <a href="#">Question 2</a>
                </li>
                <li class="item">
                    <a href="#">Question 3</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

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
    <div class="question-selection">
        <label for="question-select">Questions:</label>
        <select id="question-select">
            <option value="5">5</option>
            <option value="10">10</option>
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
</div>



<script src="quiz.js"></script>
</body>
</html>