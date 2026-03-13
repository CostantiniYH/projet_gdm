<div class="container p-5">
    <!-- Formulaire de connexion -->
    <div class="row">
        <div class="col-md-4">
            <form action="<?= BASE_URL ?>login" method="post" class="bg-white shadow p-4 rounded">
                <legend>connexion</legend>
                <div class="form-group mb-2">
                    <input class="form-control" type="text" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group mb-2">
                    <input class="form-control" type="password" name="password" id="password" placeholder="Mot de passe">
                </div>
                <div class="from-group">
                    <input type="submit" name="login" value="Connexion" class="d-block  mx-auto btn btn-primary">
                </div>
            </form>
        </div>

        <!-- Informations utilisateur -->
        <div class="col-md">
            <div class="bg-white p-5 shadow-sm">
                <h1></h1>
                <p>Inscrivez-vous pour plus de fonctionnalités et plus d'accès !</p>
                <a href="<?= BASE_URL ?>register">S'inscrire</a>
            </div>
        </div>
    </div>
</div>