<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<style>
    .flip-box {
        background-color: transparent;
        width: 21%;
        height: 300px;
        perspective: 1000px;
        margin: 50px 1.5%;
        border-radius: 10px;
    }

    .flip-box-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s;
        transform-style: preserve-3d;
        border-radius: 10px;
        /* Add rounded borders */
    }

    .flip-box:hover .flip-box-inner {
        transform: rotateY(180deg);
    }

    .flip-box-front,
    .flip-box-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        border-radius: 10px;
        /* Add rounded borders */
    }

    .flip-box-front {
        background-color: #698AFD;
    }

    .flip-box-back {
        transform: rotateY(180deg);
        background-color: #698AFD;
    }

    .flip-box-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        padding: 20px;
        box-sizing: border-box;
        color: white;
    }

    .flip-box-image {
        width: 100%;
        height: 200px;
        margin-bottom: 20px;
    }

    .flip-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .flip-box-heading {
        font-size: 24px;
        margin: 0;
        position: relative;
        color: white;
    }

    .rating {
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }

    .star {
        display: inline-block;
        width: 10px;
        height: 10px;
        margin: 0 3px;
        background-color: #b3cde0;
        border-radius: 50%;
    }

    .play-button {
        margin-top: 20px;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease-in-out;
        text-decoration: none;
        color: #ffff;
    }

    .play-button:hover {
        background-color: #0062cc;
    }

    .checked {
        color: #0062cc;
    }

    .play-button a {
        text-decoration: none;
        color: #ffff;
    }

    .remove-button {
        margin-top: 20px;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: red;
        color: #fff;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease-in-out;
        text-decoration: none;
        color: #ffff;
    }

    .remove-button a {
        text-decoration: none;
        color: #ffff;
    }


    .edit-button {
        margin-top: 20px;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: lightblue;
        color: #fff;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease-in-out;
        text-decoration: none;
        color: #ffff;
    }

    .edit-button a {
        text-decoration: none;
        color: #ffff;
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

    // Query the cards table to get all the cards
    $sql = "SELECT * FROM cards";
    $result = mysqli_query($conn, $sql);

    // Check if the user is an admin
    $is_admin = false;
    if (isset($_SESSION['admin_email'])) {
        $is_admin = true;
    }

    if (isset($_GET['category'])) {
        $category = $_GET['category'];
        $stmt = $conn->prepare("SELECT * FROM cards WHERE categorie = ?");
        $stmt->bind_param("s", $category);
    } else {
        $stmt = $conn->prepare("SELECT * FROM cards");
    }


    $stmt->execute();
    $result = $stmt->get_result();
    // Generate the HTML for each card
    while ($row = mysqli_fetch_assoc($result)) {
        echo '
    <div class="flip-box">
        <div class="flip-box-inner">
            <div class="flip-box-front">
                <div class="flip-box-content">
                    <div class="flip-box-image">
                        <img src="' . $row['imgcode'] . '" alt="">
                    </div>
                    <h1 class="flip-box-heading">' . $row['titel'] . '</h1>
                    <div class="rating">';

        // Generate the HTML for the star rating based on the rating in the database
        for ($i = 0; $i < round($row['rating']); $i++) {
            echo '<span class="fa fa-star checked" style="color: white;"></span>';
        }

        echo '
                    </div>
                </div>
            </div>
            <div class="flip-box-back">
                <div class="flip-box-content">
                    <p>' . $row['beschrijving'] . '</p>';

        // If the user is an admin, add edit and remove buttons
        if ($is_admin) {
            echo '
                    <a href="edit_game.php?id=' . $row['id'] . '"><button class="edit-button">Edit game</button></a>
                    <a href="remove_game.php?id=' . $row['id'] . '"><button class="remove-button">Remove game</button></a>';
        } else {
            echo '
            <a href="game.php?id=' . $row['id'] . '"><button class="play-button">Play</button></a>';
        }

        echo '
                </div>
            </div>
        </div>
    </div>
    ';
    }

    // Close the database connection
    mysqli_close($conn);
    ?>


</body>


</html>
