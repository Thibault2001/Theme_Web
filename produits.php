<!DOCTYPE html>
<html>
<head>
  <title>Mon Site - Produits</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1>Nos produits</h1>
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
    <h2>Produit 1</h2>
    <p>Description détaillée du produit 1 avec ses caractéristiques, ses fonctionnalités, etc...</p>

    <h2>Produit 2</h2>
    <p>Description détaillée du produit 2 avec ses caractéristiques, ses fonctionnalités, etc...</p>

    <h2>Produit 3</h2>
    <p>Description détaillée du produit 3 avec ses caractéristiques, ses fonctionnalités, etc...</p>
  </main>

  <footer>
    <p>© 2023 Mon Site. Tous droits réservés.</p>
  </footer>
</body>
</html>
