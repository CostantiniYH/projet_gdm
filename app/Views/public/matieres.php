<section class="bg-section-matiere p-5">
    <h1 class="text-center text-white mb-5">Liste des matières</h1>

    <div class="text-white mb-5 ms-3">
        <a class="text-decoration-none text-white bi bi-house-fill" href="<?= BASE_URL ?>">
             / </a>
            Matieres
    </div>
    <!-- Affichage dynamique des matières -->
    <div class="row g-5">
        <?php foreach ($matieres as $m): ?>
            <div class="col-md-4 col-lg-3 hvr-grow">
                <?php 
                    $txt = strtolower($m['name']);
                    $mots = explode(" ", $txt);
                ?>
                <div class="h-100 bg-card-matiere p-3 text-center">

                    <a href="<?= BASE_URL ?>matiere/<?= $m['id']  ?>"
                    class="nav-link stretched-link">
                        <?= $m['name'] ?>
                    </a>    
                </div>
            </div>
        <?php endforeach ?>
    </div>

</section>  