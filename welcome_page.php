<!DOCTYPE html>
<html>
<head>
  <title>Mon Site - Accueil</title>
</head>
<body>
  <header>
    <h1>Bienvenue sur Mon Site</h1>
  </header>

  <nav>
    <ul>
      <li><a href="welcome_page.php">Accueil</a></li>
      <li><a href="apropos.php">À propos</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="actualites.php">Actualités</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="connexion.php">Se connecter</a></li>
      <li><a href="inscription.php">S'inscrire</a></li>
    </ul>
  </nav>

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
