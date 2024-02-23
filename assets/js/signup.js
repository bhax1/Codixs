// signup.js
document.addEventListener('DOMContentLoaded', function() {
    // Get reference to the input in the signup.html file
    var signupEmailInput = document.getElementById('signupEmailInput');

    // Retrieve the stored email text from sessionStorage
    var storedEmail = sessionStorage.getItem('signupEmail');

    // Set the retrieved email text as the value of the signup email input
    signupEmailInput.value = storedEmail;
});