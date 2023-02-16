<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UTC</title>
    <script src="js/Winwheel.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/jQuery-2.1.4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="img/utc-log.png">
    <link rel="stylesheet" href="css/index.css">

</head>

<!--<body style="background-image: url(img/dia.png); background-size: 40% 80%;background-repeat: no-repeat;background-position-y: -8rem;background-position-x: 4rem;">-->

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <center>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <input type="button" value="Girar" onclick="miRuleta.startAnimation();" class="btn btn-warning btn-lg" style="width: 200px;margin-left: 0px;border: 2px solid #FFFFFF;border-radius: 20px;">
                </center>
                <br>
                <br>
            </div>
            <div class="col-md-6">
                <canvas id="canvas" height="600px" width="600px">
                </canvas>
            </div>
        </div>
    </div>



    <script>
        var miRuleta = new Winwheel({

            'numSegments': 5,
            'outerRadius': 270,
            'segments': [{
                    'fillStyle': '#f1c40f',
                    'text': 'Algebra'
                },
                {
                    'fillStyle': '#e01423',
                    'text': 'Calculo'
                },
                {
                    'fillStyle': '#23bb23',
                    'text': 'Pregunta 3'
                },
                {
                    'fillStyle': '#4fa1de',
                    'text': 'Pregunta 4'
                },
                {
                    'fillStyle': '#8e44ad',
                    'text': 'Pregunta 5'
                },

            ],
            'animation': {
                'type': 'spinToStop',
                'duration': 4,
                'callbackFinished': 'Mensaje()',
                'callbackAfter': 'dibujarIndicador()'
            }
        });

        dibujarIndicador();

        function Mensaje() {
            var SegmentoSeleccionado = miRuleta.getIndicatedSegment();
            if (SegmentoSeleccionado.text == "Pregunta 1") {
                $('#myModal1').modal({
                    backdrop: 'static'
                });
            }
            if (SegmentoSeleccionado.text == "Pregunta 2") {
                $('#myModal2').modal({
                    backdrop: 'static'
                });
            }
            if (SegmentoSeleccionado.text == "Pregunta 3") {
                $('#myModal3').modal({
                    backdrop: 'static'
                });
            }
            if (SegmentoSeleccionado.text == "Pregunta 4") {
                $('#myModal4').modal({
                    backdrop: 'static'
                });
            }
            if (SegmentoSeleccionado.text == "Pregunta 5") {
                $('#myModal5').modal({
                    backdrop: 'static'
                });
            }

            miRuleta.stopAnimation(false);
            miRuleta.rotationAngle = 0;
            miRuleta.draw();
            dibujarIndicador();
        }

        function dibujarIndicador() {
            var ctx = miRuleta.ctx;
            ctx.fillStyle = '#1f1f1f';
            ctx.lineWidth = 0;
            ctx.beginPath();
            ctx.moveTo(300, 0);
            ctx.lineTo(320, 0);
            ctx.lineTo(300, 40);
            ctx.lineTo(280, 0);
            ctx.stroke();
            ctx.fill();
        }
    </script>


    <!-- -->




    <!-- *********************** SCRIPTS *********************************-->
    <script src="js/bootstrap.js"></script>
    <!-- *********************** SCRIPTS *********************************-->
</body>

</html>