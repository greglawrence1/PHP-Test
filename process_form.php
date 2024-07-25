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

        $emailValid = Validator::validateEmail($email);
        $DOBValid = Validator::validateDOB($DOB);
        $passwordValid = Validator::validatePassword($password);
        if($emailValid && $DOBValid && $passwordValid){

            $stmt = $connection->prepare("SELECT * FROM users WHERE Email=?");
            $stmt->execute([$emailValid]); 
            $user = $stmt->fetch();
            if ($user) {

                echo "email already exists";
            } else {   

        $sql = "INSERT INTO users
             (Email, DOB , UserPassword)
             VALUES
             ('$emailValid', '$DOBValid', '$passwordValid')   
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
}
    }
    
?>