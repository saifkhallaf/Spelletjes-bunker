<?php

$code = $_POST['code'];
$rating = $_POST['rating'];
$omschr = $_POST['beschrijving'];
$imgcode = $_POST['imgcode'];
$titel = $_POST['titel'];
$cat = $_POST['categorie'];

$host = 'localhost';
$dbname = 'spelletjes';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);

$sql = "INSERT INTO cards (code, rating, beschrijving, imgcode, titel, categorie)
VALUES (?, ?, ?, ?, ?, ?);";

$stmt = $pdo->prepare($sql);

$stmt->execute([$code, $rating, $omschr, $imgcode, $titel, $cat]);

header('Location: index.php');
