<!DOCTYPE html>
<html>
<head>
  <title>Mon Site - Résultats de recherche</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1>Résultats de recherche</h1>
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
    <h2>Résultats de recherche pour "Termes de recherche"</h2>

    <article>
      <h3>Titre de l'article 1</h3>
      <p>Description de l'article 1...</p>
      <a href="article1.php">Lire la suite</a>
    </article>

    <article>
      <h3>Titre de l'article 2</h3>
      <p>Description de l'article 2...</p>
      <a href="article2.php">Lire la suite</a>
    </article>

    <article>
      <h3>Titre de l'article 3</h3>
      <p>Description de l'article 3...</p>
      <a href="article3.php">Lire la suite</a>
    </article>

    <!-- Ajoutez d'autres résultats de recherche si nécessaire -->
  </main>

  <footer>
    <p>© 2023 Mon Site. Tous droits réservés.</p>
  </footer>
</body>
</html>
