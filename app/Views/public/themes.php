<main class="bg-section-theme p-5">
    <h2 class="text-white"><?= $titre ?></h2>
    <h3 class="text-white">Parcourez les thèmes disponibles</h3>

    <div class="text-white">
        <a href="<?= BASE_URL ?>" class="text-decoration-none text-white bi bi-house-fill"> / </a>
        <a class="text-decoration-none text-white" href="<?= BASE_URL ?>matieres">
            Matieres / </a>
            Thèmes
    </div>

    <section class="container-fluid">
        <div class="row p-5 g-4">

            <?php 
            foreach ($themes as $key => $t): 
            ?>
                <?php 
                if (in_array($t['matieres_id'], [1, 2, 3, 4])) {
                        $color = 'dark';
                    } elseif ($t['matieres_id'] == 5) {
                        $color = 'danger';
                    } elseif ($t['matieres_id'] == 8) {
                        $color = 'info';
                    } else {
                        $color = 'warning';
                    };
                ?>

            <div class="col-md-3">
                <div class="shadow rounded p-3 bg-white h-100 border border-2 border-<?= $color ?>">
                    <a href="<?= BASE_URL ?>theme/<?= $t['id'] ?>" class="nav-link">
                        <?= $t['name'] ?>
                    </a>
                </div>
            </div>

            <?php
            endforeach 
            ?>
            
        </div>
    </section>
    
</main>