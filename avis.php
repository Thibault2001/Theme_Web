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