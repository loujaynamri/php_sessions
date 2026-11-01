<?php
    session_start();
    $tab=$_SESSION["leslivres"];
    echo "<table class='table table-bordered'>
    <tr class='table-primary'>
    <th>Titre</th>
    <th>Année</th>
    <th>nombre de catégories</th>
    <th>Catégories</th>
    <th>Action</th>
    </tr>";
    foreach ($tab as $value) {
        echo "<tr class='table-light'>";
        echo "<td>".htmlspecialchars($value["titre"])."</td>";
        echo "<td>".htmlspecialchars($value["annee"])."</td>";
        echo "<td>".htmlspecialchars($value["nombreCategories"])."</td>";
        echo "<td>".htmlspecialchars($value["categories"])."</td>";
        echo "<td><a href='resumer.php?btn=".$value['resume']."'><button type='button' class='btn btn-success'>Voir le résumé</button></a></td>";
        echo "</tr>";
    }
    echo "</table>";
    if(isset($_POSTT["btn-retour"])){
        header("Location:index.php");
        exit;
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
        <form action="<?$_SERVER['PHP_SELF']?>" method="post">
            <button class="btn btn-dark" name="btn-retour" type="submit"> Retoure au formulaire </button>
        </form>
    </body>
    </html>