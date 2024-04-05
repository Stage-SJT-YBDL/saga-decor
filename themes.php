<?php
 include('header.php');
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
            <p><a href="themes.php">Thèmes</a></p>    
        </div>
        <div class="admin-category flex">
            <img class="panel-icon" src="./assets/media/img/admin/gear-solid.svg" alt="icône maintenance">
            <p><a href="#">Maintenance</a></p>    
        </div>
    </section>
    <section class="admin-screen flex align-start justify-around">
        <form action="update_colors.php" method="post">
            <label for="primary-color">Couleur primaire :</label>
            <input type="color" id="primary-color" name="primary_color" value="#008483">
            
            <label for="secondary-color">Couleur secondaire :</label>
            <input type="color" id="secondary-color" name="secondary_color" value="#FFA500">
            
            <button type="submit" name="action" value="update">Mettre à jour les couleurs</button>
            <button type="submit" name="action" value="default">Couleur Par Défaut</button>
        </form>
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const primaryColorPicker = document.getElementById('primary-color');
        const applyColorButton = document.getElementById('apply-color');
        const defaultColorButton = document.getElementById('default-color');

        // Valeur par défaut
        const defaultPrimaryColor = '#008483';

        // Appliquer et stocker la couleur
            applyColorButton.addEventListener('click', function () {
            const primaryColor = primaryColorPicker.value;
            document.documentElement.style.setProperty('--primary-color', primaryColor);
            sessionStorage.setItem('primaryColor', primaryColor);
        });

        // Réinitialiser la couleur par défaut
            defaultColorButton.addEventListener('click', function () {
            document.documentElement.style.setProperty('--primary-color', defaultPrimaryColor);
            sessionStorage.setItem('primaryColor', defaultPrimaryColor);
        });

        // Charger la couleur depuis sessionStorage
        const storedPrimaryColor = sessionStorage.getItem('primaryColor');
        if (storedPrimaryColor) {
            document.documentElement.style.setProperty('--primary-color', storedPrimaryColor);
            primaryColorPicker.value = storedPrimaryColor; // Mettre à jour la valeur du picker
        }
        });
    </script>



</footer>
</body>
</html>