<?php
class Validator {

    public static function validateEmail($email){

        $sanitise = filter_var($email, FILTER_SANITIZE_EMAIL);

        $email2 = filter_var($sanitise, FILTER_VALIDATE_EMAIL);
        $email2 = strtolower($email2);

        return $email2;
    }

    public static function validateDOB($DOB){
        
        $sanitiseDOB = filter_var($DOB, FILTER_SANITIZE_NUMBER_INT);

        return $sanitiseDOB;
    }

    public static function validatePassword($password){
       
        if(strlen($password) > 5 && strlen($password) <  30){

        $password = password_hash($password, PASSWORD_DEFAULT);
        return $password;

        }
    }
}

?>