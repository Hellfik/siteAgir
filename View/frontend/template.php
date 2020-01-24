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
            <header>
                    <nav class="navbar fixed-top smart-scroll navbar-expand-lg navbar-light">
                        <div class="container">
                            <a class="navbar-brand d-flex align-items-center" href="index.php"> <img src="public/images/logo_agir.png" style="width:75px; height:75px;" alt=""> A.G.I.R </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="main_nav">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active"> <a class="nav-link" href="index.php">Accueil</a> </li>
                                    <li class="nav-item"><a class="nav-link" href="index.php?action=particulier"> Particulier</a></li>
                                    <li class="nav-item"><a class="nav-link" href="index.php?action=professionnel"> Professionnel</a></li>
                                    <li class="nav-item"><a class="nav-link" href="index.php?action=demandeur-emploi"> Demandeur d'emploi</a></li>
                                    <li class="nav-item"><a class="nav-link" href="index.php?action=tarifs"> Tarifs</a></li>
                                    <li class="nav-item"><a class="nav-link" href="index.php?action=nos-partenaires"> Nos partenaires</a></li>
                                    <li class="nav-item"><a class="nav-link" href="index.php?action=contact"> Contact</a></li>
                                </ul>
                                
                            </div> <!-- navbar-collapse.// -->
                        </div>
                    </nav>
            </header>
            <div class="fixed-social">
                f
            </div>
            <div class="scrollTop-btn">
                <span style="color:#000;">&#708;</span>
            </div>
            <?= $startScreen ?>
            <?= $content ?>
            <footer>
                <div class="container p-3">
                    <div class="footer-links row py-4">
                        <div class="links-site col-md-4 px-auto">
                            <h4 class="mb-3 py-2">Plan du site</h4>
                            <ul>
                                <li><a href="index.php">Accueil</a></li>
                                <li><a href="index.php?action=particulier">Particulier</a></li>
                                <li><a href="index.php?action=professionnel">Professionnel</a></li>
                                <li><a href="index.php?action=demandeur-emploi">Demandeur d'emploi</a></li>
                                <li><a href="index.php?action=tarifs">Tarifs</a></li>
                                <li><a href="index.php?action=nos-partenaires">Partenaires</a></li>
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
                    <div class="footer-social d-flex justify-content-end">
                        <a class="m-3" href="#">f</a>
                    </div>

                </div>
            </footer>
        </div>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="public/js/script.js"></script>
    </body>
</html>