<?php
    session_start();
    $valide=true;
    if(isset($_POST["btn"])){
        $titre=trim($_POST["titre"]);
        if(empty($titre)){
            echo 'titre vide'."<br>";
            $valide=false;
        }
        $annee=trim($_POST["annee"]);
        if(empty($annee)){
            echo 'annee vide'."<br>";
            $valide=false;
        }else if((int)$annee<1900 || (int) $annee>2025){
            echo 'annee in valide'."<br>";
            $valide=false;
        }
        $cate=trim($_POST["cate"]);
        if(empty($cate)){
            echo 'categories vides'."<br>";
            $valide=false;
        }
        $url=trim($_POST["url"]);
        if(empty($url)){
            echo 'URL vide'."<br>";
            $valide=false;
        }else if(strnatcmp(substr($url,0,5),"https")!=0 && strnatcmp(substr($url,0,4),"http")!=0){
            echo 'URL doit commencer par https ou http'."<br>";
            $valide=false;
        }
        $res=$_POST["res"];
        if(empty($res)){
            echo 'resumé vide';
            $valide=false;
        }else if(str_word_count($res)>8){
            echo 'le résume ne depase pas 8 mot'."<br>";
            $valide=false;
        }
        if($valide){
            $cat=explode(",",$cate);
            $livres=[
            'titre'=>$titre,
            'annee'=>$annee,
            'nombreCategories'=>str_word_count($cate),
            'categories'=>$cate,
            'url'=>$url,
            'resume'=>$res];
            $_SESSION["leslivres"][]=$livres;
            header("location:affichage.php");
        }
        
    }
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
    <h1>propositions de livres</h1>
    <form action="<?$_SERVER['PHP_SELF'] ?>" method="post">
        <h3>information du livre</h3>
        Titre du livre <br><input type="text" name="titre" placeholder="Algorithmes pour debutants"><br>
        Année <br><input type="text" name="annee" placeholder="2021"><br>
        Ctégories(séparées par virgules) <br><input type="text" name="cate" placeholder="informatique,algorithmique"><br>
        URL extrait <br><input type="text" name="url" placeholder="https://books.tn/extraits/algo-debutants.pdf"><br>
        Résumé <br><textarea type="text" name="res" placeholder="Introduction progressive aux structures données"></textarea><br>
        <button class="btn btn-dark" type="submit" name="btn">Ajouter</button>
    </form>
</body>
</html>
