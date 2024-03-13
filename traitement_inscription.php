<?php
session_start();
include("constant_bdd.php"); // Assurez-vous que cette inclusion définit bien $conn

// Correction de la récupération des variables $_POST
$pseudo = isset($_POST["pseudo"]) && !empty($_POST["pseudo"]) ? htmlspecialchars($_POST["pseudo"]) : NULL;
$first_name = isset($_POST["first_name"]) && !empty($_POST["first_name"]) ? htmlspecialchars($_POST["first_name"]) : NULL;
$last_name = isset($_POST["last_name"]) && !empty($_POST["last_name"]) ? htmlspecialchars($_POST["last_name"]) : NULL;
$email = isset($_POST["email"]) && !empty($_POST["email"]) ? htmlspecialchars($_POST["email"]) : NULL;
$password1 = isset($_POST["password1"]) && !empty($_POST["password1"]) ? htmlspecialchars($_POST["password1"]) : NULL;
$password2 = isset($_POST["password2"]) && !empty($_POST["password2"]) ? htmlspecialchars($_POST["password2"]) : NULL;

if (($pseudo == NULL) || ($first_name == NULL) || ($last_name == NULL) || ($email == NULL) || ($password1 == NULL) || ($password2 == NULL)) {
    echo "Toutes les données sont requises.";
    exit(); // Arrêt du script si une donnée est manquante ou vide
}
try {
    // Vérification de la correspondance des mots de passe
    if ($password1 !== $password2) {
        throw new Exception("Les mots de passe ne correspondent pas");
    }
    // Vérification de l'unicité du pseudo
    $req = $conn->prepare("SELECT admin_pseudo FROM admin WHERE admin_pseudo = :pseudo");
    $req->execute(['pseudo' => $pseudo]);
    if ($req->rowCount() > 0) {
        throw new Exception("Pseudo déjà utilisé");
    }
    // Vérification de l'unicité de l'email
    $req = $conn->prepare("SELECT admin_email FROM admin WHERE admin_email = :email");
    $req->execute(['email' => $email]);
    if ($req->rowCount() > 0) {
        throw new Exception("Adresse mail déjà utilisée");
    }
    // Insertion de l'admin dans la base de données
    $pass_hash = password_hash($password1, PASSWORD_DEFAULT);
    $req = $conn->prepare("INSERT INTO admin (admin_pseudo, admin_email, admin_password, admin_first_name, admin_last_name) VALUES (:pseudo, :email, :password, :first_name, :last_name)");
    $req->execute([
        'pseudo' => $pseudo,
        'email' => $email,
        'password' => $pass_hash,
        'first_name' => $first_name,
        'last_name' => $last_name
    ]);
    header("Location:admin.php");
    exit(); // Arrêt du script après redirection
} catch (Exception $e) { // remplacer Exception par PDOException si problème de connexion BDD 
    // Gestion de l'erreur
    echo "Erreur : " . $e->getMessage();
    echo "<a href='news.php'>Revenir sur la page d'accueil</a>";
    exit();
}
?>
