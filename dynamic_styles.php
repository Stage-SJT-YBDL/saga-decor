<?php
header("Content-Type: text/css");

// Inclure le fichier de connexion à la base de données
include 'constant_bdd.php';

try {
    // Sélectionner les valeurs de couleur de la base de données
    $stmt = $conn->prepare("SELECT setting_name, setting_value FROM site_settings WHERE setting_name IN ('primary_color', 'secondary_color')");
    $stmt->execute();
    $settings = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);

    $primaryColor = $settings['primary_color'] ?? '#008483'; // Couleur primaire par défaut
    $secondaryColor = $settings['secondary_color'] ?? '#FFA500'; // Couleur secondaire par défaut
} catch (Exception $e) {
    // En cas d'erreur, utiliser les couleurs par défaut
    $primaryColor = '#008483';
    $secondaryColor = '#FFA500';
    // Log l'erreur ou gérer selon les besoins
}

// Imprimer le CSS avec les valeurs des couleurs
echo ":root {
    --primary-color: {$primaryColor};
    --secondary-color: {$secondaryColor};
}";
?>
