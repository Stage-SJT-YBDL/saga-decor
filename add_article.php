<?php
 include('header.php');
?>
<div class="underheader"></div>
<main class="flex">
    <section class="admin-menu">
        <div class="admin-category flex">
            <img class="panel-icon" src="./assets/media/img/admin/file-regular(1).svg" alt="icône pages">
            <p><a href="admin.html">Pages</a></p>
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
            <p><a href="messagerie.html">Messagerie</a></p>    
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
    <div class="admin-screen-main flex">
        <div class="contact-left pd2" id="form-add">
            <form class="contact-input flex align-center column pdv2" action="post">
                <input type="text" name="title" id="article-title" placeholder="Titre" oninput="preview()">
                <label for="file" class="flex" style="width: 100%; margin-left: 100px; gap: 20px; align-items: center; cursor: pointer;">
                    <img class="plus" src="./assets/media/img/admin/circle-plus-solid.svg" style="height: 30px; width: 30px;" alt="icône ajout photo">
                     Importez votre image
                    <input onchange="preview()" hidden type="file" id="file">
                </label>
                <textarea name="article-content" id="article-content" cols="30" rows="10" placeholder="Message" oninput="preview()"></textarea>
                <input class="green-button" type="submit" value="Envoyer" style="width: 50%;">
            </form>
        </div>
        <div class="articles pd2 justify-center align-center">
            <h1 class="article-title text-center">Titre</h1>
            <div class="box justify-center">
                <img class="im1" src="./assets/media/img/accueil2/verr3.jpg" style="width: 400px; height: 230px;" alt="image">
            </div>
            <div>
                <p class="article-content laquar flex justify-center align-center color-white ">
                    Contenu
                </p>
            </div>
        </div>
    </div>
</section>

</main>
<script async src="assets/JS/article.js"></script>
<?php
  include('footer.php');
?>