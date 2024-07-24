<?php
 
    include "connection.php";

    if(isset($_POST["submit"])){
        $email = $_POST["email"];
        $DOB = $_POST["DOB"];
        $password = $_POST["password"];

        $query = "INSERT INTO users
             (Email, DOB , UserPassword)
             VALUES
             ('$email', '$DOB', '$password')   
        ";

       
        mysqli_query($connection, $query);


        header('location:form.php');
    }
    
?>