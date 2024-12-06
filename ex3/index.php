<?php
// Vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupère le login et le mot de passe envoyés par le formulaire
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Crée des cookies pour le login et le mot de passe (valables 7 jours)
    setcookie('userLogin', $login, time() + (7 * 24 * 60 * 60), '/');  // Expire dans 7 jours
    setcookie('userPassword', $password, time() + (7 * 24 * 60 * 60), '/');  // Expire dans 7 jours

    // Affiche un message pour confirmer la soumission et l'enregistrement des cookies
    echo "Données enregistrées dans des cookies. Vous pouvez maintenant accéder à vos informations.";
} else {
    // Si le formulaire n'est pas soumis, redirige vers la page du formulaire
    echo "Veuillez soumettre le formulaire.";
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
</head>
<body>

    <h2>Formulaire de Connexion</h2>

    <form action="index.php" method="POST">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login" required><br><br>

        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Se connecter">
    </form>

</body>
</html>
