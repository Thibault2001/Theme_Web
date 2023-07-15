<?php
session_start(); // Démarrer la session

// Connectez-vous à la base de données (assurez-vous que vous avez inclus le code de connexion)
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

// Récupérer les données soumises dans le formulaire de connexion
$email = $_POST['email'];
$motdepasse = $_POST['motdepasse'];

// Requête SQL pour sélectionner l'utilisateur correspondant à l'email soumis
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
  $row = $result->fetch_assoc();

  // Vérifier le mot de passe
  if (password_verify($motdepasse, $row['password'])) {
    // Mot de passe correct, l'utilisateur est authentifié avec succès

    // Enregistrer les informations de l'utilisateur dans la session
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_email'] = $row['email'];
    $_SESSION['user_role'] = $row['role'];

    // Rediriger l'utilisateur vers la page appropriée en fonction de son rôle
    if ($row['role'] === 'admin') {
      header('Location: index_admin.php');
    } else {
      header('Location: index.php');
    }
    exit;
  }
}

// Les informations de connexion sont incorrectes, rediriger vers la page de connexion avec un message d'erreur
$_SESSION['login_error'] = 'Identifiant ou mot de passe incorrect. Veuillez réessayer.';
header('Location: connexion.php');
exit;
?>