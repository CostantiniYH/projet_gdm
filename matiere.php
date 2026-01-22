<h2>Ajouter une matière — BTS SIO</h2>

<form method="post">

<link rel="stylesheet" href="matiere.css">
    <!-- Nom de la matière -->
    <label for="nom_matiere"><strong>Nom de la matière :</strong></label>
    <input type="text" name="nom_matiere" id="nom_matiere" required placeholder="Ex : Réseaux, UML, Anglais…">

    <!-- Parcours concerné -->
    <label for="parcours"><strong>Parcours :</strong></label>
    <select name="parcours" id="parcours" required>
        <option value="">-- Choisissez le parcours --</option>
        <option value="SLAM">SLAM</option>
        <option value="SISR">SISR</option>
    </select>

    <!-- Description de la matière -->
    <label for="description"><strong>Description :</strong></label>
    <textarea name="description" id="description" rows="4" required placeholder="Décrivez brièvement la matière…"></textarea>

    <!-- Bouton -->
    <input type="submit" name="ajouter_matiere" value="Ajouter la matière">

</form>
