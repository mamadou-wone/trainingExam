<?php 
session_start();
 $bdd = new PDO('mysql:host=localhost;dbname=projet_php;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  $requete1= $bdd -> prepare('INSERT INTO inscription(id,nom,prénom,date_naissance,mail) VALUES(0,?,?,?,?)');
$requete1->execute(array(htmlspecialchars($_POST['nom']),htmlspecialchars($_POST['prénom']), htmlspecialchars($_POST['date']),
htmlspecialchars($_POST['email'])));
header('Location:inscription.php');

?>