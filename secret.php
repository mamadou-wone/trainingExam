

<?php

        if (isset($_POST['username']) && isset($_POST['password'])){

   

           try {
            $bdd = new PDO('mysql:host=localhost;dbname=projet_php;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
               }
                catch(exception $e) {
               die('Erreur '.$e->getMessage());
             }
           

    $login=$_POST["username"];
$pass=md5($_POST["password"]);


$requete= $bdd ->query('SELECT * FROM connexion');

while($donnees = $requete->fetch())
{
    
        $usernam=   $donnees['username'];
        $password = $donnees['password'];
   
       
}

if($login == $usernam && $pass == $password){
    session_start();
    include('actionadmin.php');
}else{
  
   include('404.php');
}


    }
?>