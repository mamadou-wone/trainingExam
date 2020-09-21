<?php 

$id = $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prénom'];
$date= $_POST['date'];
$mail = $_POST['email'];
 $bdd = new PDO('mysql:host=localhost;dbname=projet_php;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  $requete1= $bdd -> prepare("UPDATE inscription SET nom = '$nom' , prénom = '$prenom' , date_naissance = '$date' , mail ='$mail'
  
  WHERE id = '$id'");
$requete1->execute(array($id));

header('Location:allmembre.php');

?>