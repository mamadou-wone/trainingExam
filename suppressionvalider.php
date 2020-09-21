<?php
//echo $_POST['number'];
session_start();
$id = $_POST['number'];
$bdd = new PDO('mysql:host=localhost;dbname=projet_php;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$requete2= $bdd -> prepare("DELETE FROM inscription WHERE id = '$id'");
$requete2->execute(array($id));

header('Location:allmembre.php');
?>