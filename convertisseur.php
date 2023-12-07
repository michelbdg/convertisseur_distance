<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Récuperer les données du formulaire 
    $distance = floatval($_POST['distance']);
    $unity = $_POST['unity'];

    var_dump( $distance, $unity);

    // Convertir les unitées de mesures 
    $metre__a__kilometre  = 0.001;
    $metre__a__miles =  0.000621371;

    $kilometre__a__metre = 1000;
    $kilometre__a__miles = 0.621371;

    $miles__a__metre = 1609.34;
    $miles__a__kilometre = 1.60934;


    $result_metre = $result_kilometre = $result_miles = $distance;

    switch($unity){
        case "metre":
            $resul_kilometre = $distance * $metre__a__kilometre;
            $resul_miles = $distance * $metre__a__miles;
            break;
        case "kilometres":
            $resul_metre = $distance * $kilometre__a__metre;
            $resul_miles = $distance * $kilometre__a__miles;
            break;
        case "miles":
            $resul_metre = $distance * $miles__a__metre;
            $resul_kilometre = $distance * $miles__a__kilometre;
            break;

    }
    echo "<h3>Résultats de la conversion :</h3>";
            echo "<p>". $distance . " Mètres équivaut à " .$result_kilometre. " Kilomètres</p>";
            echo "<p>". $distance. " Mètres équivaut à ". $result_miles. " Miles</p>";
}