<?php
 include('header-admin.php');
?>
<div class="underheader"></div>
<main class="flex">
    <section class="admin-menu">
        <div class="admin-category flex">
            <img class="panel-icon" src="./assets/media/img/admin/file-regular(1).svg" alt="icône pages">
            <p><a href="admin.php">Pages</a></p>
        </div>    
        <div class="admin-category flex">
            <img class="panel-icon" src="./assets/media/img/admin/envelope-regular.svg" alt="icône Messagerie">
            <p><a href="messagerie.php">Messagerie</a></p>    
        </div>
        <div class="admin-category flex">
            <img class="panel-icon" src="./assets/media/img/admin/scale-unbalanced-flip-solid.svg" alt="icône gestion des droits">
            <p><a href="#">Gestion des droits</a></p>    
        </div>
        <div class="admin-category flex">
            <img class="panel-icon" src="./assets/media/img/admin/palette-solid.svg" alt="icône thèmes">
            <p><a href="#">Thèmes</a></p>    
        </div>
        <div class="admin-category flex">
            <img class="panel-icon" src="./assets/media/img/admin/gear-solid.svg" alt="icône maintenance">
            <p><a href="#">Maintenance</a></p>    
        </div>
    </section>
    <section class="admin-screen">
        <div class="admin-screen-main">
            <div class="admin-top flex justify-between panel-icon">
                <div class="flex align-center">
                    <img class="panel-icon" src="./assets/media/img/admin/file-regular.svg" alt="icône page">
                    <p>Accueil</p>
                </div>
                <div class="flex align-center">
                    <img class="panel-icon" src="./assets/media/img/admin/magnifying-glass-solid.svg" alt="icône recherche">
                    <form action="">
                        <input class="search-bar" type="search" placeholder="Rechercher">
                    </form>
                </div>
                <div class="flex align-center">
                    <img class="panel-icon" src="./assets/media/img/admin/add-article.png" alt="icône ajouter article">
                    <p>Nouvel article</p>
                </div>
            </div>
            <div class="admin-line">
                <table class="admin-table">
                    <thead>
                        <tr class="bold">
                            <th>N°</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>ACTIF</th>
                            <th>EDITION</th>
                            <th>SUPPRESSION</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    try {
                        include('constant_bdd.php');
                        // préparation de la requête SQL sécurisée pour sélectionner les produits
                        $sql = "SELECT * FROM  admin";
                        $qry = $conn->prepare($sql);
                        $qry->execute();
                        $admins = $qry->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($admins as $admin) {
                        ?>  
                        <tr>
                            <td><?= $admin["admin_id"] ?></td>
                            <td><?= $admin["admin_pseudo"] ?></td>
                            <td><?= $admin["admin_email"] ?></td>
                            <td><img src="./assets/media/img/admin/toggle-on-solid 1.png" alt="icône actif" class="panel-icon"></td>
                            <td><img src="./assets/media/img/admin/pen-to-square-solid 1.png" alt="icône édition" class="panel-icon"></td>
                            <td>
                                <form action="delete_admin.php" method="post">
                                    <input type="hidden" name="admin_id" value="<?= $admin["admin_id"] ?>">
                                    <button type="submit" style="border: none; background-color: transparent;">
                                        <img src="./assets/media/img/admin/trash-solid 1.png" alt="icône suppression" class="panel-icon">
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php  
                        }   
                        } catch(PDOException $err) {
                            //    création d'une connexion
                            echo " Erreur :" .$err->getMessage();
                            var_dump($err);

                        }
                        //    Fermeture de la base de données
                        $pdo = null;

                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>

<?php
 include('footer.php');
?>