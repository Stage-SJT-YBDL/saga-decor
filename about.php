<?php
 include('header.php');
?>
<main>
    <section class="about">
        <div class="flex align-center justify-center">
            <img class="fusion" src="./assets/media/img/home/fusion.png" alt="Logo fusion">
        </div>
    </section>
    <section class="sec">
        <img class="logo-fusion flex justify-center" src="./assets/media/img/header/logo1.png" alt="Logo Pôle décor">
        <p>
            Pôle Décor est une entité qui réunit Saga Décor et Charantaise, deux entreprises spécialisées dans la décoration de bouteilles. Ils offrent des services de satinage et de laquage de bouteilles, permettant ainsi de créer des designs uniques et attrayants.
            <br><br>
            Saga Décor est réputée pour son expertise dans la décoration de bouteilles, notamment en terme de sérigraphie, laquage et métalisation. La société Charentaise de Décor quant à elle s'est spécialisée dans le satinage de haute qualité.
            
        </p>
    </section>
    <section class="bg-dark-aqua">
        <div class="transparent-black-box flex justify-center align-center ">
            <h2 class="color-white newH1">Chronologie</h2>
        </div>
    </section>
    <div class="space1-5"></div>
    <section class="flex column justify-center align-center mgh2">
        <div class="slider">
            <img src="./assets/media/img/Slider/Qui_Sommes_Nous/1.png" alt="1" id="slideImg" class="slide">
        </div>
        <div class="timeline-container">
            <div class="timeline">
                <div class="point" data-label="Création de Saga décor"></div>
                <div class="point" data-label="Produit phare"></div>
                <div class="point" data-label="Expansion internationale"></div>
                <div class="point" data-label="Nouvelle ère"></div>
            </div>
        </div>
    </section>
    <div class="space1-5"></div>
    <section class="bg-light-gray flex justify-center pdv2">
        <h1 class="newH1 color-red" id="chiffres-title">L'entreprise en chiffre</h1>
    </section>
    <section class="chiffres">
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
            <h1 class="newH1">Nos partenaires</h1>
        </div>
    </section>
    <section class="marquee">
        <div class="partenaires flex">
            <img src="./assets/media/img/sagadecor/logo-perrier-jouet.png" alt="Logo partenaire">
            <img src="./assets/media/img/sagadecor/Mamont-Tusk-Vodka-Saga-Decor-Logo.png" alt="Logo partenaire">
            <img src="./assets/media/img/sagadecor/Pernod-Absinthe-Saga-decor-logo-e1443537430713.png" alt="Logo partenaire">
            <img src="./assets/media/img/sagadecor/Bains-Whisky-Saga-Decor-Logo.png" alt="Logo partenaire">
            <img src="./assets/media/img/sagadecor/logo-emile-noel.png" alt="Logo partenaire">
            <img src="./assets/media/img/sagadecor/logo-evian.png" alt="Logo partenaire">
            <img src="./assets/media/img/sagadecor/logo-grand-marnier.png" alt="Logo partenaire">
            <img src="./assets/media/img/sagadecor/logo-hennessy.png" alt="Logo partenaire">
            <img src="./assets/media/img/sagadecor/logo-loic-raison.png" alt="Logo partenaire">
            <img src="./assets/media/img/sagadecor/logo-martell.png" alt="Logo partenaire">
        </div>
    </section>
</main>
<script async src="assets/JS/about.js"></script>
<?php
  include('footer.php');
?>