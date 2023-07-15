<?php
// Paramètres de connexion à la base de données
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
//Insertion des avis dans la page web
// Préparation de la requête SQL de sélection des avis validés
$sql = "SELECT * FROM reviews WHERE validated = 1";

// Exécution de la requête
$result = $conn->query($sql);

// Vérification si des avis ont été trouvés
if ($result->num_rows > 0) {
  // Parcourir les résultats et afficher les avis
  while ($row = $result->fetch_assoc()) {
    echo '<div class="review">';
    echo '<h3>' . $row['name'] . '</h3>';
    echo '<p>Note : ' . $row['rating'] . ' étoiles</p>';
    echo '<p>Avis : ' . $row['review'] . '</p>';
    echo '</div>';
  }
} else {
  echo 'Aucun avis trouvé.';
}
// Fermeture de la connexion
$conn->close();
?> 