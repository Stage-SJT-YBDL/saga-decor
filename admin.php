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
        <div class="pages color-white">
            <ul class="flex column">
                <li class="color-black">- Accueil</li>
                <li>- Qui sommes nous?</li>
                <li>- Savoir faire</li>
                <li>- Contact</li>
                <li>- Galerie</li>
            </ul>
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
            <p><a href="themes.php">Thèmes</a></p>    
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
                            <th>TITRE</th>
                            <th>AUTEUR</th>
                            <th>MODIFIE LE</th>
                            <th>ACTIF</th>
                            <th>EDITION</th>
                            <th>SUPPRESSION</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php include_once('constant_bdd'); 
                    $pdo = new PDO('mysql:host=$servername,dbname=$db_name', $username, $password);
                    try {
                        $sql = "SELECT * FROM articles";
                        $req = $pdo->prepare($sql);
                        $req->execute();
                        $articles = $req->fetchAll(PDO::FETCH_ASSOC);   

                        foreach ($articles as $article) {
                            $id = htmlspecialchars($article['id']);
                            $titre = htmlspecialchars($article['title']);
                            $auteur = htmlspecialchars($article['author']);
                            $date = htmlspecialchars($article['edit_time']);
                            $desc = htmlspecialchars($article['desc']);

                            echo "<tr>";
                            echo "<td>$id</td>";
                            echo "<td>$titre</td>";
                            echo "<td>$auteur</td>";
                            echo "<td>$date</td>";
                            echo "<td>$desc</td>";
                            echo "</tr>";
                        }
                        
                    }catch (PDOException $e) {
                        echo "Erreur : " . $e->getMessage();
                    }
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