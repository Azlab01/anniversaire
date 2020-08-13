<?php
$db_host = "";
$db_name = "";
$db_user = "";
$db_pwd = "";
try {
    
    $bdd = new PDO('mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8', $db_user, $db_pwd);
} catch (Exception $e) {
    die('Erreur :  '.$e->getMessage());
}

?>