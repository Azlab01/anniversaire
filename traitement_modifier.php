<?php
    require_once 'connexion.php';
    $nom         = htmlspecialchars(trim($_POST['nom']));
    $date        = htmlspecialchars(trim($_POST['date']));
    $description = htmlspecialchars(trim($_POST['description']));
    $message     = htmlspecialchars(trim($_POST['message']));
    $id          = intval($_POST['id']);
    
    $donnees = [
        $nom,
        $date,
        $description,
        $message,
        $id
    ];
    $sql = "UPDATE anniversaire SET nom = ?, date = ?, description = ?, message = ? where id = ?";
    $stmt = $bdd->prepare($sql);
    $stmt->execute($donnees);

    header('location:index.php');

?>