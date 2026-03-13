<main class="bg-section-1 p-5">
    <h2 class="text-white"><?= $titre ?></h2>
    <h3 class="text-white">Parcourez les notes et cours de disponibles sur ce site </h3>
</main>

<section class="container-fluid">
    <div class="row p-5">
        <?php foreach ($themes as $key => $t): ?>
            <div class="col-md">
                <div>
                    <?= $t['name'] ?>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>
