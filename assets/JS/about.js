let slideImg = ["./assets/media/img/Slider/Qui_Sommes_Nous/1.png", "./assets/media/img/Slider/Qui_Sommes_Nous/2.png", "./assets/media/img/Slider/Qui_Sommes_Nous/3.png"];
let slideIndex = 0;
let fadeEffect = true;
// Initialise le diaporama
showSlides(slideIndex);

// Définit un intervalle pour passer automatiquement aux diapositives
let slideInterval = setInterval(plusSlides, 1000); // Change toutes les 3 secondes

function plusSlides() {
    // Mettre à jour slideIndex avant de l'utiliser dans showSlides
    slideIndex = (slideIndex + 1) % slideImg.length;
    showSlides(slideIndex);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let img = document.getElementById("slideImg");

    // Mettre à jour slideIndex ici pour refléter l'index de l'image à afficher
    slideIndex = n;
    img.style.transition = fadeEffect ? "opacity 2s ease-in" : "transform 2s ease-in";
    if (fadeEffect) {
        img.style.opacity = "0";
    } else {
        // img.style.transform = "translateX(-100%)";
    }
    setTimeout(function() {

        if (fadeEffect) {
            // img.style.transform = "rotateY(180deg)";
            img.style.transition = "transform 2s";
            img.src = slideImg[slideIndex];
            img.style.opacity = "1";
            setTimeout(function() {
                img.style.opacity = "1";
                img.style.transform = "none";
            }, 500); // Attend 1 seconde pour le fondu
        } else {
            // img.style.transform = "translateX(0)";
        }
        fadeEffect = !fadeEffect;
    }, 500); // Attend 1 seconde pour le fondu
}

// function rotateOrDiagonal() {
//     let img = document.getElementById("slideImg");
//     // Ajoutez ici la logique pour choisir entre une rotation et un déplacement diagonal
//     img.style.transform = "rotate(45deg)"; // Exemple de rotation
//     // Ou
//     img.style.transform = "translate(100px, 100px)"; // Exemple de déplacement diagonal
// }
