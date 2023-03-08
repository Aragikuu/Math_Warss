var miRuleta = new Winwheel({

    'numSegments' : 5,
    'outerRadius' : 270,
    'segments':[
        {'fillStyle': '#f1c40f', 'text': 'Pregunta 1'},
        {'fillStyle': '#2ecc71', 'text': 'Pregunta 2'},
        {'fillStyle': '#e67e22', 'text': 'Pregunta 3'},
        {'fillStyle': '#e74c3c', 'text': 'Pregunta 4'},
        {'fillStyle': '#8e44ad', 'text': 'Pregunta 5'},

    ],
    'animation':{
        'type':'spinToStop',
        'duration': 6,
        'callbackFinished':'Mensaje()',
        'callbackAfter':'dibujarIndicador()'
    }
});

dibujarIndicador();
function Mensaje() {
    var SegmentoSeleccionado = miRuleta.getIndicatedSegment();
    alert("TOCO :  " + SegmentoSeleccionado.text);
    if(SegmentoSeleccionado.text == "Pregunta 1"){
        $('#myModal1').modal({backdrop:'static'});
    }
    if(SegmentoSeleccionado.text == "Pregunta 2"){
        $('#myModal2').modal({backdrop:'static'});
    }
    if(SegmentoSeleccionado.text == "Pregunta 3"){
        $('#myModal3').modal({backdrop:'static'});
    }
    if(SegmentoSeleccionado.text == "Pregunta 4"){
        $('#myModal4').modal({backdrop:'static'});
    }
    if(SegmentoSeleccionado.text == "Pregunta 5"){
        $('#myModal5').modal({backdrop:'static'});
    }

    miRuleta.stopAnimation(false);
    miRuleta.rotationAngle = 0;
    miRuleta.draw();
    dibujarIndicador();
}
function dibujarIndicador() {
    var ctx = miRuleta.ctx;
    ctx.strokeStyle = 'navy';
    ctx.fillStyle = '#fff';
    ctx.lineWidth = 2;
    ctx.beginPath();
    ctx.moveTo(300,0);
    ctx.lineTo(320,0);
    ctx.lineTo(300,40);
    ctx.lineTo(280,0);
    ctx.stroke();
    ctx.fill();
}

function redireccion(){
    location.href ="cardo"
}
function redireccion2(){
    location.href ="cardo2"
}
function redireccion3(){
    location.href ="cardo3"
}
function redireccion4(){
    location.href ="cardo4"
}
function redireccion5(){
    location.href ="cardo5"
}

//ronda 2
function redireccion1_2(){
    location.href ="cardo"
}
function redireccion2_2(){
    location.href ="cardo2"
}
function redireccion3_2(){
    location.href ="cardo3"
}
function redireccion4_2(){
    location.href ="cardo4"
}
function redireccion5_2(){
    location.href ="cardo5"
}