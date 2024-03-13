<?php

session_start();
include("constant_bdd.php");

$pseudo = isset($_POST["pseudo"]) && !empty($_POST["pseudo"]) ? htmlspecialchars($_POST["pseudo"]) : NULL;
$password1 = isset($_POST["password1"]) && !empty($_POST["password1"]) ? htmlspecialchars($_POST["password1"]) : NULL;

if (($pseudo == NULL) || ($password1 == NULL)) {
    echo "Toutes les données sont requises.";
    exit();
}

try {
    $req = $conn->prepare("SELECT admin_pseudo, admin_password FROM admin WHERE admin_pseudo = :pseudo");
    $req->execute(['pseudo' => $pseudo]);
    $admin = $req->fetch(PDO::FETCH_ASSOC);
    if ($admin === false) {
        throw new Exception("Pseudo inconnu");
    }
    if (!password_verify($password1, $admin['admin_password'])) {
        throw new Exception("Mot de passe incorrect");
    }
    $_SESSION['admin'] = $admin;
    header("Location:admin.php");
    exit();
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
    echo "<a href='news.php'>Revenir sur la page d'accueil</a>";
    exit();
}