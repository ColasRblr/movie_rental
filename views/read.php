<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/extensions.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Vibur&display=swap" rel="stylesheet">
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
            require_once "../sql/config.php";
            $filmDatas = $bdd->query('SELECT * FROM FILMS');
            $films = $filmDatas->fetchAll();

            // Loop to display these datas in a html table
            foreach ($films as $film) {
                echo '<div class="movie">' . $film['NOMFILM'] . '
                
                            <div class="actions">
                                <a class="button" onclick ="return confirm(`êtes-vous sûr de vouloir supprimer ce film ?`);" href="./delete.php/?id=' . $film['CODEFILM'] . '">
                                    <i class="fa-solid fa-trash"></i>                                
                                </a>
                               
                                <form action="./update.php" method="post">
                                    <input type="hidden" name="codefilm" value="' . $film['CODEFILM'] . '">
                                    <input type="hidden" name="nomfilm" value="' . $film['NOMFILM'] . '">
                                
                                <button type="submit" onclick ="return confirm(`voulez-vous ajouter une location ?`);">
                                        <i class="fa-sharp fa-solid fa-plus"></i>
                                </button>
                            </form>
                            </div>
                    </div>';
            };
            ?>
        </div>
    </main>





    <!-- Add footer section -->
    <?php include_once '../extensions/footer.php' ?>
    <script src="https://kit.fontawesome.com/d77f0c0f0f.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>