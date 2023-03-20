<?php
$travels = [
    [
        'departure' => 'Paris',
        'arrival' => 'Nantes',
        'departureTime' => '11:00',
        'arrivalTime' => '12:34',
        'driver' => 'Thomas'
    ],

    [
        'departure' => 'Orléans',
        'arrival' => 'Nantes',
        'departureTime' => '05:15',
        'arrivalTime' => '09:32',
        'driver' => 'Mathieu'
    ],

    [
        'departure' => 'Dublin',
        'arrival' => 'Tours',
        'departureTime' => '07:23',
        'arrivalTime' => '08:50',
        'driver' => 'Nathanaël'
    ],

    [
        'departure' => 'Paris',
        'arrival' => 'Orléans',
        'departureTime' => '03:00',
        'arrivalTime' => '05:26',
        'driver' => 'Clément'
    ],

    [
        'departure' => 'Paris',
        'arrival' => 'Nice',
        'departureTime' => '10:00',
        'arrivalTime' => '12:09',
        'driver' => 'Audrey'
    ],

    [
        'departure' => 'Nice',
        'arrival' => 'Nantes',
        'departureTime' => '10:40',
        'arrivalTime' => '13:00',
        'driver' => 'Pollux'
    ],

    [
        'departure' => 'Nice',
        'arrival' => 'Tours',
        'departureTime' => '11:00',
        'arrivalTime' => '16:10',
        'driver' => 'Edouard'
    ],

    [
        'departure' => 'Tours',
        'arrival' => 'Amboise',
        'departureTime' => '16:00',
        'arrivalTime' => '18:40',
        'driver' => 'Priscilla'
    ],

    [
        'departure' => 'Nice',
        'arrival' => 'Nantes',
        'departureTime' => '12:00',
        'arrivalTime' => '16:00',
        'driver' => 'Charlotte'
    ],

];


// Vérifie que la méthode d'envoi du formulaire est POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Récupère les informations envoyées par le formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $ville = $_POST['ville'];
    echo "<h1>" . $nom . "</h1><br>";
    foreach ($travels as $travel) {
        if ($travel['departure'] === $ville) {
            echo "Départ: " . $travel['departure'] . "<br>";
            echo "Arrivée: " . $travel['arrival'] . "<br>";
            echo "Heure de départ: " . $travel['departureTime'] . "<br>";
            echo "Heure d'arrivée: " . $travel['arrivalTime'] . "<br>";
            echo "Chauffeur: " . $travel['driver'] . "<br>";
            echo "<br>";
        }
    }
}
