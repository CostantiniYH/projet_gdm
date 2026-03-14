<?php
use Core\Route;
?>

<style> nav * { color: white !important; } </style>

<nav class="navbar navbar-expand-lg bg-navbar bg-opacity-50">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= BASE_URL ?>">GDM SIO yhc</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
       
         -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Liste des matières
          </a>
          <ul class="dropdown-menu et">

            <?php foreach($matieres as $matiere) {
                $link = slugify($matiere['name']); ?>
            <li><a class="dropdown-item text-black" href="<?= BASE_URL ?>matiere/<?= $matiere['id'] ?>"><?= $matiere['name'] ?></a></li>
            <?php } ?>
            
          </ul>
        </li>

        <?php if ($_SERVER['REQUEST_URI'] === '/dashboard') { ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Formulaires
          </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item text-black" href="<?= BASE_URL ?>forms">Ajouter</a></li>
                <li><a class="dropdown-item text-black" href="<?= BASE_URL ?>update">Modifier</a></li>
            </ul>
        </li>
        <?php } else { ?>

            <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>dashboard">Admin</a>
            </li>

        <?php } ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>apropos">A propos</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL ?>contact">Contact</a>
        </li> 
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
      <ul class="navbar-nav">
        <li class="">
          <?php if (empty($_SESSION['user'])): ?>
          <a href="<?= BASE_URL ?>login" class="bi bi-person-fill"></a>
          <?php else: ?>
            <a href="<?= BASE_URL ?>logout" class="bi bi-door-open-fill text-danger"></a>
            <?php endif ?>
        </li>
      </ul>
    </div>
  </div>
</nav>