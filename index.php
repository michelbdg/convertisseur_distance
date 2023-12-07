<?php


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertisseur</title>
</head>
<body>
    <h1>Convertisseur distance</h1>
    <form action="convertisseur.php" method="post">
        <label for="">distance:</label>
        <input type="text" name="distance" required>

        <label for="">De:</label>
        <select name="unity" required>
            <option value="Metre">Mètre</option>
            <option value="kilometre">Kilometre</option>
            <option value="Miles">Miles</option>
        </select>

        <input type="submit" value="Convertir">
    </form>
    <div>
        <?php 
            
        ?>
    </div>
</body>
</html>