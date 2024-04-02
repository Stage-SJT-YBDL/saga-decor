<?php
 include('header.php');
?>
<main>
    <section class="about">
        <div>
            <video id="vid" src="./assets/media/vid/qsn.mp4" style="width: 100%;" autoplay muted loop></video>
        </div>
    </section>
    <section class="bg-dark-aqua">
        <div class="transparent-black-box flex justify-center align-center ">
            <h2 class="color-white newH1">Chronologie</h2>
        </div>
        <div class="flex justify-center align-center pdv2">
            <h2 class="color-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
        </div>
    </section>
    <div class="space1-5"></div>
    <section class="flex justify-center mgh2">
        <div class="slider">
            <img src="./assets/media/img/Slider/Qui_Sommes_Nous/1.png" alt="1" id="slideImg" class="slide">
        </div>
    </section>
    <section class="flex justify-center mgh2">
        <div class="space1"></div>
            <input type="radio" class="radio-color-transparent" checked>
            <input type="radio" class="radio-color-dark-blue" checked>
            <input type="radio" class="radio-color-transparent" checked>
    </section>
    <div class="space1-5"></div>
    <section class="offices">
        <div class="transparent-black-box blur flex justify-center align-center color-white">
            <p class="newH1">
                <strong>N</strong>os locaux
            </p>
        </div>
    </section>
    <section class="bg-light-gray flex justify-center pdv2">
        <h1 class="newH1 color-dark-aqua">L'entreprise en chiffre</h1>
    </section>
    <section class="bg-dark-aqua">
        <div class="flex justify-around align-center pdv2">
            <div class="flex column justify-around align-center">
                <p class="white-title">80</p>
                <p class="black-p">Collaborateurs</p>
                <img class="white-icons" src="assets/media/img/Qui_Sommes_Nous/profil.svg" alt="icone profil">
            </div>
            <div class="flex column justify-around align-center">
                <p class="white-title">30 min</p>
                <p class="black-p">De Charles de Gaules</p>
                <img class="white-icons" src="assets/media/img/Qui_Sommes_Nous/plane-solid.svg" alt="icone avion">
            </div>
            <div class="flex column justify-around align-center">
                <p class="white-title">11500m2</p>
                <p class="black-p">D'usine</p>
                <img class="white-icons" src="assets/media/img/Qui_Sommes_Nous/building-solid.svg" alt="icone building">
            </div>
        </div>
        <div class="transparent-black-box blur flex justify-center align-center color-white">
            <h1 class="newH1">La Production</h1>
        </div>
    </section>

    <section>
        <div class="flex justify-center align-center">
            <div class="image-container">
                <img class="about-article" src="./assets/media/img/Entreprise/about1.webp" alt="image production 1">
                <div class=" flex justify-center align-center">
                    <p>
                        "Notre ligne de production avancée intègre des machines de pointe pour le soufflage et le formage du verre,
                         garantissant une précision et une qualité inégalées dans la création de chaque bouteille décorée."
                    </p>
                </div>
            </div>
            <div class="image-container">
                <img class="about-article" src="./assets/media/img/Entreprise/about2.webp" alt="image production 2">
                <div class="flex justify-center align-center">
                    <p>
                        "Au cœur de notre atelier, des artisans expérimentés
                        et des machines de décoration travaillent de concert pour appliquer
                        des motifs uniques sur chaque bouteille,
                        fusionnant art traditionnel et innovation technologique."
                    </p>
                </div>
            </div>
        </div>
        <div class="flex justify-center align-center">
            <div class="image-container">
                <img class="about-article" src="./assets/media/img/Entreprise/about3.webp" alt="image production 3">
                <div class="flex justify-center align-center">
                    <p>
                        "Notre processus de contrôle qualité utilise des technologies
                        de pointe pour inspecter minutieusement chaque bouteille décorée,
                        assurant que seuls les produits répondant à nos standards élevés atteignent nos clients."
                    </p>
                </div>
            </div>
            <div class="image-container">
                <img class="about-article" src="./assets/media/img/Entreprise/about4.webp" alt="image production 4">
                <div class="flex justify-center align-center">
                    <p>
                        "La phase finale de notre chaîne de production
                        implique un système d'emballage automatisé et hautement efficace,
                        veillant à ce que chaque bouteille décorée soit prête pour la distribution,
                        tout en maintenant l'intégrité et l'esthétique du produit."
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
<script async src="assets/JS/about.js"></script>
<?php
  include('footer.php');
?>