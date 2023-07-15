<!DOCTYPE html>
<html>
<head>
  <title>Mon Site - Inscription</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1>Inscription</h1>
  </header>

  <?php include 'navbar.html'; ?>

  <main>
    <h2>Formulaire d'inscription</h2>

    <form action="traitement_inscription.php" method="post">
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom" required><br>

      <label for="email">Email :</label>
      <input type="email" id="email" name="email" required><br>

      <label for="motdepasse">Mot de passe :</label>
      <input type="password" id="motdepasse" name="motdepasse" required><br>

      <input type="submit" value="S'inscrire">
    </form>
  </main>

  <footer>
    <p>© 2023 Mon Site. Tous droits réservés.</p>
  </footer>
</body>
</html>