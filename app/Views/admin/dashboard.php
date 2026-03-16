<!-- Conteneur global -->
<main class="container p-5">
    <h1 class="text-center mb-5">Tableau de bord</h1>
    
    <!-- Barre de recherche admin -->
    <form action="<?= BASE_URL ?>dashboard/search" method="get">
        <input 
            type="search" 
            name="q" 
            placeholder="Rechercher une matière"
            value="<?= htmlspecialchars($_GET['q'] ?? '') ?>"
            id="">
            <button type="submit">Rechercher</button>
    </form>


    <!-- Ligne MATIERES -->
    <section class="row mb-4">
        <!-- Elément de la ligne -->
        <div class="col-md">
            <div class="bg-white p-5 rounded-4 border border-2 border-success">
                <!-- Liste des matières-->
                <ol class="">
                    <?php 
                    foreach ($matieres as $key => $m): // Boucler les résulatas de la requête
                    ?>
                    <!-- Elément de la liste -->
                    <li class="border-bottom m-3">
                        <!-- Donnée de la cellule -->
                        <?= $m['name'] ?>
                        
                        <!-- Supprimer la donnée (cruD) -->
                        <form action="<?= BASE_URL ?>delete-matiere/<?= $m['id'] ?>" method="post"
                        class="float-end">
                            <button type="submit" class="btn btn-danger bi bi-trash3-fill" 
                            onclick="alert('Etes-vous sûr de vouloir supprimer ce chapitre ?')"></button>
                        </form>

                        <!-- Modifier la donnée (crUd) -->
                        <a href="<?= BASE_URL ?>/edit-matiere/<?= $m['id'] ?>" 
                        class="me-2 float-end btn btn-warning bi bi-pencil-fill"></a>
                    </li>
                    <?php endforeach ?>
                </ol>
            </div>
        </div>
    </section>

    <!-- Ligne THEMES -->
    <section class="row">
        <!-- Elément de la ligne -->
        <div class="col-md">
            <!-- Liste des thèmes -->
            <ol class="bg-white p-5 rounded-4 border border-2 border-success">
                <?php 
                foreach ($themes as $key => $t): // Boucler les résultats de la requête
                ?>
                <!-- Elément de la liste -->
                <li class="border-bottom m-3">
                    <!-- Donnée de la cellule (Le thème) -->
                    <?= $t['name'] ?>
                    
                    <!-- Supprimer la donnée (cruD) -->
                    <form action="<?= BASE_URL ?>delete-theme/<?= $t['id'] ?>" method="post"
                    class="float-end">
                        <button type="submit" class="btn btn-danger bi bi-trash3-fill" 
                        onclick="alert('Etes-vous sûr de vouloir supprimer ce thème ?')"></button>
                    </form>

                    <!-- Modifier la donnée (crUd) -->
                    <a href="<?= BASE_URL ?>/edit-theme/<?= $t['id'] ?>" 
                    class="me-2 float-end btn btn-warning bi bi-pencil-fill"></a>
                </li>
                <?php endforeach ?>
            </ol>
        </div>
    </section>

    <!-- Ligne CHAPITRES -->
    <section class="row">
        <!-- Elément de la ligne -->
        <div class="col-md">
            <!-- Liste des chapitres -->
            <ol class="bg-white p-5 rounded-4 border border-2 border-success">
                <?php 
                // var_dump($matieres) ;
                foreach ($chapitres as $key => $c):
                ?>
                <!-- Elément de la liste -->
                <li class="border-bottom m-3">
                    
                    <!-- Donnée de la cellule -->
                    <?= $c['name'] ?>

                    <!-- Supprimer la donnée (cruD) -->
                    <form action="<?= BASE_URL ?>delete-chapitre/<?= $c['id'] ?>" method="post"
                    class="float-end">
                        <button type="submit" class="btn btn-danger bi bi-trash3-fill" 
                        onclick="alert('Etes-vous sûr de vouloir supprimer ce chapitre ?')"></button>
                    </form>

                    <!-- Modifier la donnée (crUd) -->
                    <a href="<?= BASE_URL ?>/edit-chapitre/<?= $c['id'] ?>" 
                    class="me-2 float-end btn btn-warning bi bi-pencil-fill"></a>
                </li>
                <?php endforeach ?>
            </ol>
        </div>
    </section>
</main>