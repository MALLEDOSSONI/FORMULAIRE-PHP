<?php
// Vérifie que la méthode d'envoi du formulaire est POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Récupère les informations envoyées par le formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $ville = $_POST['ville'];
    echo 'je suis Mr' . $nom,  'votre Email est' . $email,
    'et votre phone number' .
        $phone, 'votre ville est' . $ville;
}
