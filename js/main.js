let carousel = document.querySelector(".carousel");
let carouselLeftBtn = document.querySelector(".carouselContainer > button.left");
let carouselRightBtn = document.querySelector(".carouselContainer > button.right");
let carouselIndex = 0;
let carouselSize = 18;

function moveCarouselForward(){
    carouselIndex += 1;
    if (carouselIndex > carouselSize - 1) {
        carouselIndex = 0;
    }
    if(carouselIndex < 0){
        carouselIndex = carouselSize - 1;
    }
    carousel.style["transform"] = `translateX(-${carouselIndex * 100}%)`;
}

let carouselInterval = setInterval(moveCarouselForward, 3000);

carouselLeftBtn.addEventListener("mousedown", () => {
    clearInterval(carouselInterval);
    carouselIndex -= 2;
    moveCarouselForward();
    carouselInterval = setInterval(moveCarouselForward, 3000);
})

carouselRightBtn.addEventListener("mousedown", () => {
    clearInterval(carouselInterval);
    moveCarouselForward();
    carouselInterval = setInterval(moveCarouselForward, 3000);
})