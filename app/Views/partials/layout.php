<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="icon" href="<?= BASE_URL ?>uploads/thumb_croatie-lacs-plitvice-cascades-7.jpg" type="image/x-icon">
<link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">

<?php  
  if ($_SERVER['REQUEST_URI'] === '/') {
    $css = 'home';
  } else {
    $css = $_SERVER['REQUEST_URI']; 
  }
?>

<link rel="stylesheet" href="<?= BASE_URL ?>css/<?= $css ?>.css">
</head>
<body class="" id="body">
<?php require_once __DIR__ . '/header.php'?>

  <div class="container mt-5 mb-5">
    <?= $content ?>
  </div>


<?php require_once __DIR__ . '/footer.php' ?>
<script>
const backgrounds = [
    '<?= BASE_URL ?>uploads/images/about-mountain.jpg',
    '<?= BASE_URL ?>uploads/images/desert-vastness.jpg',
    '<?= BASE_URL ?>uploads/images/golden-hour.jpg',
    '<?= BASE_URL ?>uploads/images/mountain-dreams.jpg',
    '<?= BASE_URL ?>uploads/images/ocean-serenity.jpg',
    '<?= BASE_URL ?>uploads/images/spring-bloom.jpg',
    '<?= BASE_URL ?>/uploads/images/forest-whispers.jpg',
    '<?= BASE_URL ?>uploads/images/summit-glory.jpg',
    '<?= BASE_URL ?>uploads/images/waterfall-majesty.jpg',
    '<?= BASE_URL ?>uploads/images/wild-encounters.jpg',
    '<?= BASE_URL ?>uploads/jetee-au-bord-lac-hallstatt-autriche_181624-44201.avif',
    '<?= BASE_URL ?>uploads/paysage-montagne-mont-blanc.avif',
    '<?= BASE_URL ?>uploads/thumb_croatie-lacs-plitvice-cascades-7.jpg'
];

let index = 0;
const body = document.getElementById('body');

function changeBackground() {
    body.style.backgroundImage = `url('${backgrounds[index]}')`;
    index = (index + 1) % backgrounds.length;
}

// Change toutes les 5 secondes
setInterval(changeBackground, 5000);

// Initial
changeBackground();
</script>
<script src=""></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" intégrité="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YwJrWVcXK/BmnVDxM+D2scQbITxI" origine croisée="anonyme"></script>
</body>
</html>