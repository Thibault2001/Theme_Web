<?php
// Connectez-vous à la base de données (assurez-vous que vous avez inclus le code de connexion)
$servername = "localhost";
$username = "Thibault";
$password = "MySQL2023";
$dbname = "siteweb";

// Récupérez les données soumises dans le formulaire d'inscription
$nom = $_POST['nom'];
$email = $_POST['email'];
$motdepasse = $_POST['motdepasse'];

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
  die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Vérifiez si l'email est déjà utilisé
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows === 0) {
  // L'email est disponible, insérez les informations dans la base de données
  $hashedPassword = password_hash($motdepasse, PASSWORD_DEFAULT); // Hachez le mot de passe pour le stockage sécurisé

  $sql = "INSERT INTO users (username, email, password) VALUES ('$nom', '$email', '$hashedPassword')";
  $conn->query($sql);

  // Redirigez l'utilisateur vers la page de connexion avec un message de succès
  header('Location: connexion.php?success=1');
  exit;
}

// L'email est déjà utilisé, redirigez l'utilisateur vers la page d'inscription avec un message d'erreur
$error_message = 'Cet email est déjà utilisé. Veuillez utiliser un autre email.';
header('Location: inscription.php?error=' . urlencode($error_message));
exit;
?>
