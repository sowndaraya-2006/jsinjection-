// app.js

// Get the form and greeting message container elements
const form = document.getElementById('greeting-form');
const greetingMessage = document.getElementById('greeting-message');

// Event listener for form submission
form.addEventListener('submit', function (event) {
    // Prevent the form from reloading the page
    event.preventDefault();

    // Get the value entered in the input field
    const nameInput = document.getElementById('name').value;

    // Display a greeting message if a name is provided
    if (nameInput) {
        // Safe way to display the message (using textContent)
        greetingMessage.textContent = `Hello, ${nameInput}! Welcome to my web app.`;
    } else {
        greetingMessage.textContent = 'Please enter your name.';
    }
});
