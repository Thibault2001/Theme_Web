<?php
session_start(); // Assurez-vous d'avoir démarré la session au début du fichier

// Déconnexion de l'utilisateur
session_unset(); // Supprime toutes les variables de session
session_destroy(); // Détruit la session

// Redirection vers la page d'accueil
header('Location: index.php');
exit;
?>
