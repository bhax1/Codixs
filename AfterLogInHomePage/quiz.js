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
    scoreContainer.style.display = 'none';
    // Hide difficulty, quiz, and start containers initially
    difficultyContainer.style.display = 'none';
      
    quizContainer.style.display = 'none';
    startContainer.style.display = 'block';
    let difficultyBonus = 0;
    let corrAns ='';
    let answeredQuestions = 0;
    let currentQues = answeredQuestions + 1;
    let encounteredQuestions = []; // Array to store encountered questions
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
        startContainer.style.display = 'none'; // Hide start container
        calculateTimeBonus();
    }

    function showQuiz(difficulty) {
        // Show quiz container
        quizContainer.style.display = 'block';
        scoreContainer.style.display = 'block';
        difficultyContainer.style.display = 'none';
        
        // Determine the URL based on the selected difficulty
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

        // Show the first question
        showQuestion(diff);
    }

    startBtn.addEventListener('click', startQuiz);

  // Function to handle submitting an answer
function submitAnswer() {
    // Check if the selected answer is correct
    const isCorrect = checkAnswer();

    // Calculate the base points
    const basePoints = 500;

    // Update points by base points
    points += basePoints;

// Calculate streak bonus points

// Add streak bonus points to total points

   
    // Update the score and streak
    if (isCorrect) {
        score++;
        streak++;
        // Calculate bonus points (20% of base points) only if the answer is correct
        const bonusPoints = Math.round(basePoints * 0.20);
      
        // Add bonus points to total points
        points += bonusPoints;
        const bonusTimePoints = Math.round((timeBonus/100) * points);
        const difficultyBonusPoints = Math.round(difficultyBonus* basePoints);
        points += difficultyBonusPoints;
        points += bonusTimePoints;

        const streakBonusPoints = Math.round((5 * streak / 100) * points);
        points += streakBonusPoints;
        
    } else {
        streak = 0;
    }

    

    // Update score and streak display
    updateScore();

    // Increase the number of answered questions
    currentQues++;
    answeredQuestions++;

    if (answeredQuestions >= totalQuestions) {
        // Hide the quiz container if the desired number of questions have been answered
        quizContainer.style.display = 'none';
        console.log('All questions answered. Hiding quiz container.');
        answeredQuestions = 0; // Reset answered questions count
    } else {
        console.log('Showing next question.');

        // Otherwise, show the next question
        showQuestion(diff);
        calculateTimeBonus();
    }

    // Reset selected choices and disable the submit button
    choices.forEach(choice => {
        choice.classList.remove('selected');
        choice.querySelector('input').checked = false;
    });
    submitBtn.disabled = true;
    // Change submit button color back to blue
    submitBtn.classList.remove('selected');
}


    // Event listener for the submit button
    submitBtn.addEventListener('click', submitAnswer);

    easyBtn.addEventListener('click', () => showQuiz('easy'));
    mediumBtn.addEventListener('click', () => showQuiz('medium'));
    hardBtn.addEventListener('click', () => showQuiz('hard'));

    // Function to handle fetching and displaying a new question
    function showQuestion(url) {
        const numQuestions = document.getElementById('question-select').value;
        
        // Set the total number of questions
        totalQuestions = parseInt(numQuestions);
        updateScore();
        // Fetch questions from the specified PHP script excluding encountered questions
        fetch(`${url}?num=${numQuestions}&encountered=${encounteredQuestions.join(',')}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                // Check if the response contains an error
                if (data.error) {
                    console.error('Error fetching question:', data.error);
                } else {
                    // Check if the received question is encountered, if yes, fetch another question
                    if (encounteredQuestions.includes(data.Questions)) {
                        showQuestion(url);
                        return;
                    }
                    // Display the random question and choices
                    document.getElementById('question').textContent = data.Questions;
                    document.getElementById('a_text').textContent = data.a;
                    document.getElementById('b_text').textContent = data.b;
                    document.getElementById('c_text').textContent = data.c;
                    document.getElementById('d_text').textContent = data.d;
                    corrAns = data.answers;
                    ques = data.Questions;
                    encounteredQuestions.push(data.Questions); // Add the encountered question to the list

                    // Reset selected choices and disable the submit button
                    choices.forEach(choice => {
                        choice.classList.remove('selected');
                        choice.querySelector('input').checked = false;
                    });
                    submitBtn.disabled = true;
                    // Change submit button color back to blue
                    submitBtn.classList.remove('selected');
                }
            })
            .catch(error => console.error('Error fetching question:', error));
    }

    // Add event listener to each choice to enable/disable the submit button based on selection
    choices.forEach(choice => {
        choice.addEventListener('click', function() {
            // Remove shading from all choices
            choices.forEach(c => c.classList.remove('selected'));
            // Add shading to the selected choice
            this.classList.toggle('selected');
            // Enable the submit button when a choice is selected
            submitBtn.disabled = false;
            // Add class to submit button to turn it green
            submitBtn.classList.add('selected');
        });
    });
   // Function to calculate time bonus
function calculateTimeBonus() {
    clearInterval(timeBonusInterval); // Clear any existing interval
     timeBonus = 100; // Initial time bonus in percent
    const timeBonusElement = document.getElementById('time-bonus');
    timeBonusElement.textContent = timeBonus + '%'; // Display initial time bonus

    timeBonusInterval = setInterval(() => {
        // Decrement time bonus by 10% every 3 seconds
        timeBonus -= 10;
        timeBonusElement.textContent = timeBonus + '%'; // Update time bonus display
    }, 3000);
}

    // Function to check if the selected answer is correct
    function checkAnswer() {
        const selectedChoice = document.querySelector('.choice-label input:checked');
        if (!selectedChoice) {
            console.log('no choice selected')
            // No choice is selected, return false
            return false;
        }

        // Retrieve the value of the selected choice
        const selectedValue = selectedChoice.value;

        // Compare the selected value with the correct answer
        return selectedValue === corrAns;
    }
});
