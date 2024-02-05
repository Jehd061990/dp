const carousel = document.getElementById("imageCarousel");
let currentIndex = 0;

function showImage(index) {
    const translateValue = -index * 100 + "%";
    carousel.style.transform = `translateX(${translateValue})`;
}

function nextImage() {
    currentIndex = (currentIndex + 1) % carousel.children.length;
    showImage(currentIndex);
}

function prevImage() {
    currentIndex =
        (currentIndex - 1 + carousel.children.length) %
        carousel.children.length;
    showImage(currentIndex);
}

setInterval(nextImage, 3000); // Change image every 3 seconds (adjust as needed)
