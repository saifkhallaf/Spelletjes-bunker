<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete - Spelletjesbunker</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    }

    body {
        background-color: #f1f1f1;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .container {
        max-width: 800px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);

    }

    h1 {
        font-size: 36px;
        margin-bottom: 20px;
        margin-top: 15%;
    }

    button,
    a.button {
        text-decoration: none;
        color: #fff;
        background-color: #698AFD;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
        margin-right: 10px;
    }

    button:hover,
    a.button:hover {
        background-color: #506ab2;
    }

    a.button.no {
        background-color: #F44336;
    }

    form {
        margin-top: 20px;
    }

    label {
        display: block;
        font-size: 24px;
        margin-bottom: 10px;
    }

    input {
        padding: 10px;
        font-size: 18px;
        border-radius: 5px;
        border: 2px solid #ccc;
        width: 100%;
        box-sizing: border-box;
        margin-bottom: 20px;
    }

    input:focus {
        border-color: #698AFD;
        outline: none;
        box-shadow: 0 0 5px rgba(105, 138, 253, 0.5);
    }
</style>

<body>
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

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query the database to get the game information
    $sql = "SELECT * FROM cards WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // If the user has confirmed the deletion, remove the game from the database
        if (isset($_POST['confirm']) && $_POST['confirm'] == 'yes') {
            $deleteSql = "DELETE FROM cards WHERE id = ?";
            $deleteStmt = mysqli_prepare($conn, $deleteSql);
            mysqli_stmt_bind_param($deleteStmt, 'i', $id);
            mysqli_stmt_execute($deleteStmt);
            echo "Game deleted successfully.";
            header("location: index.php");
        } else {
            // Generate the HTML for the confirmation screen
            ?>
            <h1>Confirm Deletion</h1>
            <p>Are you sure you want to delete the game "<?php echo $row['titel']; ?>"?</p>
            <form method="post">
                <input type="hidden" name="confirm" value="yes">
                <button type="submit" style="background-color: #FF4D4D;">Yes</button>
                <a href="index.php" style="background-color: #698AFD; color: #fff; display: inline-block; text-decoration: none; padding: 10px 20px; border-radius: 5px;">No</a>
            </form>
            <?php
        }
    } else {
        echo "Game not found";
    }
} else {
    echo "You do not have permission to delete games";
}

// Close the database connection
mysqli_close($conn);
?>

</body>

</html>