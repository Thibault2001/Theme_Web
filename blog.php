<!DOCTYPE html>
<html>
<head>
  <title>Mon Site - Blog</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1>Blog</h1>
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
    <article>
      <h2>Titre de l'article 1</h2>
      <p>Date de publication : 15 juillet 2023</p>
      <p>Auteur : Nom de l'auteur</p>
      <p>Contenu de l'article 1...</p>
    </article>

    <article>
      <h2>Titre de l'article 2</h2>
      <p>Date de publication : 12 juillet 2023</p>
      <p>Auteur : Nom de l'auteur</p>
      <p>Contenu de l'article 2...</p>
    </article>

    <article>
      <h2>Titre de l'article 3</h2>
      <p>Date de publication : 8 juillet 2023</p>
      <p>Auteur : Nom de l'auteur</p>
      <p>Contenu de l'article 3...</p>
    </article>
  </main>

  <footer>
    <p>© 2023 Mon Site. Tous droits réservés.</p>
  </footer>
</body>
</html>
