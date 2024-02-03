<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Game</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>

<body>
    <?php include("nav.php"); ?>
    <?php


    // Maak verbinding met de database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "spelletjes";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Verbinding mislukt: " . mysqli_connect_error());
    }

    // Query de 'cards' tabel om alle kaarten op te halen
    // Query de 'cards' tabel om het spel dat je wilt bewerken op te halen
    $id = $_GET['id'];
    $sql = "SELECT * FROM cards WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    // Haal het resultaat op en sla het op in $row
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "Fout: Spel niet gevonden";
        exit;
    }


    if (isset($_GET['opslaan'])) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "spelletjes";

        $title = $_GET['titel'];
        $rating = $_GET['rating'];
        $omschr = $_GET['beschrijving'];
        $code = $_GET['code'];
        $imgcode = $_GET['imgcode'];
        $cat = $_GET['categorie'];

        $dsn = "mysql:host=$servername;dbname=$dbname;";
        $pdo = new PDO($dsn, $username, $password);

        $sql = "UPDATE cards SET 
    titel = ?, 
    rating = ?,  
    beschrijving = ?, 
    imgcode = ?,
    code = ?,
    categorie = ?
    WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$title, $rating, $omschr, $imgcode, $code, $cat, $id]);
        if ($stmt) {
            header('location: index.php');
        }
    }


    ?>
    <button type="button"><a href="index.php" class="btn btn-default">terug</a></button>
    <div class="container-fluid" style="margin-top: 5%; padding:5px;">
        <h1 class="text-center" style="padding-bottom: 20px;">Edit Game</h1>

        <form class="form-horizontal mx-auto " method="GET" action="edit_game.php">
            <div class="form-group" style="margin-left: 10%;">
                <label class="col-sm-3 control-label">Titel</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="titel" name="titel" placeholder="Title" value="<?php echo $row['titel']; ?>" required>
                </div>
            </div>
            <div class="form-group" style="margin-left: 10%;">
                <label for="inputRating" class="col-sm-3 control-label">Rating</label>
                <div class="col-sm-5">
                    <input type="number" class="form-control" id="rating" name="rating" placeholder="Rating" value="<?php echo $row['rating']; ?>" required>
                </div>
            </div>
            <div class="form-group" style="margin-left: 10%;">
                <label for="inputDescription" class="col-sm-3 control-label">Beschrijving</label>
                <div class="col-sm-5">
                    <textarea class="form-control" id="beschrijving" name="beschrijving" placeholder="Description" required><?php echo $row['beschrijving']; ?></textarea>
                </div>
            </div>
            <div class="form-group" style="margin-left: 10%;">
                <label for="inputCode" class="col-sm-3 control-label">Code</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="code" name="code" placeholder="Code" value="<?php echo $row['code']; ?>" required>
                </div>
            </div>
            <div class="form-group" style="margin-left: 10%;">
                <label for="inputImgCode" class="col-sm-3 control-label">Image Code</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="imgcode" name="imgcode" placeholder="Image Code" value="<?php echo $row['imgcode']; ?>" required>
                </div>
            </div>
            <div class="form-group" style="margin-left: 10%;">
                <label for="inputCategory" class="col-sm-3 control-label">Categorie</label>
                <div class="col-sm-5">
                    <select class="form-control" id="categorie" name="categorie" required>
                        <option value="actie">Actie</option>
                        <option value="avontuur">Avontuur</option>
                        <option value="puzzel">Puzzel</option>
                        <option value="sport">Sport</option>
                        <option value="race">Race</option>
                    </select>
                </div>
            </div>
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-5">
                    <button type="submit" name="opslaan" class="btn btn-primary">Opslaan</button>
                </div>
            </div>
        </form>

</body>

</html>