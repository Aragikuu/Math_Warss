var miRuleta = new Winwheel({
    numSegments: 5,
    outerRadius: 294,
    segments: [
        { fillStyle: "#f1c40f", text: "" },
        { fillStyle: "#2ecc71", text: "" },
        { fillStyle: "#e67e22", text: "" },
        { fillStyle: "#e74c3c", text: "" },
        { fillStyle: "#8e44ad", text: "" },
    ],
    animation: {
        type: "spinToStop",
        duration: 6,
        callbackFinished: "Mensaje()",
        callbackAfter: "dibujarIndicador()",
    },
});

function girar() {
    // código para girar la ruleta y seleccionar un resultado
    var resultado = "Página de destino";
    document.getElementById("resultado").innerHTML = resultado;

    // redirigir a la otra página
    window.location.href = "otra_pagina.html";
}

dibujarIndicador();
function Mensaje() {
    var SegmentoSeleccionado = miRuleta.getIndicatedSegment();
    alert("TOCO :  " + SegmentoSeleccionado.text);
    if (SegmentoSeleccionado.text == "cardo") {
        window.location.href = "cardo";
    }
    if (SegmentoSeleccionado.text == "cardo") {
        window.location.href = "cardo";
    }
    if (SegmentoSeleccionado.text == "cardo") {
        window.location.href = "cardo";
    }
    if (SegmentoSeleccionado.text == "cardo") {
        window.location.href = "cardo";
    }
    if (SegmentoSeleccionado.text == "cardo") {
        window.location.href = "cardo";
    }


    miRuleta.stopAnimation(false);
    miRuleta.rotationAngle = 0;
    miRuleta.draw();
    dibujarIndicador();
}
function dibujarIndicador() {
    var ctx = miRuleta.ctx;
    ctx.strokeStyle = "navy";
    ctx.fillStyle = "#fff";
    ctx.lineWidth = 2;
    ctx.beginPath();
    ctx.moveTo(300, 0);
    ctx.lineTo(320, 0);
    ctx.lineTo(300, 40);
    ctx.lineTo(280, 0);
    ctx.stroke();
    ctx.fill();
}

function redireccion() {
    location.href = "cardo";
}
function redireccion2() {
    location.href = "cardo2";
}
function redireccion3() {
    location.href = "cardo3";
}
function redireccion4() {
    location.href = "cardo4";
}
function redireccion5() {
    location.href = "cardo5";
}

//ronda 2
function redireccion1_2() {
    location.href = "cardo";
}
function redireccion2_2() {
    location.href = "cardo2";
}
function redireccion3_2() {
    location.href = "cardo3";
}
function redireccion4_2() {
    location.href = "cardo4";
}
function redireccion5_2() {
    location.href = "cardo5";
}
