<!DOCTYPE html>
<html>
<head>
  <title>Mon Site - Connexion</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1>Connexion</h1>
  </header>

  <?php include 'navbar.html'; ?>

  <main>
    <h2>Formulaire de connexion</h2>

    <form action="traitement_connexion.php" method="post">
      <label for="email">Email :</label>
      <input type="email" id="email" name="email" required><br>

      <label for="motdepasse">Mot de passe :</label>
      <input type="password" id="motdepasse" name="motdepasse" required><br>

      <input type="submit" value="Se connecter">
    </form>
  </main>

  <footer>
    <p>© 2023 Mon Site. Tous droits réservés.</p>
  </footer>
</body>
</html>
