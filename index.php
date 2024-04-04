<?php
include('header.php');
?>
<main>
    <section class="home flex column justify-center align-center">
        <h1 class="home-title newH1 appear title-box flex column align-center">
            <p class="color-white">Pôle Décor</p>
        </h1>
        <div id="valor" class="valors">
            <div class="valor-container flex align-center justify-between">
                <h1 class="valor-h1">Valeurs du groupe</h1>
                <div class="vignets flex column align-center" id="vignet1">
                    <img  src="./assets/media/img/home/Design sans titre(1).png" alt="icône valeur 1">
                    <p>La responsabilisation et le sens du résultat</p>
                </div>
                <div class="vignets flex column align-center" id="vignet2">
                    <img  src="./assets/media/img/home/Design_sans_titre.png" alt="icône valeur 2">
                    <p>Le respect des personnes et de l'environnement</p>
                </div>
                <div class="vignets flex column align-center" id="vignet3">
                    <img  src="./assets/media/img/home/Design_sans_titre_1.png" alt="icône valeur 3">
                    <p>L'attention portée au client</p>
                </div>
            </div>
        </div>
    </section>
  
    <div class="activities-title">
        <div class="title">
            <h1 class="newH1 flex justify-center align-center color-white">Nos activités</h1>
        </div>
    </div>
    <section class="activities flex column justify-center align-center">
        <div class="flex justify-center align-center">
            <div class="act1 flex column align-center justify-center color-white">
                <h2 id="ttl1" class="act-ttl1">Sérigraphie</h2>
                <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores,
                repudiandae architecto nulla illo itaque commodi vitae placeat,
                temporibus sapiente consequuntur ea repellat voluptatem nostrum, ipsam dicta.
                </p>
                <button class="square-orange-button" style="width: 150px;">Voir</button>
            </div>
            <div id="act2" class="act2 flex column align-center justify-center color-white">
                <h2 class="act-ttl1">Laquage</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores,
                    repudiandae architecto nulla illo itaque commodi vitae placeat,
                    temporibus sapiente consequuntur ea repellat voluptatem nostrum, ipsam dicta.
                </p>
                <button class="square-orange-button" style="width: 150px;">Voir</button>
            </div>
        </div>
        <div class="flex">
            <div id="act3" class="act3 flex column align-center justify-center color-white">
                  <h2 class="act-ttl1">Satinage</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores,
                    repudiandae architecto nulla illo itaque commodi vitae placeat,
                    temporibus sapiente consequuntur ea repellat voluptatem nostrum, ipsam dicta.
                </p>
                <button class="square-orange-button" style="width: 150px;">Voir</button>
            </div>
            <div class="act4 flex column align-center justify-center color-white">
                <h2 class="act-ttl1">Accessoires</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores,
                    repudiandae architecto nulla illo itaque commodi vitae placeat,
                    temporibus sapiente consequuntur ea repellat voluptatem nostrum, ipsam dicta.
                </p>
                <button class="square-orange-button" style="width: 150px;">Voir</button>
            </div>
        </div>
        <div class="act5 flex column align-center justify-center color-white">
            <h2 class="act-ttl1">Métallisation</h2>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores,
                repudiandae architecto nulla illo itaque commodi vitae placeat,
                temporibus sapiente consequuntur ea repellat voluptatem nostrum, ipsam dicta.
            </p>
            <button class="square-orange-button" style="width: 180px;">Voir</button>
        </div>
    </section>
</main>
<script async src="assets/JS/index.js"></script>    
<?php
 include('footer.php');
?>