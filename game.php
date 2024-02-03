<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spelletjes";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the ID parameter from the URL
$id = $_GET['id'];

// Prepare the SQL statement with a placeholder
$sql = "SELECT code FROM cards WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    die("Error preparing statement: " . mysqli_error($conn));
}

// Bind the ID parameter to the prepared statement
mysqli_stmt_bind_param($stmt, "i", $id);

// Execute the prepared statement
if (!mysqli_stmt_execute($stmt)) {
    die("Error executing statement: " . mysqli_stmt_error($stmt));
}

// Get the game code from the prepared statement
mysqli_stmt_bind_result($stmt, $game_code);

// Fetch the result
if (!mysqli_stmt_fetch($stmt)) {
    die("Error fetching result: " . mysqli_stmt_error($stmt));
}

// Close the statement
mysqli_stmt_close($stmt);

// Close the database connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<html>

<head>
    <title>Game</title>
</head>
<style>



</style>

<body>

    <?php include('nav.php') ?>





    <div align=center><script src="<?php echo $game_code; ?>"></script></div>

    <?php include("footer2.php") ?>



</body>

</html>