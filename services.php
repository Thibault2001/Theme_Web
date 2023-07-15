<!DOCTYPE html>
<html>
<head>
  <title>Mon Site - Services</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1>Nos services</h1>
  </header>

  <?php
session_start(); // Assurez-vous d'avoir démarré la session au début du fichier

// Vérifier si la variable de session 'role' existe
if (isset($_SESSION['role'])) {
  // La variable de session existe, vérifier le rôle de l'utilisateur
  if ($_SESSION['role'] === 'user') {
    // Inclure la userNavbar
    include 'userNavbar.html';
  } elseif ($_SESSION['role'] === 'admin') {
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
    <h2>Service 1</h2>
    <p>Description détaillée du service 1 que nous proposons à nos clients...</p>

    <h2>Service 2</h2>
    <p>Description détaillée du service 2 que nous proposons à nos clients...</p>

    <h2>Service 3</h2>
    <p>Description détaillée du service 3 que nous proposons à nos clients...</p>
  </main>

  <footer>
    <p>© 2023 Mon Site. Tous droits réservés.</p>
  </footer>
</body>
</html>
