const form = document.getElementById('form');
const username = document.getElementById('username');
const password = document.getElementById("password");
const errorElement = document.getElementById('error');

form.addEventListener('submit', (e) => {
    let messages = [];
    if (username.value === '' || username.value === null) {
        messages.push('name is required');
        console.log(messages);
    }
    if (password.value.length <= 6) {
        messages.push('password must be 6 or more characters');
    } else if (password.value.length >= 20) {
        messages.push('password must be 20 or less characters');
    } else if (password.value === username.value || password.value === "password") {
        messages.push('Password can not be password or username')
    }
    if (messages.length > 0) {
        e.preventDefault();
        errorElement.innerText = messages.join('\n');
    }
})