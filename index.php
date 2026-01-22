<h2>Ajouter un chapitre — BTS SIO</h2>

<form method="post">

<link rel="stylesheet" href="index.css">

    <!-- Sélection du parcours -->
    <label for="parcours"><strong>Parcours :</strong></label>
    <select name="parcours" id="parcours" required>
        <option value="">-- Choisissez votre parcours --</option>
        <option value="SLAM">SLAM</option>
        <option value="SISR">SISR</option>
    </select>

    <!-- Sélection de la matière -->
    <label for="matiere"><strong>Matière :</strong></label>
    <select name="matiere" id="matiere" required>
        <option value="">-- Sélectionnez une matière --</option>

        <!-- SLAM -->
        <optgroup label="SLAM (Solutions Logicielles et Applications Métier)">
            <option value="SLAM1">SLAM 1 – Développement d'applications</option>
            <option value="SLAM2">SLAM 2 – Développement web / mobile</option>
            <option value="SLAM3">SLAM 3 – Base de données / SQL</option>
        </optgroup>

        <!-- SISR -->
        <optgroup label="SISR (Solutions d’Infrastructure, Systèmes et Réseaux)">
            <option value="SISR1">SISR 1 – Administration systèmes</option>
            <option value="SISR2">SISR 2 – Réseaux & sécurité</option>
            <option value="SISR3">SISR 3 – Virtualisation & services</option>
        </optgroup>

        <!-- Matières générales BTS SIO -->
        <optgroup label="Matières Générales">
            <option value="culture">Culture générale & expression</option>
            <option value="anglais">Anglais</option>
            <option value="maths">Mathématiques</option>
            <option value="eco">Économie – Droit – Management</option>
        </optgroup>
    </select>

    <!-- Titre du chapitre -->
    <label for="chapitre"><strong>Titre du chapitre :</strong></label>
    <input type="text" name="chapitre" id="chapitre" required placeholder="Ex : Modélisation UML, DHCP, CSS…">

    <!-- Numéro du chapitre -->
    <label for="numero"><strong>Numéro :</strong></label>
    <input type="number" name="numero" id="numero" min="1" required>

    <!-- Contenu / Description -->
    <label for="description"><strong>Description :</strong></label>
    <textarea name="description" id="description" rows="4" required placeholder="Résumé du cours / notions étudiées"></textarea>

    <input type="submit" name="ajouter" value="Ajouter">
</form>
