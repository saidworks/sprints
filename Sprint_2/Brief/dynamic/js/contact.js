const contact = document.getElementById('contact');
const username = document.getElementById('username');
const email = document.getElementById('email');
const message = document.getElementById('message');
const errorElement = document.getElementById('error');

contact.addEventListener('submit', (e) => {
    let messages = [];
    let validEmail = "/^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/";
    if (username.value === '' || username.value === null) {
        messages.push('name is required');
        console.log(messages);
    }
    if (email.value.length <= 6) {
        messages.push('email must be 6 or more characters');
    } else if (email.value.length >= 320) {
        messages.push('email must be 320 or less characters');
    }
    // if (!email.value.match(validEmail)) {
    //     messages.push('enter a valid email address');
    // }
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