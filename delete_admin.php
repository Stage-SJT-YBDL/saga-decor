<?php
include('constant_bdd.php');


if (isset($_POST['admin_id']) && !empty($_POST['admin_id'])) {
    $admin_id = $_POST['admin_id'];

    try {
        $sql = "DELETE FROM admin WHERE admin_id = :admin_id";
        $qry = $conn->prepare($sql);
        $qry->bindParam(':admin_id', $admin_id, PDO::PARAM_INT);
        $qry->execute();
        header('Location: gestion-droits.php');
        exit;
    } catch(PDOException $err) {
        echo "Erreur lors de la suppression : " . $err->getMessage();
        exit;
    }
} else {
    echo "Identifiant d'administrateur manquant.";
    exit;
}
?>
