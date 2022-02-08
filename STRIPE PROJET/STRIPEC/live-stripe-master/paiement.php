<?php
if(isset($_POST['prix']) && !empty($_POST['prix'])){
    require_once('vendor/autoload.php');
    $prix = (float)$_POST['prix'];

    // On instancie Stripe
    \Stripe\Stripe::setApiKey('sk_test_51J0nxYCLT1FinbvmWYdOJpcHGNz9WvhSLXyJXYAJB6vv6gcZpFM70yTp5hR8cauMHs5thjqDhRamE1PsfJeifZq200lBF2NQ18');

    $intent = \Stripe\PaymentIntent::create([
        'amount' => $prix*100,
        'currency' => 'eur'
    ]);
}else{
    header('Location: /index.php');
}


?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="css.css" rel="stylesheet">
        <title>Paiement</title>
    </head>
    <body>
        <div class="form">
            <form method="post">
                <div id="errors"></div><!--Contiendra les messages d'erreur de paiement-->
                <input type="text" id="cardholder-name" placeholder="Titulaire de la carte" >
                <div id="card-elements"></div><!--Contiendra le formulaire de saisie des informations de carte-->
                <div id="card-errors" role="alert"></div><!--Contiendra les erreurs relatives à la carte-->
                <button id="card-button" type="button" data-secret="<?= $intent['client_secret'] ?>">Procéder au paiement</button>
            </form>
        </div>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>