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
       
    }

    function showQuiz(difficulty) {
        quizContainer.style.display = 'block';
        scoreContainer.style.display = 'block';
        difficultyContainer.style.display = 'none';

        switch (difficulty) {
            case 'Easy':
                diff = 'easy.php';
                difficultyBonus = 0;
                break;
            case 'Medium':
                diff = 'easy.php';
                difficultyBonus = 0.20;
                break;
            case 'Hard':
                diff = 'easy.php';
                difficultyBonus = 0.40;
                break;
            default:
                console.error('Invalid difficulty level');
                return;
        }

        showQuestion(diff);
        calculateTimeBonus();
    }

    startBtn.addEventListener('click', startQuiz);

    function submitAnswer() {
        // Disable submit button
        submitBtn.disabled = true;
    
        // Identify the selected choice, if any
        const selectedChoice = document.querySelector('.choice-label input:checked');
        const selectedValue = selectedChoice ? selectedChoice.value : null;
        
        // Loop through all choices and apply red background to the incorrect ones
        choices.forEach(choice => {
            const choiceValue = choice.querySelector('input').value;
            if (choiceValue !== corrAns) {
                choice.classList.add('wrong');
            }
        });
    
        const basePoints = 500;
        points += basePoints;
    
        // Change background color of the correct choice label to green temporarily
        document.querySelector(`label[for=${corrAns}]`).classList.add('correct');
    
        // Delay before fetching and displaying the next question
        setTimeout(() => {
            // Remove background color changes
            choices.forEach(choice => {
                choice.classList.remove('wrong');
            });
            document.querySelector(`label[for=${corrAns}]`).classList.remove('correct');
    
            const isCorrect = selectedValue === corrAns;
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
            submitBtn.classList.remove('selected');
        }, 1000);
    }
    
    
    
    

    submitBtn.addEventListener('click', submitAnswer);

    easyBtn.addEventListener('click', function() { showQuiz(playDiff);});

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
        timeBonusElement.textContent = '+'+timeBonus + '%';
        let timeLimiter = 10;
        timeBonusInterval = setInterval(() => {
            
            if(timeLimiter<=0){
                timeBonus = 0;
            } else{
                timeLimiter-=1;
                timeBonus -= 10;
            }
            
            timeBonusElement.textContent = '+'+timeBonus + '%';
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

    const continueBtn = document.getElementById('continue-btn');
    continueBtn.addEventListener('click', function () {
        saveResultsToDatabase(score, points);
        alert('Quiz has been saved');
        window.location.href = 'take-quiz.php';
    });

    function saveResultsToDatabase(eid, score, totalQuestions, points) {
        fetch('save_results.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `score=${score}&points=${points}`,
        })
            .then(response => response.text())
            .then(data => console.log(data))
            .catch(error => console.error('Error saving results:', error));
    }
});