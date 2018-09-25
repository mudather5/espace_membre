<?php
// connect to data base
try

{

    $bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8', 'root', 'root');

}

catch(Exception $e)

{

        die('Erreur : '.$e->getMessage());

}


?>
