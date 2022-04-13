<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title><?php echo $title ?></title>
</head>
<body>
    <header>
        <div class="bg-dark text-light">
            <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
                <div class="container-fluid">
                    <a href="index.php" class="navbar-brand">ShareMyHouse</a>
                    <div>
                        <a class="link-light col-sm" href="./louer.php">Louer votre bien</a>
                        <a class="link-light col-sm ms-2" href="./connexion.php">Connexion</a>
                        <a class="link-light col-sm ms-2"href="./inscription.php">S'inscrire</a>
                    </div>
                </div>
            </nav>
            <?php
                if ($title == "ShareMyHouse - Accueil") { ?>
                    <div class="container">
                        <form action="/sharemyhouse/recherche.php" method="POST">
                            <div class="row justify-content-evenly g-3">
                                <div class="mb-3 col-sm-3 form-floating text-dark">
                                    <input class="form-control" id="dest" type="text" name="client-dest" placeholder="Localisation">
                                    <label for="dest">Où aller ?</label>
                                </div>
                                <div class="mb-3 col-sm-2 form-floating text-dark">
                                    <input class="form-control" id="deb" type="date" name="client-debut" placeholder="Quand arriver ?">
                                    <label for="deb">Début</label>
                                </div>
                                <div class="mb-3 col-sm-2 form-floating text-dark">
                                    <input class="form-control" id="fin" type="date" name="client-fin" placeholder="Quand partir ?">
                                    <label for="fin">Fin</label>
                                </div>
                                <div class="mb-3 col-sm-2 form-floating text-dark">
                                    <input class="form-control" id="nbrPers" type="number" name="client-nbrPerson" min="1" max="16" placeholder="1">
                                    <label for="nbrPers">Nombre personne</label>
                                </div>
                                <div class="mb-3 col-sm-2">
                                    <button type="submit" class="btn btn-primary">Rechercher</button>
                                </div>
                            </div>
                        </form>
                    </div>
            <?php } ?>
        </div>
    </header>