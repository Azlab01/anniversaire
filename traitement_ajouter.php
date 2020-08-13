<?php
    require_once 'connexion.php';
    $nom         = htmlspecialchars(trim($_POST['nom']));
    $date        = htmlspecialchars(trim($_POST['date']));
    $description = htmlspecialchars(trim($_POST['description']));
    $message     = htmlspecialchars(trim($_POST['message']));
    
    $donnees = [
        $nom,
        $date,
        $description,
        $message,
    ];
    $sql = "INSERT INTO anniversaire (nom, date, description, message) values(?, ?, ?, ?)";
    $stmt = $bdd->prepare($sql);
    $stmt->execute($donnees);

    header('location:index.php');

?>