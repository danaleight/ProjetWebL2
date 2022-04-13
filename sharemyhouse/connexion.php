<?php
    $title = "ShareMyHouse - Connexion";
    require "bandeau.php";
?>

<div class="container">
    <form action="inscription.php" method="GET">
        <div class="row justify-content-evenly mt-3">
            <div class="col px-2 form-floating">
                <input type="text" id="ins-mail" class="form-control bg-dark text-light" name="ins-mail" placeholder="null">
                <label class="text-light" for="ins-">E-mail</label>
            </div>
        </div>

        <div class="row justify-content-evenly mt-3">
            <div class="col px-2 form-floating">
                <input type="text" id="ins-username" class="form-control bg-dark text-light" name="ins-username" placeholder="null">
                <label class="text-light" for="ins-">Nom d'utilisateur</label>
            </div>
            <div class="col px-2 form-floating">
                <input type="password" id="ins-password" class="form-control bg-dark text-light" name="ins-password" placeholder="null">
                <label class="text-light" for="ins-">Mot de passe</label>
            </div>
        </div>

        <div class="row justify-content-start mt-3 px-2">
            <button type="submit" class="btn btn-primary col-1">Valider</button>
        </div>
    </form>
</div>

<?php
    require "pied_de_page.php"
?>