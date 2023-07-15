<!DOCTYPE html>
<html>
<head>
  <title>Mon Site - Conditions d'utilisation</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1>Conditions d'utilisation</h1>
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
    <h2>Acceptation des conditions d'utilisation</h2>
    <p>En accédant et en utilisant ce site, vous acceptez d'être lié par les présentes conditions d'utilisation. Si vous n'acceptez pas ces conditions, veuillez ne pas utiliser ce site...</p>

    <h2>Contenu du site</h2>
    <p>Tout le contenu de ce site est fourni à titre informatif uniquement. Nous ne garantissons pas l'exactitude, l'exhaustivité ou l'actualité du contenu...</p>

    <h2>Utilisation autorisée</h2>
    <p>Vous vous engagez à utiliser ce site conformément aux lois applicables et aux présentes conditions d'utilisation. Vous ne pouvez pas utiliser ce site d'une manière qui pourrait causer des dommages, une interruption ou une altération du site...</p>

    <h2>Propriété intellectuelle</h2>
    <p>Tout le contenu, y compris les textes, les images, les marques commerciales et les logos, est protégé par des droits de propriété intellectuelle. Vous ne pouvez pas utiliser, reproduire ou distribuer le contenu sans autorisation écrite préalable...</p>

    <h2>Limitation de responsabilité</h2>
    <p>Nous ne serons pas responsables des dommages directs, indirects, accessoires, consécutifs ou spéciaux découlant de l'utilisation ou de l'impossibilité d'utiliser ce site...</p>

  </main>

  <footer>
    <p>© 2023 Mon Site. Tous droits réservés.</p>
  </footer>
</body>
</html>
