<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Vibur&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d77f0c0f0f.js" crossorigin="anonymous"></script>
    <title>Index-locafilm</title>
</head>

<body>
    <!-- Add header section -->
    <?php include_once '../extensions/header.php' ?>
    <!-- Add main content section -->
    <main>
        <h2 class="neonText">Our movies</h2>
        <div class="container">
            <?php
            echo ' <form name="formulaire" method="post" action="#">
        <fieldset>
            <legend>Enregistrer une nouvelle location</legend>
            <div>
                <label for="client_name">Nom du client<sup>*</sup></label>
                <input type="text" id="client_name" name="client_name" placeholder="Dupont">
            </div>
            <div>
                <label for="client_firstname">Nom du client<sup>*</sup></label>
                <input type="text" id="client_firstname" name="client_firstname" placeholder="Jean">
            </div>
            <div>
                <label for="date"> Date de début de location <sup>*</sup></label>
                <input type="text" id="date" name="date">
                
            </div>
            <div>
                <label for="location">Durée de location</label>
                <input type="radio" id="week1" name="location" checked> 1 semaine </input>
                <input type="radio" id="week2" name="location"> 2 semaines </input>
                <input type="radio" id="week3" name="location"> 3 semaines </input>
            </div>
            <div>
                <p>(*) Champs obligatoires </p>
            </div>
            <button id="send" type="submit" name="envoyer">Enregistrer</button>
        </fieldset>
    </form>';
            ?>
        </div>
    </main>



    <!-- Add footer section -->
    <?php include_once '../extensions/footer.php' ?>

    <script src='../js/app/js'></script>
</body>

</html>