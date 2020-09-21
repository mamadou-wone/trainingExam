<!DOCTYPE html>
<html lang="en">
    <?php
    include('header.php')
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="tout.css">
    <title>Document</title>
</head>
<body id="contact">
    
            <form  action="contacternous.php" method="post">
                <h1>Contactez-nous!</h1>
    <input placeholder="Nom ou téléohone" type="text" id="nom" name="user_name">

        <input  placeholder="adresse mail" type="email" id="email" name="user_email">
        <textarea placeholder="message" id="message" name="user_message"></textarea>
   
    <div class="button">
    <button type="submit">Envoyer</button>
    </div>
   
           </form>
          
                <?php 
                include('footer.php');
                ?>
</body>
</html>