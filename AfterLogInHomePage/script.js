document.addEventListener('DOMContentLoaded', function() {
    const startBtn = document.getElementById('start-btn');
    const easyBtn = document.getElementById('easy-btn');
    const submitBtn = document.getElementById('submit');
    const difficultyContainer = document.getElementById('difficulty-container');
    const quizContainer = document.getElementById('quiz');
    const startContainer = document.getElementById('start-container');
   

    // Hide difficulty, quiz, and start containers initially
    difficultyContainer.style.display = 'none';
    quizContainer.style.display = 'none';
    startContainer.style.display = 'block';

    // Function to start the quiz
    function startQuiz() {
        difficultyContainer.style.display = 'block';
        startContainer.style.display = 'none'; // Hide start container
    }

    // Function to show the quiz based on difficulty
    function showQuiz() {
        // Show quiz container
        quizContainer.style.display = 'block';
        difficultyContainer.style.display = 'none';
        // Show the first question
        showQuestion();
    }
    startBtn.addEventListener('click', startQuiz);
    easyBtn.addEventListener('click', showQuiz);
    

    // Function to show the current question
    // Function to show the current question
// Function to show the current question
function showQuestion() {
    // Fetch a random question from PHP script
    fetch('quiz.php')
    .then(response => response.json())
    .then(data => {
        // Display the random question and choices
        document.getElementById('question').textContent = data.Questions;
        document.getElementById('a_text').textContent = data.a;
        document.getElementById('b_text').textContent = data.b;
        document.getElementById('c_text').textContent = data.c;
        document.getElementById('d_text').textContent = data.d;
    })
    .catch(error => console.error('Error fetching question:', error));
}

// Event listener for the submit button
submitBtn.addEventListener('click', function() {
    // Call showQuestion() function to display a new question
    showQuestion();
});


  
    
  

    // Event listeners
    

    
});


