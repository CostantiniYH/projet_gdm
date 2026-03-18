<main class="container">
    <div class="row p-5">
        <h1 class="text-center p-4">A propos de GDM yhc</h1>
    </div>
</main>

<div class="container">
    <section class="row g-3">
        <div class="col-md p-4">
            <div class="bg-white p-5 rounded shadow">
                <img class="float-start img-fluid w-25 me-3" src="<?= BASE_URL ?>uploads/tech/cms.png" alt="">            
                <p class="text-justifie">
                    CMS SIO yhc est un site dédié aux matières du BTS SIO. Il a été conçu pour faciliter les étudiants à
                    s'orienter et à connaitre le contenu du programme et à mieux comprendre le fil conducteur des épreuves 
                    des blocs de compétences 1, 2 et 3. Il faut par ailleurs préciser, qu'il y a une synergie des matières convergeant
                    vers le même objectif : celui de préparer le candidat à devenir un solide technicien informatique. Ceci devrait, à priori,
                    pousser ce dernier à poursuivre ses études en parrallèle afin de consolider et améliorer ses compétences.
                </p>
                <p class="text-justifie">
                    En effet, le BTS SIO, comme tout les diplôme français, offre au candidat un ensemble de matières orienté vers le même
                    objectif, celui de la spécialité. Dans notre cas, pour l'informatique, la matière culture générale et expression (CGE), par exemple, doit nous
                    aider à montrer, présenter et argumenter à l'écrit et à l'oral notre travail durant les 2 ans d'études mais aussi pour
                    notre avenir en général. Idem pour la culture économique, juridique et mangériale (CEJM), elle nous sert principalement à situer notre secteur
                    dans notre environnement ; il y a d'ailleurs un thème entier sur le numérique pour les SIO.                
                </p>
            </div>
        </div>
    </section>
</div>


<div class="container">
    <div class="row">
        <div class="col-md p-4">
            <div class="p-5 h-100 bg-white shadow rounded">
                <h3>Section Math</h3>
                <p class="text-justifie">
                    Pour les thèmes et chapitres de la section Mathématiques, j'ai suivi la table des matières du livre
                    <a href="https://www.fnac.com/a11282899/Xavier-Chanet-Mathematiques-pour-l-informatique-3e-ed-Pour-le-BTS-SIO?oref=00000000-0000-0000-0000-000000000000&storecode=&Origin=SEA_GOOGLE_PLA_BOOKS&esl-k=sem-google%7Cnx%7Cc%7Cm%7Ck%7Cp%7Ct%7Cdc%7Ca20111491090%7Cg20111491090&gclsrc=aw.ds&gad_source=1&gad_campaignid=19663887777&gclid=Cj0KCQjw9-PNBhDfARIsABHN6-3wsJ2jSVhoWOaXPhtk7nBu4sYtQwFxl-YUEE2xB2prDHatKi3in_kaAkxTEALw_wcB"
                    target="_blank" class="text-decoration-none">
                    "Matématiques pour l'informatique"</a>,
                    de Xavier Chanet et Patrick Vert, destiné aux étudiants passant le BTS SIO mais aussi à ceux en IUT, en Licence et en Classes préparatoires.
                    
                </p>
            </div>
        </div>
        <div class="col-md-3 p-4">
            <a href="https://www.fnac.com/a11282899/Xavier-Chanet-Mathematiques-pour-l-informatique-3e-ed-Pour-le-BTS-SIO?oref=00000000-0000-0000-0000-000000000000&storecode=&Origin=SEA_GOOGLE_PLA_BOOKS&esl-k=sem-google%7Cnx%7Cc%7Cm%7Ck%7Cp%7Ct%7Cdc%7Ca20111491090%7Cg20111491090&gclsrc=aw.ds&gad_source=1&gad_campaignid=19663887777&gclid=Cj0KCQjw9-PNBhDfARIsABHN6-3wsJ2jSVhoWOaXPhtk7nBu4sYtQwFxl-YUEE2xB2prDHatKi3in_kaAkxTEALw_wcB"
                    target="_blank" class="text-decoration-none">
                <div class="card h-100 shadow border-0 hvr-forward" style="cursor: pointer;">
                    <img src="<?= BASE_URL ?>uploads/galerie/dunod.png" alt="Livre de Xavier Chanet et Patrick Vert - Dunod" 
                    class="card-img-cover img-fluid rounded" style="width: 15rem;">
                </div>
            </a>    
        </div>
    </div>
</div>

<div class="container">
    <section class="row g-3">
        <div class="col-md p-4">  
            <div class="p-5 rounded bg-white bg-opacity-75 shadow-sm text-muted">                
                <div class="alert alert-danger w-25">Projet avorter !</div>
                <h5 class="text-justifie">Ce site était un projet de groupe à l'origine mais il a été abandonné pour en choisir un autre finalement. 
            Néanmoins, il été poursuivi par YHC afin de lui donner une seconde vie</h5>
            <h6>Equipe : Yaacov, Nathanel, Rephael, Ethan, Jonathan, Avi</h6>
            <p class="text-justifie">Ce projet a pour but de nous faire pratiquer PHP avec le pattern MVC. 
                Nous allons créer un site de gestion des matières du BTS SIO et peut-être mettre en place une architecture évolutive au cas où le
                projet est amené à évoler. 
                Dans un premier temps, chaque étudiant de BTS SIO pourra se connecter, voir les matières qu'il a, les professeurs, les notes etc...</p>
                <p class="text-justifie">
                    Le principe est ou était que tout le monde participe, et je comptais sur la motivation de chacun pour créer une cohésion d'équipe. 
                    Si le projet réussait, on aurait pû poursuivre vers un LMS complet, c'est-à-dire, un site qui gérerait en plus des matières, les classes,
                    les enseignants, les élèves, les notes, etc., comme l'avait proposé Réphaël, au début. Par la suite, nous aurions pû faire un site e-commerce, 
                    aussi en client léger qui fait partie des standards en matières de développement d'applications.
                </p>
                <p class="text-justifie">Pour atteindre cette page en local avec : <code>php -S localhost:3000</code>, il faut vous positionner dans 
                le répertoire de l'<code>index.php</code> qui est d'ailleurs la seule entrée dans un design pattern MVC, avec la commande : <code>cd public</code>
                ou simplement en saisissant : <code>php -S localhost:3000 -t public</code>
                </p>
            </div>          
        </div>
    </section>
</div>
