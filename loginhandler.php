<?php
include_once('include/DBconnect.php');

if (isset($_POST['login'])) {
    $email = $_POST['inputEmail'];
    $password = $_POST['inputPassword'];

    $conn = dbconnect();

    $stmt = $conn->prepare("SELECT * FROM gebruikers WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();
    $passwordHash = $user["wachtwoord"];

    if ($user && password_verify($password, $passwordHash)) {
        // Correct password, allow login
        session_start();

        // check if the user is an admin
        if ($user["admin"] == "YES") {
            // create a different session for admins
            $_SESSION['admin_email'] = $email;
        } else {
            // create a normal session for regular users
            $_SESSION['email'] = $email;
        }

        header("location: index.php");
    } else {
        // Incorrect email or password, show error message
        $message = "Incorrect email or password.";
        echo $message;
    }
}

