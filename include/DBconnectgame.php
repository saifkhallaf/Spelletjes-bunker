<?php

function dbconnect(){
    // Verbinding maken met de database
    $servername = "localhost";
    $database = "spelletjes";
    $username = "root";
    $password = "";

    try {
        /* Variabele met object om databaseverbinding te maken */
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        // Zet de PDO-error modus naar exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Verbinding mislukt: " . $e->getMessage();
    }
    
    return $conn;
}

