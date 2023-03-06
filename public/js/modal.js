const open = document.getElementById('open');
const modal_container = document.getElementById('modal_container');
const close = document.getElementById('close');

open.addEventListener('click', () => {
  modal_container.classList.add('show');  
});

close.addEventListener('click', () => {
  modal_container.classList.remove('show');
});

let p = document.getElementById("foo"); // Encuentra el elemento "p" en el sitio
  p.onclick = muestraAlerta; // Agrega función onclick al elemento
    
  function muestraAlerta(evento) {
    alert("Evento onclick ejecutado!");
  }