<?php
include_once('include/DBconnect.php');

$naam = $_POST['InputUsername'];
$email = $_POST['inputEmail'];
$wachtwoord = $_POST['inputPassword'];

// Hash the password
$hashedPassword = password_hash($wachtwoord, PASSWORD_DEFAULT);

// Establish a database connection
$conn = dbconnect();

// Prepare the SQL statement with placeholders for the user input data
$sql = "INSERT INTO gebruikers (gebruikersnaam, email, wachtwoord) VALUES (:naam, :email, :wachtwoord)";
$stmt = $conn->prepare($sql);

// Bind the user input data to the prepared statement placeholders
$stmt->bindParam(':naam', $naam);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':wachtwoord', $hashedPassword);

// Execute the prepared statement to insert the user data into the database
if ($stmt->execute()) {
        // If the user data was successfully inserted into the database, redirect to the index page
        echo "Registreren succeeded. Redirecting back to the Login page in 5 seconds...";
        echo "<br><br><b>Please wait while we redirect you...</b>";
        echo "<br>If you are not redirected automatically, click <a href='login.php'>here</a>.";
        header("refresh:5;url=login.php");
        exit();
} else {
        // If there was an error inserting the user data into the database, display an error message for 5 seconds and then redirect back to the register page
        echo "Error inserting user data into the database. Redirecting back to the register page in 5 seconds...";
        header("refresh:5;url=registratie.php");
}
