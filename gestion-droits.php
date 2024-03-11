<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue chez Sage Décor</title>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/CSS/library.css">
    <link rel="stylesheet" href="assets/CSS/style.css">
</head>
<body>
<header>
    <nav class="nav-container flex justify-between mgr2">
        <span class="logo-container">
            <a href="index.html"><img src="assets/media/img/header/Design sans titre.png" alt="logo Saga decor" class="logo"></a>
        </span>
        <ul class="menu-container flex align-center justify-evenly">
            <li class="menu-link"><a href="#">Administration</a></li>
        </ul>
        <div class="admin flex justify-between align-center">
            <img class="user-icon" src="./assets/media/img/admin/user.png" alt="photo de profil">
            <p class="username">Jean Décor</p>
            <img class="icon" src="./assets/media/img/admin/power-off-solid.svg" alt="Bouton de déconnexion">
            <img class="icon" src="./assets/media/img/admin/bars-solid.svg" alt="Bouton menu burger">
        </div>
    </nav>
</header>
<div class="underheader"></div>
<main class="flex">
    <section class="admin-menu">
        <div class="admin-category flex">
            <img class="panel-icon" src="./assets/media/img/admin/file-regular(1).svg" alt="icône pages">
            <p><a href="admin.html">Pages</a></p>
        </div>    
        <div class="admin-category flex">
            <img class="panel-icon" src="./assets/media/img/admin/envelope-regular.svg" alt="icône Messagerie">
            <p><a href="messagerie.html">Messagerie</a></p>    
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
<footer>
    <div class="footer-container">
        <div class="footer-logos flex justify-center align-center">
            <h2 class="color-white mgr1">Pole Decor</h2>
        </div>
        <div class="white-line"></div>
        <div class="footer-menu-container">
            <ul class="footer-menu flex justify-evenly">
                <li class="footer-link">A propos</li>
                <li class="footer-link">Qui sommes nous ?</li>
                <li class="footer-link">Confidentialité</li>
                <li class="footer-link">Cookies</li>
                <li class="footer-link">Galerie</li>
                <li class="footer-link">Nous contacter</li>
                <li class="footer-link">Nos réseaux</li>
                <li class="footer-link">Rgpd</li>
            </ul>
        </div>
    </div>
    <div class="cookie-container flex justify-between align-center pdh2">
        <div class="cookie-left">
            <p>
                Nous utilisons des cookies pour permettre le bon fonctionnement ,
                la personalisation et l’analyse du site,
                mais c’est à vous de décider ! Cliquer sur “Gérer mes cookies”.
            </p>
        </div>
        <div class="cookie-right flex justify-end align-center">
            <p>Gérer les cookies</p>
            <button class="cookie-button pd2h">Cookies nécessaires</button>
            <button class="cookie-button pd2h">Tous les cookies</button>
        </div>
    </div>
</footer>
</body>
</html>