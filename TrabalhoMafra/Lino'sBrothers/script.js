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

  imgs.style.transform = `translateX(${-idx * 268}px)`;
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

//carrinho de compras
function acaoFazerPedido() {
  let x = document.querySelectorAll('button[class="btn btn-small"]');
  x.forEach(element => {
    element.addEventListener('click', function(e) {
      //alert(e.target.getAttribute("data-name"));
      //alert(e.target.getAttribute("data-preco"));
      let tr = document.createElement('tr');
      let td1 = document.createElement('td');
      let td2 = document.createElement('td');
      let td3 = document.createElement('td');
      td1.innerText = e.target.getAttribute("data-name");
      td2.innerText = e.target.getAttribute("data-preco");
      td3.innerHTML = '<button onclick = "deleteLinha(event)"> - </button>'
      tr.append(td1, td2, td3);
      document.querySelector('table').append(tr);
      alert('Produto inserido, caso queira remover clique no icone cinza com um menos (-) dentro');
    } );
  });
}
acaoFazerPedido();

function deleteLinha(e) {
  e.target.parentElement.parentElement.remove()
  alert('Item removido');
}

function acaoFinalizarPedido() {
  let x = document.querySelectorAll('button[class="botao_Final"]');
  x.forEach(element => {
    element.addEventListener('click', function(e) {
      alert('Compra finalizada, pague e retire seus itens no caixa')
      window.location.href = "index.html";
    });
  });
}
acaoFinalizarPedido();