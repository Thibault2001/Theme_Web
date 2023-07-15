<?php
session_start(); // Assurez-vous d'avoir démarré la session au début du fichier

// Vérifier si l'utilisateur est un administrateur
if ($_SESSION['user_role'] !== 'admin') {
  // Rediriger l'utilisateur vers une autre page ou afficher un message d'erreur
  header('Location: accueil.php'); // Exemple de redirection vers une autre page
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Accueil Admin</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1>Accueil Admin</h1>
  </header>

  <?php
session_start(); // Assurez-vous d'avoir démarré la session au début du fichier
// Vérifier si la variable de session 'role' existe
if (isset($_SESSION['user_role'])) {
  // La variable de session existe, vérifier le rôle de l'utilisateur
  if ($_SESSION['user_role'] === 'user') {
    // Inclure la userNavbar
    include 'userNavbar.html';
  } elseif ($_SESSION['user_role'] === 'admin') {
    // Inclure la adminNavbar
    include 'adminNavbar.html';
  } else {
    // Rôle non défini
    // Inclure une navbar par défaut
    include 'noUserNavbar.html';
  }
} else {
  // Utilisateur non connecté
  // Inclure une navbar par défaut
  include 'noUserNavbar.html';
}
?>

  <main>
    <h2>Bienvenue, <?php echo $_SESSION['user_email']; ?></h2>
    <a href="gestion_utilisateurs.php">Gestion des utilisateurs</a>
    <p>Vous êtes connecté en tant qu'administrateur. Vous avez accès à des fonctionnalités spécifiques pour gérer le site.</p>

    <!-- Ajoutez ici le contenu et les fonctionnalités spécifiques à l'administrateur -->

  </main>

  <footer>
    <p>© 2023 Mon Site. Tous droits réservés.</p>
  </footer>
</body>
</html>
