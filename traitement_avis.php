<?php
// Récupération des données soumises par le formulaire
$name = $_POST['name'];
$rating = $_POST['rating'];
$review = $_POST['review'];
// Valider les données (ajouter des vérifications supplémentaires si nécessaire)

// Stocker les données de l'avis dans une base de données ou un système de stockage approprié
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


// Récupération de l'identifiant de l'utilisateur connecté (à partir de la session ou d'autres méthodes d'authentification)
$userId = $_SESSION['user_id']; // À adapter en fonction de votre logique d'authentification

// Préparation de la requête SQL d'insertion de l'avis avec l'identifiant de l'utilisateur
$sql = "INSERT INTO reviews (name, rating, review, user_id) VALUES ('$name', $rating, '$review', 0, $userId)";


// Exécution de la requête
if ($conn->query($sql) === TRUE) {
  // Succès de l'insertion
  header("Location: avis.php");
  exit();
} else {
  // Erreur lors de l'insertion
  echo "Erreur lors de l'insertion des données : " . $conn->error;
}
// Fermeture de la connexion
$conn->close();
// Rediriger vers la page des avis après le traitement
header("Location: avis.php");
exit();
?>
