let slideIndex = 1;

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    const slides = document.querySelectorAll('[data-slide]');

    if (n > slides.length) {
        slideIndex = 1;
    }

    if (n < 1) {
        slideIndex = slides.length;
    }

    // Hide all slides
    slides.forEach(slide => {
        slide.classList.add('hidden');
        slide.classList.remove('block');
    });

    slides[slideIndex - 1].classList.remove('hidden');
    slides[slideIndex - 1].classList.add('block');
}

document.addEventListener('DOMContentLoaded', () => {
    showSlides(slideIndex);
});

window.plusSlides = plusSlides;
