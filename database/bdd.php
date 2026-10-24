<?php
    try {
        $con = new PDO("mysql:host=localhost;dbname=biblio;charset-UTF","root","");
        } catch (PDOException $e) {
        die("erreur".$e->getMessage());
    }
?>