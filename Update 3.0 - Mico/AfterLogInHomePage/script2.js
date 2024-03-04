document.addEventListener('DOMContentLoaded', function() {
    const startBtn = document.getElementById('start-btn');
    const easyBtn = document.getElementById('easy-btn');
    const submitBtn = document.getElementById('submit');
    const difficultyContainer = document.getElementById('difficulty-container');
    const quizContainer = document.getElementById('quiz');
    const startContainer = document.getElementById('start-container');
    const mediumBtn = document.getElementById('medium-btn');
    const hardBtn = document.getElementById('hard-btn');
    const choices = document.querySelectorAll('.choice-label');
    const scoreContainer = document.getElementById('score-container');
    const resultContainer = document.getElementById('result-container'); // New result container
    resultContainer.style.display = 'none'; // Hide result container initially

    scoreContainer.style.display = 'none';
    difficultyContainer.style.display = 'none';
    quizContainer.style.display = 'none';
    startContainer.style.display = 'block';

    let difficultyBonus = 0;
    let corrAns = '';
    let answeredQuestions = 0;
    let currentQues = answeredQuestions + 1;
    let encounteredQuestions = [];
    let score = 0;
    let streak = 0;
    let totalQuestions = 0;
    let diff = '';
    let points = 0;
    let timeBonusInterval;
    let timeBonus = 0;

    function updateScore() {
        document.getElementById('score').textContent = score;
        document.getElementById('streak').textContent = streak;
        document.getElementById('question-count').textContent = currentQues + '/' + totalQuestions;
        document.getElementById('total-points').textContent = points;
    }

    // Function to start the quiz
    function startQuiz() {
        difficultyContainer.style.display = 'block';
        startContainer.style.display = 'none';
        calculateTimeBonus();
    }

    function showQuiz(difficulty) {
        quizContainer.style.display = 'block';
        scoreContainer.style.display = 'block';
        difficultyContainer.style.display = 'none';

        switch (difficulty) {
            case 'easy':
                diff = 'easy.php';
                difficultyBonus = 0;
                break;
            case 'medium':
                diff = 'medium.php';
                difficultyBonus = 0.20;
                break;
            case 'hard':
                diff = 'hard.php';
                difficultyBonus = 0.40;
                break;
            default:
                console.error('Invalid difficulty level');
                return;
        }

        showQuestion(diff);
    }

    startBtn.addEventListener('click', startQuiz);

    function submitAnswer() {
        const isCorrect = checkAnswer();
        const basePoints = 500;
        points += basePoints;

        if (isCorrect) {
            score++;
            streak++;
            const bonusPoints = Math.round(basePoints * 0.20);
            points += bonusPoints;
            const bonusTimePoints = Math.round((timeBonus / 100) * points);
            const difficultyBonusPoints = Math.round(difficultyBonus * basePoints);
            points += difficultyBonusPoints;
            points += bonusTimePoints;

            const streakBonusPoints = Math.round((5 * streak / 100) * points);
            points += streakBonusPoints;
        } else {
            streak = 0;
        }

        updateScore();

        currentQues++;
        answeredQuestions++;

        if (answeredQuestions >= totalQuestions) {
            quizContainer.style.display = 'none';
            scoreContainer.style.display = 'none'; // Hide score container
            resultContainer.style.display = 'block'; // Show result container
            displayResult(); // Display the result
        } else {
            showQuestion(diff);
            calculateTimeBonus();
        }

        choices.forEach(choice => {
            choice.classList.remove('selected');
            choice.querySelector('input').checked = false;
        });
        submitBtn.disabled = true;
        submitBtn.classList.remove('selected');
    }

    submitBtn.addEventListener('click', submitAnswer);

    easyBtn.addEventListener('click', () => showQuiz('easy'));
    mediumBtn.addEventListener('click', () => showQuiz('medium'));
    hardBtn.addEventListener('click', () => showQuiz('hard'));

    function showQuestion(url) {
        const numQuestions = document.getElementById('question-select').value;
        totalQuestions = parseInt(numQuestions);
        updateScore();

        fetch(`${url}?num=${numQuestions}&encountered=${encounteredQuestions.join(',')}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.error) {
                    console.error('Error fetching question:', data.error);
                } else {
                    if (encounteredQuestions.includes(data.Questions)) {
                        showQuestion(url);
                        return;
                    }

                    document.getElementById('question').textContent = data.Questions;
                    document.getElementById('a_text').textContent = data.a;
                    document.getElementById('b_text').textContent = data.b;
                    document.getElementById('c_text').textContent = data.c;
                    document.getElementById('d_text').textContent = data.d;
                    corrAns = data.answers;
                    ques = data.Questions;
                    encounteredQuestions.push(data.Questions);

                    choices.forEach(choice => {
                        choice.classList.remove('selected');
                        choice.querySelector('input').checked = false;
                    });
                    submitBtn.disabled = true;
                    submitBtn.classList.remove('selected');
                }
            })
            .catch(error => console.error('Error fetching question:', error));
    }

    choices.forEach(choice => {
        choice.addEventListener('click', function() {
            choices.forEach(c => c.classList.remove('selected'));
            this.classList.toggle('selected');
            submitBtn.disabled = false;
            submitBtn.classList.add('selected');
        });
    });

    function calculateTimeBonus() {
        clearInterval(timeBonusInterval);
        timeBonus = 100;
        const timeBonusElement = document.getElementById('time-bonus');
        timeBonusElement.textContent = timeBonus + '%';

        timeBonusInterval = setInterval(() => {
            timeBonus -= 10;
            timeBonusElement.textContent = timeBonus + '%';
        }, 3000);
    }

    function checkAnswer() {
        const selectedChoice = document.querySelector('.choice-label input:checked');
        if (!selectedChoice) {
            console.log('no choice selected');
            return false;
        }

        const selectedValue = selectedChoice.value;

        return selectedValue === corrAns;
    }

    function displayResult() {
        const resultScore = document.getElementById('score-result');
        resultScore.textContent = score + '/' + totalQuestions;

        const resultPoints = document.getElementById('points-result');
        resultPoints.textContent = points;

        let comment = '';
        const percentage = (score / totalQuestions) * 100;
        if (percentage < 60) {
            comment = "It's okay, you did your best... Just not enough tho.";
        } else if (percentage < 80) {
            comment = "Not bad... but not impressive.";
        } else if (percentage < 100) {
            comment = "Damn! Now you're cooking!!";
        } else {
            comment = "Sheeeeeeeeeeeesh!";
        }

        const resultComment = document.getElementById('comment-result');
        resultComment.textContent = comment;
    }
});