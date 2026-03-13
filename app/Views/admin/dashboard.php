<!-- Conteneur global -->
<main class="container p-5">
    <h1 class="text-center mb-5">Tableau de bord</h1>
    <!-- Ligne -->
    <section class="row mb-4">
        <!-- Elément de la ligne -->
        <div class="col-md">
            <div class="bg-white p-5 rounded-4 border border-2 border-success">
                <form action="<?= BASE_URL ?>dashboard/search" method="get">
                    <input 
                        type="search" 
                        name="q" 
                        placeholder="Rechercher une matière"
                        value="<?= htmlspecialchars($_GET['q'] ?? '') ?>"
                        id="">
                        <button type="submit">Rechercher</button>
                </form>
                <!-- Liste -->
                <ul class="">
                    <?php 
                    // var_dump($matieres) ;
                    foreach ($matieres as $key => $m):
                    ?>
                    <!-- Elément de la liste -->
                    <li class="col-md">
                        <!-- Donnée de la cellule -->
                        <?= $m['name'] ?>
                    </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </section>

    <!-- Ligne -->
    <section class="row">
        <!-- Elément de la ligne -->
        <div class="col-md">
            <!-- Liste -->
            <ul class="bg-white p-5 rounded-4 border border-2 border-success">
                <?php 
                // var_dump($matieres) ;
                foreach ($themes as $key => $t):
                ?>
                <!-- Elément de la liste -->
                <li class="col-md">
                    <!-- Donnée de la cellule -->
                    <?= $t['name'] ?>
                </li>
                <?php endforeach ?>
            </ul>
        </div>
    </section>

    <!-- Ligne -->
    <section class="row">
        <!-- Elément de la ligne -->
        <div class="col-md">
            <!-- Liste -->
            <ul class="bg-white p-5 rounded-4 border border-2 border-success">
                <?php 
                // var_dump($matieres) ;
                foreach ($chapitres as $key => $c):
                ?>
                <!-- Elément de la liste -->
                <li class="col-md">
                    <!-- Donnée de la cellule -->
                    <?= $c['name'] ?>
                </li>
                <?php endforeach ?>
            </ul>
        </div>
    </section>
</main>