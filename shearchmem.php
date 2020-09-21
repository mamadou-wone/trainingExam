<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet_php;charset=utf8','root','');
$search = $_POST['q'];
echo $search;
$articles = $bdd->query("SELECT * FROM inscription where nom = '$search' or prénom ='$search' or id ='$search' or date_naissance = '$search' or mail = '$search'");

?>