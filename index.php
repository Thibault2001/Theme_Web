<!DOCTYPE html>
<html>
<head>
  <title>Mon Site - Accueil</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1>Bienvenue sur Mon Site</h1>
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
    <section>
      <h2>À propos de nous</h2>
      <p>Bienvenue sur notre site web. Nous sommes une entreprise spécialisée dans...</p>
    </section>

    <section>
      <h2>Nos services</h2>
      <ul>
        <li>Service 1</li>
        <li>Service 2</li>
        <li>Service 3</li>
      </ul>
    </section>

    <section>
      <h2>Dernières actualités</h2>
      <?php
      // Exemple de code PHP pour afficher les dernières actualités depuis une base de données ou un fichier.
      // Remplacez cette partie avec votre propre code d'accès aux actualités.
      $actualites = [
        ['titre' => 'Nouvelle fonctionnalité ajoutée', 'date' => '2023-07-15'],
        ['titre' => 'Promotion spéciale en cours', 'date' => '2023-07-14'],
        ['titre' => 'Événement à venir', 'date' => '2023-07-13']
      ];

      foreach ($actualites as $actualite) {
        echo '<article>';
        echo '<h3>' . $actualite['titre'] . '</h3>';
        echo '<p>Date : ' . $actualite['date'] . '</p>';
        echo '</article>';
      }
      ?>
    </section>
  </main>

  <footer>
    <p>© 2023 Mon Site. Tous droits réservés.</p>
  </footer>
</body>
</html>
