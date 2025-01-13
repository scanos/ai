
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;
    
    if (name && email && message) {
        alert('Thank you for your message!');
        // Here you can add your code to send the form data to your server or email
    } else {
        alert('Please fill out all fields.');
    }
});
