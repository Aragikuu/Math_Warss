<!DOCTYPE html5>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="img/utc-log.png">
  @yield('css')
  <title>UTC</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
  <!--de esta pagina toman los iconos https://fonts.google.com/icons?icon.platform=web&icon.set=Material+Icons&icon.style=Sharp
   los iconos tienen que ser icon y sharp para que tomen las propiedades de la pagina lo que tienen que copiar es (images/loque se copea.png)
  si quieren probar cualquier icono la sintaxis es
  <span class="material-icons-sharp">
    nombre en ingles
  </span>-->
  <link rel="stylesheet" href="css/style.css">
  <!-- aqui ya finaliza el token de vue -->
</head>

<body>
  <div class="container"><!--inicio del contenedor-->
    <aside> <!--Inicio de la barra de navegacion-->
      <div class="top">
        <div class="logo">
          <img src="img/utc-log.png" alt="">
          <h2>ADM-<span class="danger">UTC</span></h2>
        </div>
        <div class="close" id="close-btn">
          <span class="material-icons-sharp">
            close
          </span>
        </div>
      </div>

    </aside><!--fin de la barra de navegacion-->
    <main>
      <!-- Desde aqui puedes poner todo el contenido a mostrar de cada uno de los modulos -->
      @yield('contenido')
      <!--!!!!Apartir de aca ya no puden poner tablas y lo demas¡¡¡¡¡-->
    </main>
    <div class="relog">
            <div class="timer">
                <div id="hours">00</div>
                <div>:</div>
                <div id="minutes">00</div>
                <div>:</div>
                <div id="seconds">00</div>
            </div>

            <button class="inicio" id="start" onclick="startTimer()">Start</button>
            <button class="alto" id="stop" onclick="stopTimer()">Stop</button>
            <button class="iniciar" id="reset" onclick="resetTimer()">Reset</button>
        </div>
  </div> <!--fin delconotenedor-->
  @stack('scripts')
  <script src="js/cronometro.js"></script>
  <script src="js/script.js"></script>
</body>
@yield('js')
</html>