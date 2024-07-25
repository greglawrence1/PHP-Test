function dateFormat(date) {
    var DatePattern = /^\d{4}-\d{2}-\d{2}$/;
    return DatePattern.test(date)
}

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
    
    else if (!dateFormat(DOBField.value)) {
        DOBError.innerHTML = "Invalid DOB format! Please enter in the format year-month-date (e.g., 2000-12-03).";
        DOBError.className = "alert alert-danger";
        DOBError.style.display = "block";
        formValid = false;

    } else {
        let text = DOBField.value;
        const myArray = text.split("-");
        let year = parseInt(myArray[0]);
        let month = parseInt(myArray[1]) - 1; 
        let day = parseInt(myArray[2]);
        let birthDate = new Date(year, month, day);
        let today = new Date();

        
        let age = today.getFullYear() - birthDate.getFullYear();
        let ageCalc = today.getMonth() - birthDate.getMonth();

        if (ageCalc < 0 || (ageCalc === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }

        if (age < 18) {
            DOBError.innerHTML = "You must be at least 18 years old.";
            DOBError.className = "alert alert-danger";
            DOBError.style.display = "block";
            formValid = false;
        }
    }
    
   

    if (passwordField.value.length > 30 || passwordField.value.length < 5) {
        passwordError.innerHTML = "Invalid Password! Must be between 5 and 30 characters.";
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