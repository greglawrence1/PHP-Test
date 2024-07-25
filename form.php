<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color:lightblue">
    <h1>Raffle Form Registration</h1>

    <form action="process_form.php" method="POST">
        <div class="container p-5 my-5 bg-primary text-white">
        <span class="input-group-addon" id="sizing-addon1">@</span>
        <label for="email" class="form-label">Email:</label>
        <input type="text" class="form-control" id="email" name="email">
        <div id="emailError" class="alert"></div>
        <label for="DOB" class="form-label">Date of Birth Format: Year-Month-Day:</label>
        <input type="text" class="form-control" id="DOB" name="DOB">
        <div id="DOBError" class="alert"></div>
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" name="password">
        <div id="passwordError" class="alert"></div>
    <br>
        <button type="submit" name="submit" id="submit" class="btn btn-light">Submit</button>
    </div>
    </form>
   
    <script src="my.js"></script>
</body>
</html>