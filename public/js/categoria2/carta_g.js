var cards = document.querySelectorAll('.card');

[...cards].forEach((card)=>{
  card.addEventListener( 'click', function() {
    card.classList.toggle('is-flipped');
  });
});

var botonOcultar = document.getElementById("ocultarTarjeta");
var tarjeta = document.querySelector(".card");

botonOcultar.addEventListener("click", function() {
  tarjeta.style.display = "none";
});
