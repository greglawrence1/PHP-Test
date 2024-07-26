<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="login-wrap">
        <div class="login-html">
            <label for="tab-1" class="tab">Raffle Form Registration</label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <form action="process_form.php" method="POST">
                        <div class="group">
                            <label for="firstname" class="label">Firstname:</label>
                            <input type="text" class="input" id="firstname" name="firstname">
                            <div id="firstnameError" class="alert"></div>
                        </div>
                        <div class="group">
                            <label for="surname" class="label">Surname:</label>
                            <input type="text" class="input" id="surname" name="surname">
                            <div id="surnameError" class="alert"></div>
                        </div>
                        <div class="group">
                            <label for="email" class="label">Email:</label>
                            <input type="text" class="input" id="email" name="email">
                            <div id="emailError" class="alert"></div>
                        </div>
                        <div class="group">
                            <label for="DOB" class="label">Date of Birth (Year-Month-Day):</label>
                            <input type="text" class="input" id="DOB" name="DOB">
                            <div id="DOBError" class="alert"></div>
                        </div>
                        <div class="group">
                            <label for="password" class="label">Password:</label>
                            <input type="password" class="input" id="password" name="password">
                            <div id="passwordError" class="alert"></div>
                        </div>
                        <div class="group">
                            <button type="submit" name="submit" id="submit" class="button">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="my.js"></script>
</body>
</html>