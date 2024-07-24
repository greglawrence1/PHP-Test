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

        //echo $query;
       //exit;
        mysqli_query($connection, $query);
        if(is_Numeric(mysqli_insert_id($connection))){
        header('location:form.php');
        }
            //echo "Records inserted successfully. Last inserted ID is: " . $last_id;
    }
    
?>