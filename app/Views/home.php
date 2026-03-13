<section class="bg-section-1 p-5">
    <h1 class="text-center text-white mb-5">Bienvenue sur  Gestion des matières ou Edu Prime</h1>

    <!-- Affichage dynamique des matières -->
    <div class="row g-5">
        <?php foreach ($matieres as $m): ?>
            <div class="col-md-4 col-lg-3 hvr-grow">
                <?php 
                    $txt = strtolower($m['name']);
                    $mots = explode(" ", $txt);
                ?>
                <div class="card h-100 bg-card-home p-3 text-center">

                    <a href="<?= BASE_URL ?>matiere/<?= $m['id']  ?>"
                    class="nav-link stretched-link">
                        <?= $m['name'] ?>
                    </a>    
                </div>
            </div>
        <?php endforeach ?>
    </div>

</section>  

<!-- Rensigner le référentiel à l'utilisateur -->
<section class="p-5">
    <h3>Compétences attestées</h3>
    <div class="row text-justifie g-4">
        <div class="col-md-6">
            <div class="h-100 rounded p-5 border-start border-3 border-primary bg-primary-subtle">
                <h6>Support et mise à disposition de services informatiques :</h6>
                <ul>
                    <li>Gérer le patrimoine informatique</li>
                    <li>Répondre aux incidents et aux demandes d’assistance et d’évolution</li>
                    <li>Développer la présence en ligne de l’organisation</li>
                    <li>Travailler en mode projet</li>
                    <li>Mettre à disposition des utilisateurs un service informatique</li>
                    <li>Organiser son développement professionnel</li>
                </ul>            
            </div>
        </div>

        <div class="col-md-6">
            <div class="h-100 rounded p-5 border-start border-3 border-primary bg-primary-subtle">
                <h6>Option « Solutions d’infrastructure, systèmes et réseaux » :</h6>
                <ul>
                    <li>Administration des systèmes et des réseaux
                        <ul>
                            <li>Concevoir une solution d’infrastructure réseau Installer, tester et déployer une solution d’infrastructure réseau </li>
                            <li>Exploiter, dépanner et superviser une solution d’infrastructure réseau </li>
                        </ul>
                    </li>
                    <li>Cybersécurité des services informatiques
                        <ul>
                            <li>Protéger les données à caractère personnel</li>
                            <li>Préserver l'identité numérique de l’organisation</li>
                            <li>Sécuriser les équipements et les usages des utilisateurs</li>
                            <li>Garantir la disponibilité, l’intégrité et la confidentialité des services informatiques et des données de l’organisation face à des cyberattaques</li>
                            <li>Assurer la cybersécurité d’une infrastructure réseau, d’un système, d’un service</li>
                        </ul>
                    </li>
                </ul>
            </div>   
        </div>
        <div class="col-md-6">
            <div class="h-100 rounded p-5 border-start border-3 border-primary bg-primary-subtle">
                <h6>Option « Solutions logicielles et applications métiers »</h6>
                <ul>
                    <li>Conception et développement d’applications
                        <ul>
                            <li>Concevoir et développer une solution applicative</li>
                            <li>Assurer la maintenance corrective ou évolutive d’une solution applicative</li>
                            <li>Gérer les données </li>
                        </ul>
                    </li>
                    <li>Cybersécurité des services informatiques
                        <ul>
                            <li>Protéger les données à caractère personnel </li>
                            <li>Préserver l'identité numérique de l’organisation</li>
                            <li>Sécuriser les équipements et les usages des utilisateurs </li>
                            <li>Garantir la disponibilité, l’intégrité et la confidentialité des services informatiques et des données de l’organisation face à des cyberattaques</li>
                            <li>Assurer la cybersécurité d’une solution applicative et de son développement </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-6">
            <div class="h-100 rounded p-5 border-start border-3 border-primary bg-primary-subtle">
                <h6>Culture générale et expression :</h6>
                <ul>
                    <li>Communiquer par écrit :
                        <ul>
                            <li>appréhender et réaliser un message écrit ; </li>
                            <li>respecter les contraintes de la langue écrite ;</li>
                            <li>respecter les contraintes de la langue écrite ;</li>
                            <li>respecter les contraintes de la langue écrite ;</li>
                            <li>synthétiser des informations : fidélité à la signification des documents, exactitude et 
                                précision dans leur compréhension et leur mise en relation, pertinence des choix opérés 
                                en fonction du problème posé et de la problématique, cohérence de la production ;</li>
                            <li>répondre de façon argumentée à une question posée en relation avec les documents proposés en lecture.</li>
                        </ul>
                    </li>
                    <li>Communiquer oralement :
                        <ul>
                            <li>s’adapter à la situation : maîtrise des contraintes de temps, de lieu, d’objectifs et d’adaptation au destinataire,
                                    choix des moyens d’expression appropriés, prise en compte de l’attitude et des questions du ou des interlocuteurs ;</li>
                            <li>organiser un message oral : respect du sujet, structure interne du message.</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-6">
            <div class="h-100 rounded p-5 border-start border-3 border-primary bg-primary-subtle">
                <h6>Expression et communication en langue anglaise : 
                    Niveau B2 du CECRL pour les activités langagières suivantes :</h6>
                <ul>
                    <li>compréhension de documents écrits ;</li>
                    <li>production et interaction écrites ;</li>
                    <li>compréhension de l’oral ;</li>
                    <li>production et interaction orales.</li>
                </ul>
            </div>
        </div>

        <div class="col-md-6">
            <div class="h-100 rounded p-5 border-start border-3 border-primary bg-primary-subtle">
                <h6>Mathématiques pour l’informatique : </h6>
                <ul>
                    <li>Comprendre et résoudre les problèmes mathématiques élémentaires auxquels une personne informaticienne est couramment confrontée 
                        (calcul binaire, masque de réseau, opérateurs logiques…) ;</li>
                    <li>Comprendre et manipuler les objets mathématiques fréquemment utilisés en programmation, de manière à pouvoir exploiter 
                        informatiquement une solution mathématique préalablement construite ;</li>
                    <li> résoudre des problèmes numériques nécessitant la mise en œuvre d'algorithmes qu'il s'agit de construire, 
                        de mettre en forme et dont on comparera éventuellement les performances.</li>
                </ul>
            </div>
        </div>

        <div class="col-md-6">
            <div class="h-100 rounded p-5 border-start border-3 border-primary bg-primary-subtle">
                <h6>Culture économique, juridique et managériale pour l’informatique : </h6>
                <ul>
                    <li>analyser des situations économiques, juridiques et managériales auxquelles un prestataire de
                        services informatiques est confrontée ;</li>
                    <li>exploiter une base documentaire économique, juridique ou managériale ;</li>
                    <li>proposer des solutions argumentées et mobilisant des notions et les méthodologies
                        économiques, juridiques ou managériales adaptées aux situations proposées ;</li>
                    <li>établir un diagnostic (ou une partie de diagnostic) préparant une prise de décision
                        stratégique ;</li>
                    <li>exposer ses analyses et ses propositions de manière cohérente et argumentée.</li>
                </ul>
            </div>
        </div>

        <div class="col-md-6">
            <div class="h-100 rounded p-5 border-start border-3 border-primary bg-primary-subtle">
                <h6>Facultatif :</h6>
                <ul>
                    <li>Langue vivante 2</li>
                    <li>Mathématiques approfondies</li>
                    <li>Parcours de certification complémentaire</li>
                </ul>
            </div>
        </div>
</section>