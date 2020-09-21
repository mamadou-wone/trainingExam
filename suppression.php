<?php 
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="delete.css">
    <title>Document</title>
</head>
<body id="suppression">
<div id="container">

<form action="suppressionvalider.php" method="post" id="suppression">
<h1>Attention! Entrer l'ID pour confirmer la suppression!</h1>
<input type="number" placeholder="ID" name="number" id="number">
<input type="submit" id="submit" value="delete">
<a href="allmembre.php">Retour</a>
</form>
</div>
    
</body>
</html>
