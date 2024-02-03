<?php

if (isset($_POST['opslaan'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "spelletjes";

    $title = $_POST['titel']; // Titel van het spel uit het formulier
    $rating = $_POST['rating']; // Beoordeling van het spel uit het formulier
    $omschr = $_POST['beschrijving']; // Beschrijving van het spel uit het formulier
    $code = $_POST['code']; // Code van het spel uit het formulier
    $imgcode = $_POST['imgcode']; // Afbeeldingscode van het spel uit het formulier
    $cat = $_POST['categorie']; // Categorie van het spel uit het formulier

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
    header('location: index.php'); // Doorverwijzen naar index.php na succesvolle update
}
