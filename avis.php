<!DOCTYPE html>
<html>
<head>
  <title>Avis</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1>Avis</h1>
  </header>
  <?php include 'navbar.html'; ?>
  <div id="reviews">
    <?php
    // Connectez-vous à la base de données (assurez-vous que vous avez inclus le code de connexion)
    $servername = "localhost";
    $username = "Thibault";
    $password = "MySQL2023";
    $dbname = "siteweb";

    // Créer une connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
      die("Échec de la connexion à la base de données : " . $conn->connect_error);
    }

    // Préparation de la requête SQL de sélection des avis validés
    $sql = "SELECT reviews.*, users.username
    FROM reviews
    INNER JOIN users ON reviews.user_id = users.id
    WHERE reviews.validated = 1;
    ";

    // Exécution de la requête
    $result = $conn->query($sql);

    // Vérification si des avis validés ont été trouvés
    if ($result->num_rows > 0) {
      // Parcourir les résultats et afficher les avis validés
      while ($row = $result->fetch_assoc()) {
        echo '<div class="review">';
        echo '<h3>' . $row['name'] . '</h3>';
        echo '<p>Note : ' . $row['rating'] . ' étoiles</p>';
        echo '<p>Avis : ' . $row['review'] . '</p>';
        echo '</div>';
      }
    } else {
      echo 'Aucun avis validé trouvé.';
    }

    // Fermez la connexion à la base de données
    $conn->close();
    ?>
  </div>
  <?php include 'avis.html'; ?>
  <footer>
    <p>© 2023 Mon Site. Tous droits réservés.</p>
  </footer>
</body>
</html>