// see more feature
let see_more = document.querySelector('.more button');
let content = document.querySelectorAll('.sajan');
see_more.onclick = function () {
  content.forEach(x => x.classList.toggle('sajan'));
  if (content[0].classList.contains('sajan')) {
    see_more.innerHTML = 'see more';
  } else {
    see_more.innerHTML = 'show less';
  }
}

console.log(content)