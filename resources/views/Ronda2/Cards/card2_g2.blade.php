@extends('layaout.plantilla2')
<link rel="stylesheet" href="css/cartas/cartas.css">
@section('titulo','Calculo')
@section('contenido')
<div class="recent-orders">
  <h2>Cálculo Diferencial</h2>
</div>

<div class="scene scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">¿La siguiente gráfica representa una función?</p>
      <img class="imageness" src="img/Ronda2/calculo1.png" alt="" srcset="">
      <button class="btn-card" onclick="modal1()">Abrir</button>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+20</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Determina el dominio de la siguiente función</p>
      <img class="imageness" src="img/Ronda2/calculo2.png" alt="" srcset="">
      <button class="btn-card" onclick="modal2()">Abrir</button>
    </div>
  </div>
</div>

<div class="scene2 scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+50</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Calcular el límite</p>
      <img class="imageness" src="img/Ronda2/calculo3.png" alt="" srcset="">
      <button class="btn-card" onclick="modal3()">Abrir</button>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+100</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">	Calcular f'(a) para la siguiente función</p>
      <p class="texto_pregunta">
        $$ f(x)=3x^2+4x+2 a=-1$$
        $$ a=-1$$
      </p>
      <button class="btn-card" onclick="modal4()">Abrir</button>
    </div>
  </div>

@endsection
@push('scripts')
<script src="js/categoria2/carta_g.js"></script>
<script src="js/ronda2/calculo2.js"></script>
@endpush