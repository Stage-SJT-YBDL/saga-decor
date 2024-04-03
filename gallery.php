<?php
 include('header.php');
?>
<main>
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
            <div class="minia-container flex">
                <img class="minia" src="./assets/media/img/accueil2/v6.png" alt="">
                <!-- <img class="minia" src="./assets/media/img/sagadecor/Belle-Epoque.png" alt="">
                <img class="minia" src="./assets/media/img/sagadecor/martell.png" alt="">
                <img class="minia" src="./assets/media/img/sagadecor/Mamont.png" alt=""> -->
            </div>
        </article>
    </section>
</main>
<script src="assets/JS/gallery.js"></script>
<?php
 include('footer.php');
?>