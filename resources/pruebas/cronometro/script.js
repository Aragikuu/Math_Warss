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
