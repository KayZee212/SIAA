let slideIndex = 1;
let slides = document.querySelectorAll('.slides');
const interval = 5000;
let intervalTimer;

showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    resetInterval();
    showSlides(slideIndex += n);
}

function showSlides(n) {
    let i;
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}

function resetInterval() {
    clearInterval(intervalTimer);
    intervalTimer = setInterval(() => {
        plusSlides(1);
    }, interval);
}

// Automatic slide change every 5 seconds
intervalTimer = setInterval(() => {
    plusSlides(1);
}, interval);
