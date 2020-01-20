<!DOCTYPE html>
<html>
    <head>
        <!-- META TAGS -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="public/css/font.css" type="text/css" rel="stylesheet"> <!--load all styles -->
        <link href="public/css/style.css" type="text/css" rel="stylesheet" /> 
    </head>
        
    <body>
        <div class="container-fluid p-0">
            <?= $content ?>
            <footer>
                <div class="container p-3">
                    <div class="footer-links row d-flex justify-content-around py-4">
                        <div class="links-site col-md-4 px-auto">
                            <h4 class="mb-3 py-2">Plan du site</h4>
                            <ul>
                                <li><a href="index.php">Accueil</a></li>
                                <li><a href="index.php?action=particulier">Particulier</a></li>
                                <li><a href="index.php?action=professionnel">Professionnel</a></li>
                                <li><a href="index.php?action=demandeur-emploi">Demandeur d'emploi</a></li>
                                <li><a href="index.php?action=tarifs">Tarifs</a></li>
                            </ul>
                        </div>
                         <div class="links-useful col-md-4">
                             <h4 class="mb-3 py-2">Pratique</h4>
                             <ul>
                                 <li><a href="index.php?action=mention-legales">Mentions legales</a></li>
                                 <li><a href="index.php?action=contact">Contact</a></li> 
                             </ul>
                         </div>
                        <div class="adresse col-md-4">
                            <h4 class="mb-3 py-2">Adresse</h4>
                            <p>31 Rue De La Pierre Trouée <br>
                               62630 <br>
                               Etaples-sur-mer</p>
                        </div>
                    </div>
                    <div class="footer-social">
                        <a class="m-3" href="#">f</a>
                    </div>

                </div>
            </footer>
        </div>

    </body>
</html>