// Valeurs du groupe

let vignets = document.querySelectorAll(".vignets");
const section = document.querySelector(".valors");
Array.from(vignets).forEach(vignet => {
    vignet.classList.remove("vignets");
});
function valors(){
    Array.from(vignets).forEach(vignet => {
        vignet.classList.add("vignets");
    });
}

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            valors();
            observer.unobserve(section);
        }
    });
});
observer.observe(section);

// Balayage

let act1 = document.querySelector('.act1');
let act2 = document.querySelector('.act2');
let act3 = document.querySelector('.act3');
let act4 = document.querySelector('.act4');