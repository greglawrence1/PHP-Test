
function validateForm(event) {
    var emailField = document.getElementById("email");
    var emailError = document.getElementById("emailError");

    emailError.style.display = "none";

    if (emailField.value === "") {
        emailError.innerHTML = "Invalid Email! Please try again.";
        emailError.className = "alert alert-danger";
        emailError.style.display = "block";
        event.preventDefault(); 
    }
    if (!emailField.value.includes("@") && !emailField.value === "") {
        emailError.innerHTML = "Invalid Email! Please enter an @";
        emailError.className = "alert alert-danger";
        emailError.style.display = "block";
        event.preventDefault(); 
    }
}

document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector("form");
    form.addEventListener("submit", validateForm);
});