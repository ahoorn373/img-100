<?php

// Accepts login data from form
// Note that the superglobal used needs to match the form method

$email = $_POST['email'];
$password = $_POST['password'];

echo "email: $email, password: $password";
