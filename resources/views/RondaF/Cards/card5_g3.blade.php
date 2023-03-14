@extends('layaout.plantilla3')
<link rel="stylesheet" href="css/cartas/cartas.css">
@section('titulo','Categoria 5')
@section('contenido')
<div class="recent-orders">
  <h2>Estadística Descriptiva</h2>
</div>

<div class="scene scene--card">

  <div class="card" >
    <div class="card__face card__face--front">
      <h3 class="puntos" >+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">En una clínica infantil se ha ido anotando, durante un mes, el número de metros que cada niño anda, seguido y sin caerse, el primer día que comienza a caminar, obteniéndose la tabla de información adjunta. Hallar la varianza y desviación estándar:</p>
      <button class="btn-card" onclick="modal1()">Abrir</button>
      <button class="btn-card" onclick="modal1r1()">Imagen</button>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+20</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta2">Se ha realizado una encuesta en 30 hogares en la que se les pregunta el N.º de individuos que conviven en el domicilio habitualmente. Las respuestas obtenidas han sido las siguientes:
      4, 4, 1, 3, 5, 3, 2, 4, 1, 6, 2, 3, 4, 5, 5, 6, 2, 3, 3, 2, 2, 1, 8, 3, 5, 3, 4, 7, 2, 3.
      ¿Qué proporción de hogares está compuesto por tres o menos personas? 
      </p>
      <button class="btn-card" onclick="modal2()">Abrir</button>
    </div>
  </div>
</div>

<div class="scene2 scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos" >+50</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">De los siguientes datos encuentre la media, moda y mediana </p>
      <img class="imageness" src="img/Ronda3/estadistica3.png" alt="">
      <button class="btn-card" onclick="modal3()">Abrir</button>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos" >+100</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Encuentre la varianza y el coeficiente de variación de la siguiente tabla</p>
      <img class="imageness" src="img/Ronda3/estadistica4.png" alt="">
      <button class="btn-card" onclick="modal4()">Abrir</button>
    </div>
  </div>

</div>

@endsection
@push('scripts')
<script src="js/categoria2/carta_g.js"></script>
<script src="js/ronda3/estadistica3.js"></script>
@endpush