<?php
include 'constant_bdd.php';

function updateColorSetting($name, $value) {
    global $conn; // Assurez-vous que $conn est accessible
    $sql = "UPDATE site_settings SET setting_value = :value WHERE setting_name = :name";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':value' => $value, ':name' => $name]);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'update':
            // Mise à jour avec les couleurs choisies par l'utilisateur
            $primaryColor = $_POST['primary_color'] ?? '#008483'; // Utiliser la valeur par défaut si non définie
            $secondaryColor = $_POST['secondary_color'] ?? '#FFA500'; // Utiliser la valeur par défaut si non définie
            updateColorSetting('primary_color', $primaryColor);
            updateColorSetting('secondary_color', $secondaryColor);
            break;

        case 'default':
            // Réinitialisation avec les couleurs par défaut
            updateColorSetting('primary_color', '#008483');
            updateColorSetting('secondary_color', '#FFA500');
            break;
    }
    
    // Redirection vers themes.php avec un message de succès ou d'erreur
    header('Location: themes.php');
    exit;
}
?>

