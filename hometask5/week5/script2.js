function change(event) {
  const image = event.currentTarget;

  const bigImage = document.querySelector("img");
  bigImage.src = image.src;
}

const listofImages = document.querySelectorAll('img');
for (let i = 0; i < listofImages.length; i++) {
      listofImages[i].addEventListener("click", change);
}