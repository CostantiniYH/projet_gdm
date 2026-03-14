<main class="bg-section-chapitre p-5">
    <h2 class="text- p-2 rounded-4 bg-white border border-2 border-success">Thème : <?= $titre ?></h2>
    <h3 class="text-white">Parcourez les chapitres disponibles</h3>

    <div class="text-white m-3">
        <a class="text-decoration-none text-white bi bi-house-fill" href="<?= BASE_URL ?>">
             / </a>
        <a class="text-decoration-none text-white" href="<?= BASE_URL ?>matieres">
            Matieres / </a>
        <a class="text-decoration-none text-white" href="<?= BASE_URL ?>matiere/<?= $themes['matieres_id'] ?>">
            Thèmes / </a>Chapitres
    </div>
    
    <section class="container-fluid mt-5">
        <div class="row g-4">

            <?php foreach ($chapitres as $key => $c): ?>

                <?php 
                if (in_array($c['matieres_id'], [1, 2, 3, 4])) {
                    $color = 'secondary';
                } elseif ($c['matieres_id'] == 5) {
                    $color = 'danger';
                } else {
                    $color = 'warning';
                } ;
                ?>

                <div class="col-md-3">
                    <div class="shadow rounded p-3 bg-white h-100 border border-2 border-<?= $color ?>">
                        <a href=""></a>
                        <?= $c['name'] ?>
                    </div>
                </div>
            <?php endforeach ?>

        </div>
    </section>

</main>