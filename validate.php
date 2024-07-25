<?php
class Validator {

    public static function validateEmail($email){

        $sanitise = filter_var($email, FILTER_SANITIZE_EMAIL);

        return filter_var($sanitise, FILTER_VALIDATE_EMAIL);
    }

    public static function validateDOB($DOB){
        $sanitiseDOB = filter_var($DOB, FILTER_SANITIZE_NUMBER_INT);

        return $sanitiseDOB;
    }

    public static function validatePassword($password){
       
        $pass = ($password);

        return $pass;
    }
}

?>