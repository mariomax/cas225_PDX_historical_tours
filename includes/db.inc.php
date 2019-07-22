<?php
try
{
    // The connection needed to run on Green Geeks:
    // $pdo = new PDO('mysql:host=localhost;dbname=worldwi3_pht_db', 'worldwi3_pht_user', 'mypasswordCAS225');

    // The connection for localhost.
    $pdo = new PDO('mysql:host=localhost;dbname=pht_db', 'pht_user', 'mypassword');
    // Comment one or the other out depending on where it's getting displayed from.

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
    // PDO - PHP Data Object.
    // "->" instantiates methods and/or properties to an object ($variable).
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    echo $e->getMessage();
    // The results will display on this page - that's why it's included here.
    include 'error.html.php';
    // Finish the try / catch funstion of connecting to the database.
    exit();
}
