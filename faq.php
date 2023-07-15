<!DOCTYPE html>
<html>
<head>
  <title>Mon Site - FAQ</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1>FAQ</h1>
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
    <h2>Questions fréquemment posées</h2>

    <h3>Question 1 ?</h3>
    <p>Réponse à la question 1...</p>

    <h3>Question 2 ?</h3>
    <p>Réponse à la question 2...</p>

    <h3>Question 3 ?</h3>
    <p>Réponse à la question 3...</p>

    <!-- Ajoutez d'autres questions et réponses si nécessaire -->
  </main>

  <footer>
    <p>© 2023 Mon Site. Tous droits réservés.</p>
  </footer>
</body>
</html>
