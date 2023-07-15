<!DOCTYPE html>
<html>
<head>
  <title>Mon Site - Plan du site</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1>Plan du site</h1>
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
    <h2>Pages principales</h2>
    <ul>
      <li><a href="index.php">Accueil</a></li>
      <li><a href="apropos.php">À propos</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="actualites.php">Actualités</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>

    <h2>Autres pages</h2>
    <ul>
      <li><a href="portfolio.php">Portfolio</a></li>
      <li><a href="blog.php">Blog</a></li>
      <li><a href="avis.php">Avis</a></li>
      <li><a href="faq.php">FAQ</a></li>
      <li><a href="confidentialité.php">Politique de confidentialité</a></li>
      <li><a href="conditions_utilisation.php">Conditions d'utilisation</a></li>
    </ul>
  </main>

  <footer>
    <p>© 2023 Mon Site. Tous droits réservés.</p>
  </footer>
</body>
</html>
