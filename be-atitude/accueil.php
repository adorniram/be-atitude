<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: connexion.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil Protégée</title>
    <link rel="stylesheet" href="assest/style.css">
</head>
<body>
    <div class="accueil-container">
        <img src="images/Logo église Méthodiste.png" alt="Logo Église" style="width:120px; display:block; margin:0 auto 20px;">
        <h1>Bienvenue, <?php echo htmlspecialchars($_SESSION['nom']); ?> !</h1>
        <p>Vous êtes connecté(e) à la page d’accueil protégée de l’église.</p>
        <a href="deconnexion.php">Se déconnecter</a>
    </div>
</body>
</html> 