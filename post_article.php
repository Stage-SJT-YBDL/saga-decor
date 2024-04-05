<?php 
include('constant_bdd.php');

if (isset($_POST['title']) && ( $_FILES['image'] != empty($_FILES['image']))) {
    try {
        $title = htmlspecialchars($_POST['title']);
        $desc = htmlspecialchars($_POST['desc']);

        // Vérifier si un fichier a été téléchargé
        if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            // Générer un nom unique pour l'image
            $image_name = uniqid() . '_' . $_FILES['image']['name'];

            // Déplacer l'image téléchargée vers un dossier sur le serveur
            move_uploaded_file($_FILES['image']['tmp_name'], 'chemin/vers/dossier/' . $image_name);
        } else {
            // Si aucun fichier n'a été téléchargé, définir $image_name sur NULL
            $image_name = null;
        }

        $date = date("Y-m-d H:i:s");

        $sql = "INSERT INTO articles (title, description, image, edit_time) VALUES (:title, :description, :image, :date)";
        $req = $conn->prepare($sql);
        $req->bindParam(':title', $title);
        $req->bindParam(':description', $desc);
        $req->bindParam(':image', $image_name);
        $req->bindParam(':date', $date);
        $req->execute();

        header("Location: admin.php");
        exit();
    } catch (PDOException $e) {
        echo "Erreur: " . $e->getMessage();
    }
}
?>