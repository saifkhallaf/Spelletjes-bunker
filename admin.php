<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spelletjes";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$password = 'ADMINPASS'; // Replace with the actual password

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert the hashed password into the database
$sql = "INSERT INTO gebruikers (gebruikersnaam, email, wachtwoord, admin) 
        VALUES ('ADMIN', 'ADMIN@admin.com', '$hashed_password', 'YES')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
