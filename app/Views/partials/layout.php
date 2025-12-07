<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
</head>
<body>
<?php require_once __DIR__ . '/header.php'?>


  <div class="container mt-5 mb-5">
    <?= $content ?>
  </div>


<?php require __DIR__ . '/footer.php' ?>
</body>
</html>