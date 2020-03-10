<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="public/css/font.css" type="text/css" rel="stylesheet"> <!--load all styles -->
    <link href="public/css/backend.css" type="text/css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/499f7efc81.js" crossorigin="anonymous"></script>
    <title>Agir - Admin</title>
</head>
<body>
    <div class="container-fluid login-container d-flex justify-content-center align-items-center">
        <div class="container login-form text-center">
            <h1>Espace administrateur AGIR <span>Admin</span></h1>
            <form action="dashboard.php" method="POST">
                <div class="form-group">
                    <label for="name">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="name" placeholder="Nom d'utilisateur">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" placeholder="Mot de passe">
                </div>
                <button type="submit" class="btn login-btn my-4">Se connecter</button>
                <div class="row m-0">
                    <div class="form-check col-6 text-left">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                    </div>
                    <div class="form-group col-6 text-right">
                        <a href="#" class="form-links">Mot de passe oublié ?</a>
                    </div>
                </div>
                <div class="row">

                </div>
            </form>
        </div>
    </div>
    
</body>
</html>