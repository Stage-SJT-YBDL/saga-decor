let num = 0;
let isTransitioning = false;

const slider = ["./assets/media/img/sagadecor/Mamont.png", "./assets/media/img/sagadecor/martell.png", "./assets/media/img/sagadecor/Belle-Epoque.png"];
const slider2 = ["./assets/media/img/sagadecor/martell.png", "./assets/media/img/sagadecor/Belle-Epoque.png", "./assets/media/img/sagadecor/Mamont.png"];
const slider3 = ["./assets/media/img/sagadecor/Belle-Epoque.png", "./assets/media/img/sagadecor/Mamont.png", "./assets/media/img/sagadecor/martell.png"];

async function changeSlide(sens) {
    if (isTransitioning) return;
    isTransitioning = true;

    const images = document.querySelectorAll(".galleryslide img");
    const nextNum = (num + sens + slider.length) % slider.length;
    const direction = sens === 1 ? "right" : "left";

    images.forEach((image, index) => {
        const translateValue = index === 0 ? `translateX(${direction === "left" ? "-" : ""}100%)` : index === 1 ? `translateX(${direction === "left" ? "-" : ""}200%)` : `translateX(${direction === "left" ? "-" : ""}300%)`;
        const opacity = index === 2 ? 0 : 1;

        image.style.transition = "transform .5s, opacity .5s";
        image.style.transform = translateValue;
        image.style.opacity = opacity;
    });

    await new Promise(resolve => setTimeout(resolve, 400));

    images.forEach((image, index) => {
        image.src = index === 0 ? slider[nextNum] : index === 1 ? slider2[nextNum] : slider3[nextNum];
    });

    await new Promise(resolve => setTimeout(resolve, 50));

    images.forEach((image, index) => {
        image.style.transition = "transform .5s, opacity .5s";
        image.style.transform = "translateX(0)";
        image.style.opacity = 1;
    });

    await new Promise(resolve => setTimeout(resolve, 400));

    isTransitioning = false;
    num = nextNum;
}