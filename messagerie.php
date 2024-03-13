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
            <p><a href="gestion-droits.php">Gestion des droits</a></p>    
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
                    <img class="panel-icon" src="./assets/media/img/admin/envelope-regular-black.svg" alt="icône page">
                    <p>Messagerie</p>
                </div>
                <div class="flex align-center">
                    <img class="panel-icon" src="./assets/media/img/admin/magnifying-glass-solid.svg" alt="icône recherche">
                    <form action="">
                        <input class="search-bar" type="search" placeholder="Rechercher">
                    </form>
                </div>
                <div class="flex align-center">
                    <img class="panel-icon" src="./assets/media/img/admin/add-article.png" alt="icône ajouter article">
                    <p>Nouveau message</p>
                </div>
            </div>
            <div class="admin-line">
                <table class="admin-table">
                    <thead>
                        <tr class="bold">
                            <th>N°</th>
                            <th>OBJET</th>
                            <th>EXPEDITEUR</th>
                            <th>RECU LE</th>
                            <th>LU / NON LU</th>
                            <th>REPONDRE</th>
                            <th>SUPPRESSION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Nouveaux locaux</td>
                            <td>Jean Décor</td>
                            <td>01/02/2024</td>
                            <td><img src="./assets/media/img/admin/toggle-on-solid 1.png" alt="icône actif" class="panel-icon"></td>
                            <td><img src="./assets/media/img/admin/pen-to-square-solid 1.png" alt="icône édition" class="panel-icon"></td>
                            <td><img src="./assets/media/img/admin/trash-solid 1.png" alt="icône suppression" class="panel-icon"></td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Nouveaux locaux</td>
                            <td>Jean Décor</td>
                            <td>01/02/2024</td>
                            <td><img src="./assets/media/img/admin/toggle-on-solid 1.png" alt="icône actif" class="panel-icon"></td>
                            <td><img src="./assets/media/img/admin/pen-to-square-solid 1.png" alt="icône édition" class="panel-icon"></td>
                            <td><img src="./assets/media/img/admin/trash-solid 1.png" alt="icône suppression" class="panel-icon"></td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Nouveaux locaux</td>
                            <td>Jean Décor</td>
                            <td>01/02/2024</td>
                            <td><img src="./assets/media/img/admin/toggle-on-solid 1.png" alt="icône actif" class="panel-icon"></td>
                            <td><img src="./assets/media/img/admin/pen-to-square-solid 1.png" alt="icône édition" class="panel-icon"></td>
                            <td><img src="./assets/media/img/admin/trash-solid 1.png" alt="icône suppression" class="panel-icon"></td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Nouveaux locaux</td>
                            <td>Jean Décor</td>
                            <td>01/02/2024</td>
                            <td><img src="./assets/media/img/admin/toggle-on-solid 1.png" alt="icône actif" class="panel-icon"></td>
                            <td><img src="./assets/media/img/admin/pen-to-square-solid 1.png" alt="icône édition" class="panel-icon"></td>
                            <td><img src="./assets/media/img/admin/trash-solid 1.png" alt="icône suppression" class="panel-icon"></td>
                        </tr>
                        <tr>
                            <td>01</td>
                            <td>Nouveaux locaux</td>
                            <td>Jean Décor</td>
                            <td>01/02/2024</td>
                            <td><img src="./assets/media/img/admin/toggle-on-solid 1.png" alt="icône actif" class="panel-icon"></td>
                            <td><img src="./assets/media/img/admin/pen-to-square-solid 1.png" alt="icône édition" class="panel-icon"></td>
                            <td><img src="./assets/media/img/admin/trash-solid 1.png" alt="icône suppression" class="panel-icon"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</main>

<?php
 include('footer.php');
?>