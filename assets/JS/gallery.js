// Déclaration des variables globales
let num = 0;
let isTransitioning = false;

// Sources des images pour chaque "étape" du slider
const slider = ["./assets/media/img/sagadecor/Mamont.png", "./assets/media/img/sagadecor/martell.png", "./assets/media/img/sagadecor/Belle-Epoque.png"];
const slider2 = ["./assets/media/img/sagadecor/martell.png", "./assets/media/img/sagadecor/Belle-Epoque.png", "./assets/media/img/sagadecor/Mamont.png"];
const slider3 = ["./assets/media/img/sagadecor/Belle-Epoque.png", "./assets/media/img/sagadecor/Mamont.png", "./assets/media/img/sagadecor/martell.png"];

async function changeSlide(direction) {
    // Empêche les transitions simultanées
    if (isTransitioning) return;
    isTransitioning = true;

    // Sélectionne toutes les images dans le slider
    const images = document.querySelectorAll(".galleryslide img");
    // Calcule le nouvel index de l'image, en bouclant si nécessaire
    const nextNum = (num + direction + slider.length) % slider.length;

    // Mise à jour des sources des images pour la prochaine position
    images[0].src = slider[nextNum];
    images[1].src = slider2[nextNum];
    images[2].src = slider3[nextNum];

    // Attends un court moment pour laisser les images se charger avant d'appliquer les transitions
    await new Promise(resolve => setTimeout(resolve, 100));

    // Applique la transition pour chaque image
    images.forEach((image, index) => {
        // Initialise la transformation pour animer le déplacement
        image.style.transition = 'transform 0.5s ease-in-out';
        image.style.transform = `translateX(${direction === 1 ? '-' : ''}100%)`;
    });

    // Attend que la transition soit terminée
    await new Promise(resolve => setTimeout(resolve, 500));

    // Réinitialise les propriétés de style pour chaque image après la transition
    images.forEach((image) => {
        image.style.transition = 'none';
        image.style.transform = 'translateX(0)';
    });

    // Réautorise les transitions après un bref délai
    await new Promise(resolve => setTimeout(resolve, 50));
    isTransitioning = false;
    num = nextNum;
}