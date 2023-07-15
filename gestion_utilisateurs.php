<?php
session_start(); // Assurez-vous d'avoir démarré la session au début du fichier

// Vérifier si l'utilisateur est un administrateur
if ($_SESSION['user_role'] !== 'admin') {
  // Rediriger l'utilisateur vers une autre page ou afficher un message d'erreur
  header('Location: accueil.php'); // Exemple de redirection vers une autre page
  exit;
}

// Connectez-vous à la base de données (assurez-vous que vous avez inclus le code de connexion)
$servername = "localhost";
$username = "Thibault";
$password = "MySQL2023";
$dbname = "siteweb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Récupérer la liste des utilisateurs depuis la base de données
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Traitement du formulaire de mise à jour du rôle
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $userId = $_POST['user_id'];
  $newRole = $_POST['new_role'];

  // Mettre à jour le rôle de l'utilisateur dans la base de données
  $updateSql = "UPDATE users SET role = '$newRole' WHERE id = '$userId'";
  if ($conn->query($updateSql) === TRUE) {
    // Succès de la mise à jour
    header('Location: gestion_utilisateurs.php');
    exit;
  } else {
    // Erreur lors de la mise à jour
    echo "Erreur lors de la mise à jour du rôle : " . $conn->error;
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Gestion des utilisateurs</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1>Gestion des utilisateurs</h1>
  </header>

  <?php
session_start(); // Assurez-vous d'avoir démarré la session au début du fichier

// Vérifier si la variable de session 'role' existe
if (isset($_SESSION['role'])) {
  // La variable de session existe, vérifier le rôle de l'utilisateur
  if ($_SESSION['role'] === 'user') {
    // Inclure la userNavbar
    include 'userNavbar.html';
  } elseif ($_SESSION['role'] === 'admin') {
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

  <main>
    <h2>Liste des utilisateurs</h2>

    <table>
      <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Rôle</th>
        <th>Actions</th>
      </tr>

      <?php
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo '<tr>';
          echo '<td style="padding: 10px;">' . $row['username'] . '</td>';
          echo '<td style="padding: 10px;">' . $row['email'] . '</td>';
          echo '<td style="padding: 10px;">' . $row['role'] . '</td>';
          echo '<td style="padding: 10px;">';
          echo '<form action="" method="post">';
          echo '<input type="hidden" name="user_id" value="' . $row['id'] . '">';

          // Liste déroulante pour sélectionner le nouveau rôle
          echo '<select name="new_role">';
          echo '<option value="user" ' . ($row['role'] === 'user' ? 'selected' : '') . '>Utilisateur</option>';
          echo '<option value="admin" ' . ($row['role'] === 'admin' ? 'selected' : '') . '>Administrateur</option>';
          echo '</select>';

          echo '<br>'; // Espacement supplémentaire ici
          echo '<input type="submit" value="Modifier">';
          echo '</form>';
          echo '</td>';
          echo '</tr>';
        }
      } else {
        echo '<tr><td colspan="4">Aucun utilisateur trouvé.</td></tr>';
      }
      ?>

    </table>
  </main>

  <footer>
    <p>© 2023 Mon Site. Tous droits réservés.</p>
  </footer>
</body>
</html>

<?php
// Fermer la connexion à la base de données
$conn->close();
?>