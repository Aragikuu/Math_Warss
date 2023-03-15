@extends('layaout.plantilla')
<link rel="stylesheet" href="css/cartas/cartas.css">
@section('titulo','Categoria 4')
@section('contenido')
<div class="recent-orders">
  <h2>Geometría Analítica</h2>
</div>

<div class="scene scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Hallar la ecuación de la recta que pasa por (-1,1) y (4,3).</p>
      <button class="btn-card" onclick="modal1()">Abrir</button>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+20</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">	Hallar el centro y radio de la circunferencia: </p>
      <p class="texto_pregunta">
        $$
        x^2+y^2-10x+10y+14=0
        $$
      </p>
      <button class="btn-card" onclick="modal2()">Abrir</button>
    </div>
  </div>
</div>

<div class="scene2 scene--card">
  <div class="card" style="display:none">
    <div class="card__face card__face--front">
      <h3 class="puntos">+50</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">	Encontrar la ecuación de la recta que pasa por (-2,4) y es paralela a 2x+3y-4=0.</p>
      
      <!-- <img class="imageness" src="img/Ronda1/calculoD1.png" alt="" srcset=""> -->
      <button class="btn-card" onclick="modal3()">Abrir</button>
    </div>
  </div>

  <div class="card" style="display:none">
    <div class="card__face card__face--front">
      <h3 class="puntos">+100</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Encontrar la ecuación general de la parábola que tiene su vértice en (1,2) y su directriz 
        x-4=0
      </p>
      
      <button class="btn-card" onclick="modal4()">Abrir</button>
    </div>
  </div> 

  @endsection
  @push('scripts')
  <script src="js/categoria2/carta_g.js"></script>
  <script src="js/ronda1/geo_anal.js"></script>
  @endpush