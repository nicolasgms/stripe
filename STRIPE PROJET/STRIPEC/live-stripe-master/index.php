<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="css.css" rel="stylesheet">
        <title>Accueil</title>
    </head>
    <body>
        <div class="form">
            <center><h3>Virement bancaire</h3><br></center>
            <div class="price">
                
                <form action="paiement.php" method="post">
                    <label for="prix"></label>
                    <input type="text" name="prix" id="prix" placeholder="Montant"><br><br>
                    <center><button>Procéder au paiement</button><center>
                </form>
            </div>
        </div>
    </body>
</html>