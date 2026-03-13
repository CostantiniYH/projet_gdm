<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?= BASE_URL ?>uploads/icone/favicon.png" type="image/x-icon">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css"/>
<link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
<link rel="stylesheet" href="<?= BASE_URL ?>css/navbar.css">

<?php  
  if ($_SERVER['REQUEST_URI'] === '/') {
    $css = '/home';
  } elseif (empty($css)) {
    $css = $_SERVER['REQUEST_URI'];
  }
?>

<link rel="stylesheet" href="<?= BASE_URL ?>css<?= $css ?>.css">

</head>
<body class="" id="body">
  <?php require_once __DIR__ . '/header.php'?>

  <div>
    <?= $content ?>
  </div>


  <?php require_once __DIR__ . '/footer.php' ?>
<script src="<?= BASE_URL ?>js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" intégrité="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YwJrWVcXK/BmnVDxM+D2scQbITxI" origine croisée="anonyme"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>
</html>