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

    <!-- CDN -->
  
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav.css">

</head>
<body class="layout">

<nav class="sidebar">
    <header>
        <a href="#" class="logo">CodixsGo</a>
    </header>

    <div class="scrollbox">
        <div class="menu-title">Quiz</div>
        <!-- scrollbox-menu -->
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
