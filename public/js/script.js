
// barra navegacion click
function changColor(color){
    document.body.style.background = color;

    document.querySelectorAll('span').forEach(function
    (item){
        item.classList.remove('active');
    })
    event.target.classList.add('active');
}
// fin de la barra nacvegacion clik
//inicon de la ruleta
const roulette = document.querySelector("#roulette");
const spinButton = document.querySelector("#spin");
const resetButton = document.querySelector("#reset");

const maxSpins = 10;
const minSpins = 1;

const maxDegrees = 360;
const minDegrees = 1;

const getRandomNumber = (min, max) => {
    return Math.round(Math.random() * (max - min) + min);
};

spinButton.addEventListener("click", () => {
    const spins = getRandomNumber(minSpins, maxSpins);
    const degrees = getRandomNumber(minDegrees, maxDegrees);

    const fullSpins = (spins - 1) * 360;
    const spin = fullSpins + degrees;

    const animationTime = spins;

    roulette.style.transform = `rotate(${spin}deg)`;
    roulette.style.transitionDuration = `${animationTime}s`;

    spinButton.style.display = "none";
    resetButton.style.display = "inline-block";
});

resetButton.addEventListener("click", () => {
    roulette.style.transform = "rotate(0deg)";
    roulette.style.transitionDuration = "2s";
    spinButton.style.display = "inline-block";
    resetButton.style.display = "none";
    roulette.numSegments = "5";
});
//fin de la ruleta