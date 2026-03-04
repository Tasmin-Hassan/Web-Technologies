let wrongCount = 0;

function validateForm() {

    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    let emailEr = document.getElementById("emailEr");
    let passwordEr = document.getElementById("passwordEr");
    let countText = document.getElementById("count");

    emailEr.innerHTML = "";
    passwordEr.innerHTML = "";

    let isValid = true;

    if (!email.includes("@")) {
        emailEr.innerHTML = "Email must contain @ symbol.";
        isValid = false;
    }

    if (password.length < 6) {
        passwordEr.innerHTML = "Password must be at least 6 characters.";
        isValid = false;
    } 
    else if (!password.includes("#")) {
        passwordEr.innerHTML = "Password must contain # symbol.";
        isValid = false;
    }

    if (!isValid) {
        wrongCount++;
        countText.innerHTML = "Wrong submission count: " + wrongCount;
        return false;
    }

    return true;
}