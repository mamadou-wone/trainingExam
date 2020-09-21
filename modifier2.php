<!DOCTYPE html>
<html lang="en">
<?php 
    include('hedearconnect.php');
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="tableau.css">
    <link rel="stylesheet" href="tout.css">
   
    <title>Document</title>
</head>
<body id="modifier">

<div id=""></div>

    <?php 
    if(!empty($_POST['number'])){
     $id= $_POST['number'];
     //echo $id .'<br>';
     $bdd = new PDO('mysql:host=localhost;dbname=projet_php;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$requete2= $bdd -> prepare("SELECT * FROM inscription WHERE id = '$id'");
$requete2->execute(array($id));

$info = $requete2->fetch();
 if(isset($info)){   
   // echo $info['id'].$info['nom'].$info['prénom'].$info['date_naissance'].$info['mail'];
   

    ?>
    <table>
        <tr>
<td><?php  echo $info[0]; ?></td>
            <td><?php  echo $info['nom']; ?></td>
            <td><?php  echo $info['prénom']; ?></td>
            <td><?php  echo $info['date_naissance']; ?></td>
            <td><?php  echo $info['mail']; ?></td>
            </tr>
            </table>
 <?php
} }?>
    <form  action="" method="post">
        <h1>Chercher les info utiles!</h1>
<input placeholder="ID à rechercher" type="text" name="number" id="number">
<button type="submit">Shearch</button>
<a href="allmembre.php">Retour</a>

</form>

        <form class="box" action="modifier3.php" method="post">
        
            <h1>Update!</h1>
            <input placeholder="ID" type="text" name="id" id="id">
            <input placeholder="Nom" type="text" name="nom" id="nom">
            <input placeholder="Prénom" type="text" name="prénom" id="prénom">
            <input placeholder="Date de Naissance" type="date" name="date" id="date">
            <input  placeholder="Adresse mail" type="email" name="email" id="email">
       
                <input type="submit" value="Update">

                <a href="inscription.php">Déja Membre</a>
                
        
     
         
              
        </form>
                <?php 
      include('footer.php');
                ?>
</body>
</html>