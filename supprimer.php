<?php
    require_once 'connexion.php';
    $sql = "DELETE FROM anniversaire WHERE id = ?";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$_GET['id']]);

    header('location:index.php');

?>