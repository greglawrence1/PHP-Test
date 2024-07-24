<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <h1>Raffle Form Registration</h1>

    <form action="/process_form.php" method="POST">
        <div class="container p-5 my-5 bg-primary text-white">
        <span class="input-group-addon" id="sizing-addon1">@</span>
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" name="email">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" name="password">
    <br>
        <button type="submit" class="btn btn-light">Submit</button>
    </div>
    </form>
</body>
</html>