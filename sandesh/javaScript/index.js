let menubar = document.getElementById('bars');
let nav = document.querySelector('.nav');
let account = document.querySelector('.account');

menubar.onclick = function () {
  menubar.classList.toggle('fa-times');
  nav.classList.toggle('active');
  account.classList.toggle('active');
}

window.addEventListener('load', function () {
  // for swiper
  var swiper = new Swiper(".home-slider", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 4500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop: true,
  });

  // second for updating dishes
  let see_more = document.querySelector('.more button');
  let content = document.querySelectorAll('.sajan');

  see_more.onclick = function () {
    content.forEach(x => x.classList.toggle('sajan'));  // first it remove teh class name sajan and then undo it
    if (content[0].classList.contains('sajan')) {
      see_more.innerHTML = 'see more';
    } else {
      see_more.innerHTML = 'show less';
    }
  }
})

// requesting dishes from the server
let container = document.querySelector('.box-container');
let request = new XMLHttpRequest();
request.open('GET', 'php/index-data.php', true);
request.onload = function () {
  if (request.readyState === XMLHttpRequest.DONE) {
    if (request.status === 200) {
      let data = request.responseText;
      container.innerHTML = data;
    }
  }
}
request.send();

// requesting for home page
let container2 = document.querySelector('.wrapper');
let request2 = new XMLHttpRequest();
request2.open('GET', 'php/home-data.php', true);
request2.onload = function () {
  if (request2.readyState === XMLHttpRequest.DONE) {
    if (request.status === 200) {
      let data2 = request2.responseText;
      container2.innerHTML = data2;
    }
  }
}
request2.send();







