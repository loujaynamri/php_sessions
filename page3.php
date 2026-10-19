<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>
<body>
    <?php 
    include "navbar.php";
    ?>
    <h1 class="text-center">Page 3</h1>
    <h3 class="text-center" class="text-muted">Bienvenue <? $_SESSION['nom']?> de la classe <? $_SESSION['classe']?></h3>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quam aut dolor illum, numquam modi consequatur minima expedita, cupiditate eveniet omnis soluta, in aliquam at fuga adipisci quo molestiae nobis!
</body>
</html>