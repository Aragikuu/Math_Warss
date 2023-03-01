let container = document.querySelector(".container");
let btn = document.getElementById("spin");
let number = Math.ceil(Math.random() * 1000);

btn.onclick = function () {
	container.style.transform = "rotate(" + number + "deg)";
	number += Math.ceil(Math.random() * 1000);
}

//funcion navegador
function changColor(color){
    document.body.style.background = color;

    document.querySelectorAll('span').forEach(function
    (item){
        item.classList.remove('active');
    })
    event.target.classList.add('active');
}