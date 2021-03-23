function validateForm() {
    let name = document.forms["contact"]["name"].value;
    let email = document.forms["contact"]["text"].value;
    let message = document.forms["contact"]["message"].value;
    if (name == "" || email == "" || message == "") {
        alert("Name must be filled out");
        return false;
    }
}