const contact = document.getElementById('contact');
const username = document.getElementById('username');
const email = document.getElementById('email');
const message = document.getElementById('message');
const errorElement = document.getElementById('error');

contact.addEventListener('submit', (e) => {
    let messages = [];
    if (username.value === '' || username.value === null) {
        messages.push('name is required');
        console.log(messages);
    }
    if (email.value.length <= 6) {
        messages.push('emailmust be 6 or more characters');
    } else if (password.value.length >= 20) {
        messages.push('email must be 320 or less characters');
    }
    if (message.value.length <= 3) {
        messages.push('Message can not be empty');
    } else if (message.value.length >= 150) {
        messages.push('Maximum message length');
    }
    if (messages.length > 0) {
        e.preventDefault();
        errorElement.innerText = messages.join('\n');
    }
})