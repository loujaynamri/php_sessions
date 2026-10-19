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
    $_SESSION['nom']='ammar';
    $_SESSION['classe']='l2dsi'
    ?>
    <h1>Bienvenue sur notre site</h1>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quam aut dolor illum, numquam modi consequatur minima expedita, cupiditate eveniet omnis soluta, in aliquam at fuga adipisci quo molestiae nobis!
</body>
</html>