var miRuleta = new Winwheel({
    numSegments: 5,
    outerRadius: 294,
    segments: [
        { fillStyle: "#f1c40f", text: "1", textFillStyle: "#f1c40f"},
        { fillStyle: "#2ecc71", text: "2", textFillStyle: "#2ecc71"},
        { fillStyle: "#e67e22", text: "3", textFillStyle: "#e67e22"},
        { fillStyle: "#e74c3c", text: "4", textFillStyle: "#e74c3c"},
        { fillStyle: "#8e44ad", text: "5", textFillStyle: "#8e44ad"},
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
    if (SegmentoSeleccionado.text == "1") {
        window.location.href = "cardo1_2";
    }
    if (SegmentoSeleccionado.text == "2") {
        window.location.href = "cardo2_2";
    }
    if (SegmentoSeleccionado.text == "3") {
        window.location.href = "cardo3_2";
    }
    if (SegmentoSeleccionado.text == "4") {
        window.location.href = "cardo4_2";
    }
    if (SegmentoSeleccionado.text == "5") {
        window.location.href = "cardo5_2";
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