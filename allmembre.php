
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="tableau.css">
    
    <title>Document</title>
</head>
<body id="allmembre2">
    
    <?php
if(!empty($_POST['search'])) {
$bdd = new PDO('mysql:host=localhost;dbname=projet_php;charset=utf8','root','');
$search = $_POST['q'];
//echo $search;
$articles = $bdd->query("SELECT * FROM inscription where nom = '$search' or prénom ='$search' or id ='$search' or date_naissance = '$search' or mail = '$search'");

   $q = htmlspecialchars($_POST['q']);
   $a = $articles ->fetch();
}
?>
<form id="allmembre" method="post">
    <h1>ID</h1>
   <input type="text" name="q" placeholder="Recherche..." />
   <input type="submit" name="search" value="Valider" id="submit"/>
</form>
<ul>
<?php 
if(isset($a)){
?>
<li>
    <table><thead>
        <tr>
      <th></th>
 <td> <?= $a['id'] ?> </td>
  <td>  <?= $a['nom'] ?></td>
 <td>   <?= $a['prénom']; ?> </td>
  <td>  <?= $a['date_naissance'] ?> </td>
   <td> <?= $a['mail']; ?> </td>
          
    </tr>
    </thead>
    </table>
</li>
<?php }
?>
</ul>   <form>
      <div id="container">  
      <form  method="get">  
          <table>
          <thead>    
          <tr><th>LISTE DES MEMBRES</th>
          <th></th>
        </tr>
          </thead>
        </table>
<table>
    
    <thead> 
               <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date_naissance</th>
            <th>Mail</th>
             <th>Action 1</th>
             <th>Action 2</th>
        </tr>
        </thead>

        <?php  
         $bdd = new PDO('mysql:host=localhost;dbname=projet_php;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
         $requete= $bdd ->query('SELECT * FROM inscription');
             while($donnees = $requete->fetch()){
                 
                    
             
        ?>
            <div id="scroll">
              
        <tr>
            
            <td><?php  echo $donnees[0]; ?></td>
            <td><?php  echo $donnees['nom']; ?></td>
            <td><?php  echo $donnees['prénom']; ?></td>
            <td><?php  echo $donnees['date_naissance']; ?></td>
            <td><?php  echo $donnees['mail']; ?></td>
            <form action="suppression.php" method="post">
            <td> <button type="submit"><a href="suppression.php"> Supprimer</a></button></td>
            </form>
            <form action="modifier2.php" method="post">
            <td> <button type="submit">Modifier</button></td>
            </form>
            
            
          
 
        </tr>
            </div>
             <?php }?>
</table>
</form>
</div> 
        </form>
        <?php
      //  include('footer.php');
        ?>
</body>
</html>