let slideImg = ["./assets/media/img/Slider/Qui_Sommes_Nous/1.png", "./assets/media/img/Slider/Qui_Sommes_Nous/2.png", "./assets/media/img/Slider/Qui_Sommes_Nous/3.png"];
let slideIndex = 0;

// Initialise le diaporama
showSlides(slideIndex);


let slideInterval = setInterval(plusSlides, 3000); // Change toutes les 3 secondes

function plusSlides() {
    slideIndex = (slideIndex + 1) % slideImg.length;
    showSlides(slideIndex);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let img = document.getElementById("slideImg");
    slideIndex = n;
    img.style.transition = "opacity 1s ease-in-out";

    let nextIndex = (slideIndex + 1) % slideImg.length;
    let nextImg = new Image();
    nextImg.src = slideImg[nextIndex];
    
    if (slideIndex === 0) {
        img.style.opacity = "1";
    } else {
        img.style.opacity = "0";
        img.addEventListener("transitionend", function() {
            img.src = slideImg[slideIndex];
            img.style.opacity = "1";
        }, { once: true }); 
    }
}


document.addEventListener("DOMContentLoaded", function() {
    showSlides(0); 
});