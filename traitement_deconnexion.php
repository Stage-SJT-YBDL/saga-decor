<?php
session_start(); // Assurez-vous que la session est démarrée
// Videz le tableau admin de la session
unset($_SESSION['admin']);
// Détruisez la session admin
session_destroy();
// notification de déconnexion via un message d'erreur en alerte
echo "<script>alert('Vous êtes déconnecté.');</script>";
header("Location:index.html"); // Redirigez l'utilisateur vers la page d'accueil
exit();
