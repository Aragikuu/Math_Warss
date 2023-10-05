@extends('layaout.plantilla')
<link rel="stylesheet" href="css/cartas/cartas.css">
@section('titulo','Calculo')
@section('contenido')
<div class="recent-orders">
  <h2>Lineamientos para llevar negociaciones</h2>
</div>

<div class="scene scene--card">
  <div class="card" >
    <div class="card__face card__face--front">
      <h3 class="puntos">+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Menciona las 3 preguntas a realizar para saber conocer nuestras alternativas</p>

      <button class="btn-card" onclick="modal1()">Abrir</button>
      <!-- <button class="btn-card" onclick="modalRes()">Imagen</button> -->
    </div>
  </div>

  <div class="card" >
    <div class="card__face card__face--front">
      <h3 class="puntos">+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Cuál es la clave del éxito de la negociación</p>
      <!-- <p class="texto_pregunta">
        $$
        f(x)=2x^2
        $$
      </p> -->
      <button class="btn-card" onclick="modal2()">Abrir</button>
    </div>
  </div>
</div>

<div class="scene2 scene--card">
  <div class="card" >
    <div class="card__face card__face--front" >
      <h3 class="puntos">+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Cuál es la importancia de conocer mis intereses y descubrir los del negociador </p>
      <!-- <img class="imageness" src="img/Ronda1/calculo3.png" alt="" srcset=""> -->
      <button class="btn-card" onclick="modal3()">Abrir</button>
    </div>
  </div>

  <div class="card" >
    <div class="card__face card__face--front">
      <h3 class="puntos">+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta"> Que implican los procesos de negociación</p>
      <!-- <img class="imageness" src="img/Ronda1/calculo4.png" alt="" srcset=""> -->
      <button class="btn-card" onclick="modal4()">Abrir</button>
    </div>
  </div>
@endsection
@push('scripts')
<script src="js/categoria2/carta_g.js"></script>
<script src="js/ronda1/calculo.js"></script>
@endpush