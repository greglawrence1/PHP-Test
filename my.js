
function validateForm(event) {
    var emailField = document.getElementById("email");
    var emailError = document.getElementById("emailError");

    emailError.style.display = "none";

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

    if(!formValid){
        event.preventDefault();
    }
}

document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector("form");
    form.addEventListener("submit", validateForm);
});