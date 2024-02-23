document.addEventListener('DOMContentLoaded', function() {
    const startBtn = document.getElementById('start-btn');
    const easyBtn = document.getElementById('easy-btn');
    const mediumBtn = document.getElementById('medium-btn');
    const hardBtn = document.getElementById('hard-btn');
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
        quizContainer.style.display = 'block';
        difficultyContainer.style.display = 'none';
    }

    // Event listeners
    startBtn.addEventListener('click', startQuiz);

    easyBtn.addEventListener('click', showQuiz);
    mediumBtn.addEventListener('click', showQuiz);
    hardBtn.addEventListener('click', showQuiz);
});
