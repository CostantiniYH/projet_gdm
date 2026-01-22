<h2>Ajouter une section</h2>

<form method="post">

<link rel="stylesheet" href="theme.css">

    <!-- Titre de la section -->
    <label for="titre_section"><strong>Titre de la section :</strong></label>
    <input type="text" name="titre_section" id="titre_section" required placeholder="Ex : Introduction, Partie 1, Les réseaux…">

    <!-- Numéro de la section -->
    <label for="numero_section"><strong>Numéro de la section :</strong></label>
    <input type="number" name="numero_section" id="numero_section" min="1" required>

    <!-- Description -->
    <label for="description_section"><strong>Description :</strong></label>
    <textarea name="description_section" id="description_section" rows="4" required placeholder="Décrivez brièvement cette section…"></textarea>

    <!-- Bouton -->
    <input type="submit" name="ajouter_section" value="Ajouter la section">

</form>
