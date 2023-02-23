<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel="icon" type="image/png" href="img/utc-log.png">
    <title>Plantilla</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- inicio de los links -->
    <link rel='stylesheet' type='text/css' media='screen' href='css/main2.css'>
    <!-- fin de los inks -->
</head>

<body>

    <div class="color"><!-- inico de la barra de navegacion -->
        <span  class="active" style="--clr:#1dd1a1;" onclick="changColor ('#1dd1a1')"></span>
        <span style="--clr:#ff6b6b;" onclick="changColor ('#ff6b6b')"><a href="in2">O</a></span>
        <span style="--clr:#2e86de;" onclick="changColor ('#2e86de')"><a href="in2">O</a></span>
        <span style="--clr:#f368c0;" onclick="changColor ('#f368c0')"><a href="in2">O</a></span>
        <span style="--clr:#ff9f43;" onclick="changColor ('#ff9f43')"><a href="in2">O</a></span>
    </div><!-- fin de la barra de navegacion -->

    <div class="contenedor">
        @yield('contenido')<!-- acapones los contenidos  -->
    </div>
    <!-- inico de los js -->
    @yield('script')
    <script src="js/script.js"></script>
    <!-- fin de los js -->
</body>
<!-- algebra geometria y trigonometra geometria analitica precalculo estadistica deciptiba -->

</html>