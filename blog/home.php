<?php

//On inclut le fichier dont on a besoin(ici à la racine)

require 'Database.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon blog</title>
</head>
<body>
    <div>
        <h1>Mon blog</h1>

        <p>En construction</p>
        <?php 
        
        //On crée un nouvel objet qui est une instance de la classe Database

        $db = new Database();

        //On fait appel à notre méthode getConnection()

        echo $db->getConnection();
        
        ?>

    </div>
</body>
</html>