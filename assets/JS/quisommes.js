const slider = [];
let num = 0;

async function newSlide(sens) {
    num=num + sens;
    if (num < 0) {
        num = slider.length - 1;
    } else if (num > slider.length -1) {
        num = 0;
    }
    document.getElementById("slideimg").src=slider[num];
    setInterval(() => newSlide(1), 10000)
}