document.addEventListener('DOMContentLoaded', function() {
    // Get references to the input and button
    var emailInput = document.getElementById('emailInput');
    var signupButton = document.getElementById('signupButton');

    // Attach a click event listener to the button
    signupButton.addEventListener('click', function(event) {
        // Prevent the default behavior of the link
        event.preventDefault();

        // Retrieve the text from the input
        var emailText = emailInput.value;

        // Store the email text in sessionStorage for later retrieval on the signup.html page
        sessionStorage.setItem('signupEmail', emailText);

        // Redirect to the signup.html page
        window.location.href = 'signup.html';
    });
});