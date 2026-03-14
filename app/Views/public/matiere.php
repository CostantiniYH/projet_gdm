<main class="bg-section-1 p-5">
    <h2 class="text-white"><?= $titre ?></h2>
    <h3 class="text-white">Parcourez les thèmes disponibles sur ce site </h3>
</main>

<section class="container-fluid">
    <div class="row p-5 g-4">
        <?php foreach ($themes as $key => $t): ?>
            <?php if (in_array($t['matieres_id'], [1, 2, 3, 4])) {$color = 'primary';}
             elseif ($t['matieres_id'] == 5) {$color = 'danger';}
             else {$color = 'warning';} ;?>
            <div class="col-md-3">
                <div class="shadow rounded p-3 h-100 border border-2 border-<?= $color ?>">
                    <a href="<?= BASE_URL ?>theme/<?= $t['id'] ?>" class="nav-link">
                        <?= $t['name'] ?>
                    </a>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>
