<!DOCTYPE html>
<html>
<head>
  <title>Mon Site - Portfolio</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1>Notre Portfolio</h1>
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
    <h2>Projet 1</h2>
    <img src="chemin/vers/image-projet-1.jpg" alt="Image du projet 1">
    <p>Description détaillée du projet 1, les objectifs, les technologies utilisées, etc...</p>

    <h2>Projet 2</h2>
    <img src="chemin/vers/image-projet-2.jpg" alt="Image du projet 2">
    <p>Description détaillée du projet 2, les objectifs, les technologies utilisées, etc...</p>

    <h2>Projet 3</h2>
    <img src="chemin/vers/image-projet-3.jpg" alt="Image du projet 3">
    <p>Description détaillée du projet 3, les objectifs, les technologies utilisées, etc...</p>
  </main>

  <footer>
    <p>© 2023 Mon Site. Tous droits réservés.</p>
  </footer>
</body>
</html>
