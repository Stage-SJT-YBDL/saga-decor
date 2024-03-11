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
            <li class="menu-link"><a href="news.html">Accueil</a></li>
            <li class="menu-link"><a href="about.html">Qui sommes nous ?</a></li>
            <li class="menu-link"><a href="expertise.html">Savoir faire</a></li>
            <li class="menu-link"><a href="contact.html">Contact</a></li>
            <li class="menu-link"><a href="gallery.html">Galerie</a></li>
        </ul>
    </nav>
</header>
<main>
    <section class="contact">
        <div class="head-img color-white ">
            <p class="newH1 black-bg blur flex justify-center">
                Inscription / Connexion admin
            </p>
        </div>
        <div class="flex justify-center">
            <section class="contact-form flex mgr2">
                <div class="contact-left pd2 blur">
                    <form class="contact-input flex align-center column pdv2" action="traitement_inscription.php" method="post">
                        <h2>INSCRIPTION</h2>
                        <input type="text" name="pseudo" id="" placeholder="Pseudo">
                        <input type="text" name="first_name" id="" placeholder="Prénom">
                        <input type="text" name="last_name" id="" placeholder="Nom">
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password1" placeholder="Mot de passe">
                        <input type="password" name="password2" placeholder="Confirmez votre mot de passe">
                        <input class="green-button" type="submit" value="Envoyer" style="width: 50%;">
                    </form>
                </div>
                <div class="contact-right blur flex column align-center justify-center pd2">
                    <form class="contact-input justify-center flex align-center column pdv2" action="traitement_connexion.php" method="post">
                        <h2>CONNEXION</h2>
                        <input type="text" name="pseudo" id="" placeholder="Pseudo">
                        <input type="password" name="password1" placeholder="Mot de passe">
                        <input class="green-button" type="submit" value="Envoyer" style="width: 50%;">
                    </form>
                </div>

            </section>
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