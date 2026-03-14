<script>
// const backgrounds = [
    // '<?= BASE_URL ?>uploads/background/about-mountain.jpg',
//     '<?= BASE_URL ?>uploads/background/desert-vastness.jpg',
//     '<?= BASE_URL ?>uploads/background/golden-hour.jpg',
//     '<?= BASE_URL ?>uploads/background/mountain-dreams.jpg',
//     '<?= BASE_URL ?>uploads/background/ocean-serenity.jpg',
//     '<?= BASE_URL ?>uploads/background/spring-bloom.jpg',
//     '<?= BASE_URL ?>/uploads/background/forest-whispers.jpg',
//     '<?= BASE_URL ?>uploads/background/summit-glory.jpg',
//     '<?= BASE_URL ?>uploads/background/waterfall-majesty.jpg',
//     '<?= BASE_URL ?>uploads/background/wild-encounters.jpg'
//     // '<?= BASE_URL ?>uploads/jetee-au-bord-lac-hallstatt-autriche_181624-44201.avif',
//     // '<?= BASE_URL ?>uploads/paysage-montagne-mont-blanc.avif',
//     // '<?= BASE_URL ?>uploads/thumb_croatie-lacs-plitvice-cascades-7.jpg'
// ];

// let index = 0;
// const body = document.getElementById('body');

// function changeBackground() {
//     body.style.backgroundImage = `url('${backgrounds[index]}')`;
//     index = (index + 1) % backgrounds.length;
// }

// // Change toutes les 5 secondes
// setInterval(changeBackground, 5000);

// // Initial
// changeBackground();
</script>
<footer class="bg-footer">
    <div class="container row p-5">
        <section class="col-md">
            <h5>Liens utiles</h5>
            <ul>
                <li><a class="nav-link" href="<?= BASE_URL ?>support">Bloc 1- SMDSI</a></li>
                <li><a class="nav-link" href="<?= BASE_URL ?>slam">Bloc 2 - SLAM</a></li>
                <li><a class="nav-link" href="<?= BASE_URL ?>cybersecurite">Bloc 3 - Cybersécurité</a></li>
            </ul>
        </section>
        <section class="col-md">
            <h5>Réseaux sociaux</h5>
            <div class="row mx-auto">
                <a href="" class="col-2 nav-link bi bi-github"></a>
                <a href="" class="col-2 nav-link bi bi-linkedin"></a>
                <a href="" class="col-2 nav-link bi bi-twitter-x"></a>
            </div>
        </section>
        <section class="col-md">
            <h5>A propos</h5>
            <ul class="list-decoration-none mx-auto">
                <!-- <li class=""><a href="<?=  BASE_URL ?>"></a></li>
                <li class=""><a href="<?=  BASE_URL ?>"></a></li>
                <li class=""><a href="<?=  BASE_URL ?>"></a></li> -->
            </ul>
        </section>
        
        <section class="col-md">
            <h5>Mentions légales</h5>
            <ul class="mx-auto">
                <!-- <li></li>
                <li></li>
                <li></li> -->
            </ul>
        </section>
    </div>
    <div class="p-4">
        <p>&copy; <?= date('Y') ?> GDM-SIO YHC - Tout droit réservé</p>
    </div>
</footer>