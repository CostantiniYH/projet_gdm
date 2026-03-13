<div class="container p-5">
    <div class="row">
        <div class="col-md-6">
            <form action="<?= BASE_URL ?>register" method="post" class="rounded p-5 bg-white">
                <h3 class="text-center mb-3">Inscription</h3>
                <div class="mb-3">
                    <input type="hidden" name="id" id="id" value="<?= htmlspecialchars($_GET['id'] ?? '') ;?>">
                    <label for="nom" class="form-label">Nom</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="nom" 
                        name="nom" 
                        placeholder="Entrer un nom d'utilisateur"
                        required>
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prenom</label>
                    <input class="form-control" type="text" name="prenom" id="" placeholder="Prénom">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Séctionnez un rôle</label>
                    <select name="role" id="role" class="form-select">
                        <option value="etudiant">Etudiant</option>
                        <option value="formateur">Formateur</option>
                        <?php if ($_SERVER['user_role'] === 'admin'): ?>
                            <option value="">Admin</option>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirmer le mot de passe</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                </div>
                <div class="form-group">
                    <input type="submit" value="S'inscrire" class="btn btn-primary">
                </div>
            </form>
        </div>

        <div class="col-md">
            <div class="bg-white p-5 rounded">
                <p>Renseigner vos informations pour créer votre compte. Vos données serviront
                    à vous identifier, à sécuriser votre compte, et à vous signaler aux autres membres
                    du site GDM. Vos données vous appartiennent et vous pouvez les modifier ou les supprimer 
                    quand vous le voulez conformément au RGPD et aux normes et recommandations de la CNIL.
                </p>
            </div>
        </div>
    </div>
</div>