
function validateForm(event) {
    var emailField = document.getElementById("email");
    var emailError = document.getElementById("emailError");
    var DOBField = document.getElementById("DOB");
    var DOBError = document.getElementById("DOBError");
    var passwordField = document.getElementById("password");
    var passwordError = document.getElementById("passwordError");

    emailError.style.display = "none";
    DOBError.style.display = "none";
    passwordError.style.display = "none";

    if (emailField.value === "") {
        emailError.innerHTML = "Invalid Email! Please try again.";
        emailError.className = "alert alert-danger";
        emailError.style.display = "block";
        formValid = false;
    }
    if (emailField.value.includes("@") && emailField.value.length == 1) {
        emailError.innerHTML = "Invalid Email! Please enter a longer email";
        emailError.className = "alert alert-danger";
        emailError.style.display = "block";
        formValid = false;
    }

    if (DOBField.value === "") {
        DOBError.innerHTML = "Invalid DOB! Please try again.";
        DOBError.className = "alert alert-danger";
        DOBError.style.display = "block";
        formValid = false;
    }

    if (passwordField.value === "") {
        passwordError.innerHTML = "Invalid Password! Please try again.";
        passwordError.className = "alert alert-danger";
        passwordError.style.display = "block";
        formValid = false;
    }

    if(!formValid){
        event.preventDefault();
    }
}

document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector("form");
    form.addEventListener("submit", validateForm);
});