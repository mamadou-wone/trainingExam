<?php 

        $bdd = new PDO('mysql:host=localhost;dbname=projet_php;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $requete2= $bdd -> prepare('INSERT INTO contact(tel,mail,message) VALUES(?,?,?)');
$requete2->execute(array(htmlspecialchars($_POST['user_name']),htmlspecialchars($_POST['user_email']),htmlspecialchars($_POST['user_message'])));

   include('contact.php');

       ?> 