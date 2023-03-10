var miRuleta = new Winwheel({
    numSegments: 5,
    outerRadius: 294,
    segments: [
        { fillStyle: "#f1c40f", text: "Àlgebra", textFillStyle: "#f1c40f"},
        { fillStyle: "#ce1919", text: "Càlculo Diferencial", textFillStyle: "#ce1919"},
        { fillStyle: "#e67e22", text: "Geometrìa y Trigonometrìa", textFillStyle: "#e67e22"},
        { fillStyle: "#0836bf", text: "Geometria Analìtica", textFillStyle: "#0836bf"},
        { fillStyle: "#8e44ad", text: "Estadìstica Descriptiva", textFillStyle: "#8e44ad"},
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
    if (SegmentoSeleccionado.text == "Àlgebra") {
        window.location.href = "cardo";
    }
    if (SegmentoSeleccionado.text == "Càlculo Diferencial") {
        window.location.href = "cardo2";
    }
    if (SegmentoSeleccionado.text == "Geometrìa y Trigonometrìa") {
        window.location.href = "cardo3";
    }
    if (SegmentoSeleccionado.text == "Geometria Analìtica") {
        window.location.href = "cardo4";
    }
    if (SegmentoSeleccionado.text == "Estadìstica Descriptiva") {
        window.location.href = "cardo5";
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