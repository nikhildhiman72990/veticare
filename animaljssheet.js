// Simple image carousel for gallery section
let currentIndex = 0;

function showNextImage() {
    const images = document.querySelectorAll('.gallery-item img');
    images[currentIndex].style.opacity = 0;
    currentIndex = (currentIndex + 1) % images.length;
    images[currentIndex].style.opacity = 1;
}

document.addEventListener('DOMContentLoaded', () => {
    // Initialize carousel
    const images = document.querySelectorAll('.gallery-item img');
    images.forEach((img, index) => {
        if (index !== 0) img.style.opacity = 0;
    });

    setInterval(showNextImage, 3000);  // Change image every 3 seconds
});
