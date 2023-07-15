<!DOCTYPE html>
<html>
<head>
  <title>Mon Site - À propos</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1>À propos de nous</h1>
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
    <h2>Notre entreprise</h2>
    <p>Bienvenue sur notre site web. Nous sommes une entreprise spécialisée dans...</p>

    <h2>Notre équipe</h2>
    <ul>
      <li>Nom de membre de l'équipe 1 - Poste</li>
      <li>Nom de membre de l'équipe 2 - Poste</li>
      <li>Nom de membre de l'équipe 3 - Poste</li>
    </ul>

    <h2>Notre mission</h2>
    <p>Nous nous engageons à fournir des produits/services de haute qualité et à satisfaire les besoins de nos clients...</p>
  </main>

  <footer>
    <p>© 2023 Mon Site. Tous droits réservés.</p>
  </footer>
</body>
</html>
