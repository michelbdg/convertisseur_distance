<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Récuperer les données du formulaire 
    $distance = floatval($_POST['distance']);


    // Convertir les unitées de mesures 
    $metre_a_kilometre = 0.001;
    $metre_a_miles = 0.000621371;
    $kilometre_a_metre = 1000;
    $kilometre_a_miles = 0.621371;
    $miles_a_metre = 1609.34;
    $miles_to_kilometre = 1.60934;


    $result_metre = $distance * $kilometre_a_metre;
    $result_kilometre = $distance * $metre_a_kilometre;
    $result_miles = $distance * $metre_a_miles;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>résultats</title>
</head>
<body>
    <?php
        echo "<h3>Résultats de la conversion :</h3>";
        echo "<p>". $distance . " Mètres équivaut à " . $result_kilometre. " Kilomètres</p>";
        echo "<p>". $distance . " Mètres équivaut à ". $result_miles. " Miles</p>";
    ?>
</body>
</html>