let menu = document.querySelector('#bars');
let navbar = document.querySelector('.navbar');
// search 
let search = document.querySelector('#search-icon');
let input = document.querySelector('.search');


menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');

}

search.onclick = () => {
    search.classList.toggle('fa-times');
    input.classList.toggle('active');
}

var swiper = new Swiper(".home-slider", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true,
});



