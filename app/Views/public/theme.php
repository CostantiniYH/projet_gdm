<main class="bg-section-1 p-5">
    <h2 class="text-white"><?= $titre ?></h2>
    <h3 class="text-white">Parcourez les chapitres disponibles</h3>
</main>

<div><a href="<?= BASE_URL ?>">Home / </a><a href="<?= BASE_URL ?>matiere/<?= $chapitres[0]['matieres_id'] ?>">Thèmes</a></div>
<section class="container-fluid">
    <div class="row p-5 g-4">
        <?php foreach ($chapitres as $key => $t): ?>
            <?php if (in_array($t['matieres_id'], [1, 2, 3, 4])) {$color = 'primary';}
             elseif ($t['matieres_id'] == 5) {$color = 'danger';}
             else {$color = 'warning';} ;?>
            <div class="col-md-3">
                <div class="shadow rounded p-3 h-100 border border-2 border-<?= $color ?>">
                    <a href=""></a>
                    <?= $t['name'] ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>
