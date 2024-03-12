<?php

function validateEmailAndPassword($email, $password) {
    
    $emailPattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

    $passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/';

    if (!preg_match($emailPattern, $email)) {
        return "Invalid email address";
    }
    if (!preg_match($passwordPattern, $password)) {
        return "Invalid password. It must contain at least 8 characters, one lowercase letter, one uppercase letter, and one digit.";
    }
    return "Valid email and password";
}
?>
