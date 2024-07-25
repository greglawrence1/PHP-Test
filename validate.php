<?php
class Validator {

    public static function validateEmail($email){

        $sanitise = filter_var($email, FILTER_SANITIZE_EMAIL);

        return filter_var($sanitise, FILTER_VALIDATE_EMAIL);
    }
}

?>