<?php
 include('header.php');
?>
<main>
    <section class="main-pg sec1 flex column align-start justify-around">   
        <div class="title1 newH1">
            <h2>GALERIE</h2>
        </div>
        <div class="pd2 align-center  flex justify-between color-white" style="width: 100%;">
            <div class="div2 text-center column align-start">
                <p>Laquage</p>
                <p>Pose d'accessoires</p>
            </div> 
            <button class="square-btn blur-btn">Nos Prestations</button>
            <div class="div3 text-center column  flex justify-between">
                <p>Satinage</p>
                <p>Sérigraphie</p>
            </div>  
        </div>
    </section>
    <section class="sec2 flex align-center">
        <div class="pubgalerie flex justify-between align-center pdh2">
            <div class="white-stripe"></div>
            <p class="newH1 color-white">Gal<span class="color-black">e</span>rie</p>
            <div class="white-stripe"></div>
        </div>
    </section>
    <!-- Article -->

    <section class="gallery">
        <article class="flex column align-center">
            <div class="gallery-odd flex justify-between align-end">
                <div class="chevron chevron-left">
                    <button class="btn" id="prev-btn" onclick="changeSlide(1)">&lt;</button>
                </div>
                <div class="galleryslide">
                    <img class="glr-minia" src="./assets/media/img/sagadecor/Mamont.png" alt="" id="change">
                    <img class="glr1" src="./assets/media/img/sagadecor/martell.png" alt="Bouteille en laquage" id="change2">
                    <img class="glr-minia" src="./assets/media/img/sagadecor/Belle-Epoque.png" alt="" id="change3">
                </div>
                <div class="chevron chevron-right">
                    <button class="btn" id="next-btn" onclick="changeSlide(-1)">&gt;</button>
                </div>
            </div>
        </article>
    </section>
</main>
<script src="assets/JS/gallery.js"></script>
<?php
 include('footer.php');
?>