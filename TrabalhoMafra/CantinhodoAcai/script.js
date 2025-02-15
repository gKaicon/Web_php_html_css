const navbarToggler = document.querySelector(".navbar__top--toggler");
const navbarCollapse = document.querySelector(".navbar__collapse");
const imgs = document.querySelector("#img");
const img = document.querySelectorAll("#img img");

navbarToggler.addEventListener("click", () => {
  navbarToggler.classList.toggle("change");
  navbarCollapse.classList.toggle("show__nav");
});

let idx = 0;

function carrossel() {
  idx++;

  if (idx > img.length - 1) {
    idx = 0;
  };

  imgs.style.transform = `translateX(${-idx * 335}px)`;
};

setInterval (carrossel, 3000);

//script do botao flutuante
function scrollToTop() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
}

window.addEventListener('scroll', () => {
  const floatingButton = document.querySelector('.floating-button');
  if (window.scrollY > 100) {
      floatingButton.style.display = 'block';
  } else {
      floatingButton.style.display = 'none';
  }
});