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
    <link rel="stylesheet" href="tout.css">
    <title>Document</title>
</head>
<body id="inscription">

        <form class="box" action="verifmembre.php" method="post">
            <h1>Inscription</h1>
            <input placeholder="Nom" type="text" name="nom" id="nom">
            <input placeholder="Prénom" type="text" name="prénom" id="prénom">
            <input placeholder="Date de Naissance" type="date" name="date" id="date">
            <input  placeholder="Adresse mail" type="email" name="email" id="email">
         <!--   <input placeholder="Username" type="text" name="username" id="username">
            <input placeholder="Password" type="password" name="password" id="password">        -->
            
                <input type="submit" value="Inscription">
                <a href="allmembre.php">Déja Mambre</a>
        
     <!--     <h5>Vous avez un compte ?
              <a href="membre.php">Connectez-vous</a>
          </h5>   -->
         
              
        </form>
                <?php 
                        include('footer.php');
                ?>
</body>
</html>