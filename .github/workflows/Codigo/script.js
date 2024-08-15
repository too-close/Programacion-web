"use strict";
var button = document.getElementById('changeBackground');
function cambiacolor() {
    document.body.style.backgroundColor = 'pink';
}
button.addEventListener('click', cambiacolor);

document.getElementById('changeBackground').addEventListener('dbclick',() => { document.body.style.backgroundColor = 'mediumpurple'; } );
function bienvenido() {
    alert('Bienvenido a mi pagina web!!!');
}

function saludar(){
    alert ('Hola a todos...');
}
document.getElementById('btnAccion').onclick = saludar;

function resaltar (tipoEvento) {
    var evento = tipoEvento || window.Event;
    switch(evento.type) {
            case'mouseover':
            this.style.borderColor = 'lightgreen';
            break;
            case 'mouseout':
            this.style.borderColor = 'lightblue';
            break;
    }
}
window.onload = function() {
    document.getElementById('contenidoC').onmouseover = resaltar;
    document.getElementById('contenidoC').onmouseout= resaltar;
    bienvenido();
}