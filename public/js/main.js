const contador = document.getElementById("contar");
const sumar = document.getElementById("incr");
const restar = document.getElementById("decr");
const reset = document.getElementById("reset");

let numero = 0;

sumar.addEventListener("click", ()=>{
    numero++;
    contador.innerHTML = numero;
});

restar.addEventListener("click", ()=>{

    if(numero==0){}
    else{
        numero--;
        contador.innerHTML = numero;
    }

});

reset.addEventListener("click", ()=>{
    numero = 0;
    contador.innerHTML = numero;
});

const contador2 = document.getElementById("contar2");
const sumar2 = document.getElementById("incr2");
const restar2 = document.getElementById("decr2");
const reset2 = document.getElementById("reset2");

let numero2 = 0;

sumar2.addEventListener("click", ()=>{
    numero2++;
    contador2.innerHTML = numero2;
});

restar2.addEventListener("click", ()=>{

    if(numero2==0){}
    else{
        numero2--;
        contador2.innerHTML = numero2;
    }

});

reset2.addEventListener("click", ()=>{
    numero2 = 0;
    contador2.innerHTML = numero2;
});

const contador3 = document.getElementById("contar3");
const sumar3 = document.getElementById("incr3");
const restar3 = document.getElementById("decr3");
const reset3 = document.getElementById("reset3");

let numero3 = 0;

sumar3.addEventListener("click", ()=>{
    numero3++;
    contador3.innerHTML = numero3;
});

restar3.addEventListener("click", ()=>{

    if(numero3==0){}
    else{
        numero3--;
        contador3.innerHTML = numero3;
    }

});

reset3.addEventListener("click", ()=>{
    numero3 = 0;
    contador3.innerHTML = numero3;
});

const contador4 = document.getElementById("contar4");
const sumar4 = document.getElementById("incr4");
const restar4 = document.getElementById("decr4");
const reset4 = document.getElementById("reset4");

let numero4 = 0;

sumar4.addEventListener("click", ()=>{
    numero4++;
    contador4.innerHTML = numero4;
});

restar4.addEventListener("click", ()=>{

    if(numero4==0){}
    else{
        numero4--;
        contador4.innerHTML = numero4;
    }

});

reset4.addEventListener("click", ()=>{
    numero4 = 0;
    contador4.innerHTML = numero4;
});

