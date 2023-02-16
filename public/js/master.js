var miRuleta = new Winwheel({
    numSegments: 5,
    outerRadius: 270,
    segments: [
        {
            fillStyle: "#f1c40f",
            text: "Algebra",
        },
        {
            fillStyle: "#e01423",
            text: "Calculo",
        },
        {
            fillStyle: "#23bb23",
            text: "Pregunta 3",
        },
        {
            fillStyle: "#4fa1de",
            text: "Pregunta 4",
        },
        {
            fillStyle: "#8e44ad",
            text: "Pregunta 5",
        },
    ],
    animation: {
        type: "spinToStop",
        duration: 4,
        callbackFinished: "Mensaje()",
        callbackAfter: "dibujarIndicador()",
    },
});

dibujarIndicador();

function Mensaje() {
    var SegmentoSeleccionado = miRuleta.getIndicatedSegment();
    if (SegmentoSeleccionado.text == "Pregunta 1") {
        $("#myModal1").modal({
            backdrop: "static",
        });
    }
    if (SegmentoSeleccionado.text == "Pregunta 2") {
        $("#myModal2").modal({
            backdrop: "static",
        });
    }
    if (SegmentoSeleccionado.text == "Pregunta 3") {
        $("#myModal3").modal({
            backdrop: "static",
        });
    }
    if (SegmentoSeleccionado.text == "Pregunta 4") {
        $("#myModal4").modal({
            backdrop: "static",
        });
    }
    if (SegmentoSeleccionado.text == "Pregunta 5") {
        $("#myModal5").modal({
            backdrop: "static",
        });
    }

    miRuleta.stopAnimation(false);
    miRuleta.rotationAngle = 0;
    miRuleta.draw();
    dibujarIndicador();
}

function dibujarIndicador() {
    var ctx = miRuleta.ctx;
    ctx.fillStyle = "#0ecef0";
    ctx.lineWidth = 0;
    ctx.beginPath();
    ctx.lineTo(350, 0);
    ctx.lineTo(300, 60);
    ctx.lineTo(250, 0);
    ctx.stroke();
    ctx.fill();
}
