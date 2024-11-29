const image = document.getElementById('dvd-image');

let posX = 100;
let posY = 100;
let velX = 3;
let velY = 3;  

function moveImage() {

    const windowWidth = window.innerWidth;
    const windowHeight = window.innerHeight;

    posX += velX;
    posY += velY;

    if (posX <= 0 || posX >= windowWidth - image.clientWidth) velX *= -1;
    if (posY <= 0 || posY >= windowHeight - image.clientHeight) velY *= -1;

    image.style.left = `${posX}px`;
    image.style.top = `${posY}px`;

    requestAnimationFrame(moveImage);
}

moveImage();
