<h2>Ajouter une section — BTS SIO</h2>

<form method="post">

<link rel="stylesheet" href="section.css">

    <!-- Nom de la section -->
    <label for="nom_section"><strong>Nom de la section :</strong></label>
    <input type="text" name="nom_section" id="nom_section" required placeholder="Ex : Introduction, Partie 1, Réseaux, Développement…">

    <!-- Numéro de la section -->
    <label for="numero_section"><strong>Numéro de la section :</strong></label>
    <input type="number" name="numero_section" id="numero_section" min="1" required>

    <!-- Description -->
    <label for="description_section"><strong>Description :</strong></label>
    <textarea name="description_section" id="description_section" rows="4" required placeholder="Décrivez le contenu ou l’objectif de cette section…"></textarea>

    <input type="submit" name="ajouter_section" value="Ajouter la section">

</form>
