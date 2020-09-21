<?php 
session_start();
       $pass_hache = md5($_POST['password']);
        $bdd = new PDO('mysql:host=localhost;dbname=projet_php;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        $requete2= $bdd -> prepare('INSERT INTO connexion(username,password) VALUES(?,?)');
$requete2->execute(array(htmlspecialchars($_POST['username']),htmlspecialchars($pass_hache)));

 

       ?> 