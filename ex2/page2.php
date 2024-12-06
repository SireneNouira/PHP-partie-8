<?php
// Démarrage de la session
session_start();

// Récupération des variables de la session
$lastname = $_SESSION['lastname'] ?? 'Non défini';
$firstname = $_SESSION['firstname'] ?? 'Non défini';
$age = $_SESSION['age'] ?? 'Non défini';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>
    <!-- Affichage des variables -->
    <p>Prénom : <?php echo htmlspecialchars($firstname); ?></p>
    <p>Nom : <?php echo htmlspecialchars($lastname); ?></p>
    <p>Âge : <?php echo htmlspecialchars($age); ?></p>
</body>
</html>
