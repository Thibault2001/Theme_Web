<!DOCTYPE html>
<html>
<head>
  <title>Mon Site - Contact</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1>Contactez-nous</h1>
  </header>

  <?php include 'navbar.html'; ?>

  <main>
    <h2>Formulaire de contact</h2>

    <form action="traitement_contact.php" method="post">
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom" required><br>

      <label for="email">Email :</label>
      <input type="email" id="email" name="email" required><br>

      <label for="message">Message :</label>
      <textarea id="message" name="message" rows="5" required></textarea><br>

      <input type="submit" value="Envoyer">
    </form>
  </main>

  <footer>
    <p>© 2023 Mon Site. Tous droits réservés.</p>
  </footer>
</body>
</html>
