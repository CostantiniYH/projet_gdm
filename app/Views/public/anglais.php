<main class="bg-section-matiere p-5">
    <h2 class="text-white"><?= $titre ?> </h2>
    <h3 class="text-white">Parcourez les notes et cours disponibles sur ce site</h3>
</main>

<section class="bg-section-2 p-5">
    <div class="col-md shadow">
        <div class="p-5">
            <img class="float-end border-top border-success border-3 shadow-sm rounded-5 p-2 ms-3 img-fluid" width="100rem" src="<?= BASE_URL ?>uploads/tech/linux.png" alt="">
            <h3>Présentation du 06/03/2026</h3>
            <h4>Version en Français</h4>
            <h5>Sujet : Les communautés de l'open source et du logiciel libre : différences et points communs</h5>
                <ul class="float-end fst-italic p-4 shadow-sm ms-4" style="width: 20rem;">
                    <h5>Liste de mots à utiliser</h5>
                    <li>Free software → logiciel libre</li>
                    <li>pen source → open source</li>
                    <li>Source code → code source</li>
                    <li>Software license → licence logicielle</li>
                    <li>Developer → développeur</li>
                    <li>Community → communauté        </li>
                    <li>Collaboration → collaboration            </li>
                    <li>Project → projet                </li>
                    <li>User → utilisateur</li>

                    <h5 class="mt-3">Les verbes utils</h5>
                    <li>to use → utiliser</li>                          
                    <li>to study → étudier</li>
                    <li>to modify → modifier</li>
                    <li>to share → partager</li>
                    <li>to distribute → distribuer</li>
                    <li>to contribute → contribuer</li>
                    <li>to improve → améliorer</li>
                    <li>to develop → développer</li>
                    
                    <h5 class="mt-3">Expressions</h5>
                    <li>open source community → communauté open source</li>
                    <li>free software movement → mouvement du logiciel libre</li>
                    <li>software development → développement logiciel</li>
                    <li>collaborative development → développement collaboratif</li>
                    <li>public access to the code → accès public au code</li>
                    <li>software philosophy → philosophie du logiciel</li>
                </ul>
            <p class="text-justifie">
                Beaucoup d'outils numériques que nous utilisonns au quotidien sont créés par des communautés de développeurs à travers le monde.
                Mais on entend souvent deux termes : le logiciel libre et l'open source.
                Est-ce la même chose ? 
            </p>
            <p class="text-justifie">
                Expliquons d'abord ce qu'est le logiciel libre. Le logiciel libre est un mouvement né dans les années 1980 avec
                Richard Stallman et la Free Software Foundation. L'idée principale est une question de liberté pour l'utilisateur.
                Ainsi, le logiciel libre garantit 4 libertés :
                <ol>
                    <li>Utiliser le logiciel</li>
                    <li>Etudier son fonctionnement</li>
                    <li>Modifier le code</li>
                    <li>Redistribuer le code</li>
                </ol>
                Parmi les logiciel libre les plus connus on retrouve le systeme d'exploitation Linux.
            </p>
            <p class="text-justifie">
                Le message du logiciel libre est donc philosophique et étique : "Les utilisateurs doivent garder le contrôle sur les logiciels."
            </p>
            <p>
                L'Open Source, quant à lui apparait plus tard, à la fin des années 1990 avec l'Open Source Initiative. L'idée est similaire
                : le code doit être accessible et peut être modifié. Cependant, l'approche est différente :
                    <ul>
                        <li>Elle est plus pragmatique</li>
                        <li>Elle met en avant les avantages techniques et économiques</li>
                    </ul>
                Un exemple de projet Open Source très connu : Mozilla Firefox
            </p>
            <p>Le message de l'Open Source est plutôt : "Partager le code permet de créer de meilleurs logiciels."</p>
            <p class="text-justifie">
                Ce qui marque le principal désaccord c'est le rapport aux entreprises et à la gratuité. Le mouvement du logiciel libre
                considère l'utiilisation de slogiciels propriétaires comme une perte de liberté, et critique les entreprises qui ne
                respectent pas l'esprit de liberté dans l'utilisation du code. Alors que le mouvement de l'Open Source est 
                beaucoup plus ouvert à la collaboration avec les entreprises. Aujourd'hui, de nombreuses entreprises de renom participent
                à des projets open source telles que Microsoft ou Google, parmi les projets on retrouve Linux.
                Les termes Free et Open n'ont pas été choisi au hasard, au contraire : Le Free a été choisi pour insister sur la gratuité et
                la liberté, tandis que l'Open a été choisi pour être plus correct avec les relations d'enteprises et éviter la confusion en insinuant
                que les logiciels ne sont pas commercialisables.
            </p>
            <a href="<?= BASE_URL ?>ressources/The_open_source_and_free_software_communities.pptx">Télécharger la Présentation</a>
        </div>
    </div>
</section>