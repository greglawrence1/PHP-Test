<?php
 
    include "connection.php";

    if(isset($_POST["submit"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $query = "INSERT INTO users
             (Email, UserPassword)
             VALUES
             ('$email', '$password')   
        ";

        echo $query;
        exit();
        //mysqli_query($connection, $query);


        header('location:form.php');
    }
?>