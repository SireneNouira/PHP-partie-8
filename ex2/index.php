<?php
// Démarrage de la session
session_start();

// Définition des variables dans la session
$_SESSION['lastname'] = "nouira";
$_SESSION['firstname'] = "sirene";
$_SESSION['age'] = 21;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <!-- Lien vers la deuxième page -->
    <a href="page2.php">Aller à une autre page</a>
</body>
</html>
