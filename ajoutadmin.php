<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div id="login">
        <form class="box" action="verifadmin.php" method="POST">
            <h1>Login</h1>
            <p>
                <label></label>
                <input  placeholder="Username" type="text" id="=username" name="username">
            </p>
        <p>
            
            <input type="password" id="password" name="password" placeholder="Password">
            </p>
            
           <div class="submit"> <p>
                <input type="submit" value="login">
            </p></div>
                  <!--  <h5>Vous n’avez pas de compte ? <a href="inscription.php">Inscrivez-vous</a> </h5>      -->
        </form>

        </div>
      
    
<?php 
            include('footer.php');
?>
</body>
</html>