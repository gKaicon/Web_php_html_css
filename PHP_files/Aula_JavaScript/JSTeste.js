const ap1 = function alteraParagrafo() {
    let paragrafo1 = document.getElementById('p1');
        paragrafo1.style.backgroundColor = 'burlywood';
        paragrafo1.innerText = 'Primeiro parágrafo com alteração pelo onclick na tag';
}

const ap2 = function altera2Paragrafo() {
    let paragrafo2 = document.getElementById('p2');
        paragrafo2.style.backgroundColor = 'burlywood';
        paragrafo2.innerText = 'Segundo parágrafo com alteração pelo onclick na tag';
}
const a9 = function Ajuda() {
    window.alert(
        '\nO botão Altera Paragrafo altera o primeiro paragrafo'+
        '\nAo passar o Mouse em cima do primeiro paragrafo ele fica vermelho');
}
function DestacaTermo1() {
    let paragrafo1 = document.getElementById('p1');
    let paragrafo2 = document.getElementById('p2');
        paragrafo1.style.backgroundColor= 'red';
        paragrafo1.style.textAlign = 'left';
        paragrafo2.style.backgroundColor= 'burlywood';
        paragrafo2.style.textAlign = 'center';
}

function DestacaTermo2() {
    let paragrafo1 = document.getElementById('p1');
    let paragrafo2 = document.getElementById('p2');
        paragrafo2.style.backgroundColor= 'blue';
        paragrafo2.style.textAlign = 'left';
        paragrafo1.style.backgroundColor= 'burlywood';
        paragrafo1.style.textAlign = 'center';
}

function a1(x, y) {
    window.alert((x * y));
}

window.addEventListener('load', function(){
    let btn1 = document.getElementById('btn1');
    let btn2 = document.getElementById('btn2');
    let btn3 = document.getElementById('btn3');
    let btn4 = document.getElementById('btn4');

    btn1.addEventListener('click', function() {
        let paragrafo1 = document.getElementById('p1');
            paragrafo1.style.backgroundColor = 'burlywood';
            paragrafo1.innerText = ('Primeiro parágrafo Modificado pelo AddEventListenner');
    });

    btn2.addEventListener('click', function() {    
        let paragrafo2 = document.getElementById('p2');
            paragrafo2.style.backgroundColor = 'burlywood';
            paragrafo2.innerText = ('Segundo parágrafo Modificado pelo AddEventListenner');
    });

    btn3.addEventListener('click', function() {
        window.alert(
            '\nO botão Altera Paragrafo altera o primeiro paragrafo'+
            '\nAo passar o Mouse em cima do primeiro paragrafo ele fica vermelho'+
            '\nModificado pelo AddEventListenner');
    });
    btn4.addEventListener('click', function() { 
        (a1(21, 8));
    });
});