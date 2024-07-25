<?php
 
 include "connection.php";
 include "validate.php";

    function LastDigit($number){
        $split = str_split($number);
        $last = end($split);
        return $last;
    }

    if(isset($_POST["submit"])){
        $email = trim($_POST["email"]);
        $DOB = trim($_POST["DOB"]);
        $password = trim($_POST["password"]);
        if(Validator::validateEmail($email) && Validator::validateDOB($DOB) && Validator::validatePassword($password)){
        $pass = password_hash($password, PASSWORD_DEFAULT);
        $email = strtolower($email);    
        $sql = "INSERT INTO users
             (Email, DOB , UserPassword)
             VALUES
             ('$email', '$DOB', '$pass')   
        ";

        //echo $query;
       //exit;
        //mysqli_query($connection, $query);
        
        //header('location:form.php');

        if(mysqli_query($connection, $sql)){
            $last_id = mysqli_insert_id($connection);
            echo "Records inserted successfully. Last inserted ID is: " . $last_id;

            if(LastDigit($last_id) == 0 || LastDigit($last_id) == 5)
                header('location:congrats.php');
            else{
                header('location:form.php');
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
        }
    }
    else{
        echo "failed";
    }
    
    }
    
?>