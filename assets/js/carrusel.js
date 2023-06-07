var carousel = document.querySelector('.carousel');
var images = carousel.getElementsByTagName('img');
var currentIndex = 0;

function showImage(index) {
  for (var i = 0; i < images.length; i++) {
    images[i].style.display = 'none';
  }
  images[index].style.display = 'block';
}

function nextImage() {
  currentIndex++;
  if (currentIndex >= images.length) {
    currentIndex = 0;
  }
  showImage(currentIndex);
}

setInterval(nextImage, 3000); // Cambia la imagen cada 3 segundos

showImage(currentIndex);
