<section class="bg-section-1 p-5">
    <h3 class="text-center">Formulaires d'alimentation BDD</h3>
</section>
    <section class="row bg-section-2 p-5">
        <!-- Formulaire d'ajout d'une matière -->
        <div class="col-md">
            <form class="h-100 shadow-sm bg-white p-5 rounded-1" action="<?= BASE_URL ?>store-matiere" method="post">
                <div class="form-group">        
                    <legend class="text-center">Ajouter une matière</legend>
                    <label for="matiere">Matière</label>
                    <input class="form-control mb-3" type="text" name="matiere" id="matiere" 
                    placeholder="Entrer une matière" value="<?= $matiere['nom'] ?? '' ?>" required>
                    <input class="btn btn-success" type="submit" value="Ajouter">
                </div>
            </form>
        </div>
        
        <!-- Formulaire d'ajout d'un thème -->
        <div class="col-md">
            <form class="shadow-sm bg-white p-5 rounded-1" action="<?= BASE_URL ?>store-theme" method="post">
                <div class="form-group">        
                    <legend class="text-center">Ajouter un thème</legend>
                    <label for="matiere">Sélectionner une matière</label>
                    <select class="form-select mb-3" name="matiere" id="matiere" required>
                        <?php foreach ($matieres as $matiere) { ?>
                        <option value="<?= $matiere['id'] ?? '' ;?>"><?= $matiere['name'] ?? ''; ?></option>
                        <?php } ?>
                    </select>
                    <label for="theme">Thème</label>
                    <input class="form-control mb-3" type="text" name="theme" id="theme" placeholder="Entrer le thème" required>
                    <input class="btn btn-success" type="submit" value="Ajouter">
                </div>
            </form>
        </div>
    </section>

    <section class="row bg-section-3 p-5">

        <!-- Formulaire d'ajout d'un chapitre -->
        <div class="col-md">
            <form class="shadow-sm bg-white p-5 rounded-1" action="<?= BASE_URL ?>store-chapitre" method="post">
                <div class="form-group">        
                    <legend class="text-center">Ajouter un chapitre</legend>
                    <label for="matiere">Sélectionner une matière</label>
                    <select class="form-select mb-3" name="matiere" id="matiere">
                        <?php foreach ($matieres as $matiere) { ?>
                        <option value="<?= $matiere['id'] ?? '' ;?>"><?= $matiere['name'] ?? ''; ?></option>
                        <?php } ?>
                    </select>
                    <label for="theme">Sélectionner un thème</label>
                    <select class="form-select mb-3" name="theme" id="theme">
                        <?php foreach ($themes as $theme) { ?>
                        <option value="<?= $theme['id'] ?? '' ;?>"><?= $theme['name'] ?? ''; ?></option>
                        <?php } ?>
                    </select>
                    <label for="chapitre">Chapitre</label>
                    <input class="form-control mb-3" type="text" name="chapitre" id="chapitre" placeholder="Entrer le chapitre">
                    <input class="btn btn-success" type="submit" value="Ajouter">
                </div>
            </form>
        </div>
    </section>
