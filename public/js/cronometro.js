let hours = 0;
let minutes = 0;
let seconds = 0;
let timer;

function startTimer() {
  timer = setInterval(incrementTimer, 1000);
}

function stopTimer() {
  clearInterval(timer);
}

function resetTimer() {
  clearInterval(timer);
  hours = 0;
  minutes = 0;
  seconds = 0;
  updateTimer();
}

function incrementTimer() {
  seconds++;
  if (seconds === 60) {
    seconds = 0;
    minutes++;
    if (minutes === 60) {
      minutes = 0;
      hours++;
    }
  }
  updateTimer();
}

function updateTimer() {
  document.getElementById("hours").innerText = padNumber(hours);
  document.getElementById("minutes").innerText = padNumber(minutes);
  document.getElementById("seconds").innerText = padNumber(seconds);
}

function padNumber(number) {
  // Esta función se utiliza para agregar un 0 delante del número si es menor que 10
  return (number < 10 ? "0" : "") + number;
}

const rulata = document.querySelector('.rulata');
const secciones = rulata.querySelectorAll('.seccion');

let posicion = 0;

rulata.addEventListener('wheel', (evento) => {
  posicion += evento.deltaY;
  posicion = Math.max(0, Math.min(posicion, secciones.length - 1));
  rulata.scrollTo({
    left: secciones[posicion].offsetLeft,
    behavior: 'smooth'
  });
});
