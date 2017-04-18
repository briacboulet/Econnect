<?php

$bdd = new PDO('mysql:host=localhost;dbname=profil;charset=utf8', 'root', '');
$bdd = mysql_select_db("profil");

$sql = 'INSERT INTO 'profil' ('Mail','Nom') VALUES '.$_POST['Adresse mail'].', '.$_POST['Nom'].'';
mysql_query($sql);
?>