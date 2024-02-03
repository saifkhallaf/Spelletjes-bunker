<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SpelletjesBunker</title>
    <script>
        window.onload = function() {
            const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
            if (isMobile) {
                document.body.innerHTML = '<h1>Access Denied</h1><p>Deze website is niet acceptable voor telefoons, Ipads en Tablets. De games zijn alleen speelbaar voor Computers en Laptops</p>';
            }
        };
    </script>

</head>

<body>
    <?php

    $servername = "localhost";
    $database = "spelletjes";
    $username = "root";
    $password = "";

    try {
        /* variable met object om database verbinding te maken */
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    if (isset($_GET['category'])) {
        $category = $_GET['category'];
        $stmt = $conn->prepare("SELECT * FROM cards WHERE categorie = :category");
        $stmt->bindValue(":category", $category);
    } else {
        $stmt = $conn->prepare("SELECT * FROM cards");
    }

    ?>
    <?php include('nav.php') ?>

    <div class="game-cards-wrapper">
        <?php include('game-card.php') ?>
    </div>
    <footer><?php include("footer.php") ?></footer>
</body>
</html>