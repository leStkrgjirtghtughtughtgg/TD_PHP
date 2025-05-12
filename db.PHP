<?php
    $hostname="localhost";
    $dbname="tpphp";
    $dbuser="root";
    $dbpassword = "";

    try {
        $connection = new PDO("mysql:host=$hostname;dbname=$dbname", $dbuser, $dbpassword); // caracteristique de la base de donnée sans mot de passe a la base de donnée
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Base de donnée indisponible" . $e->getMessage()); // permet d arreter le programme
    }
?>