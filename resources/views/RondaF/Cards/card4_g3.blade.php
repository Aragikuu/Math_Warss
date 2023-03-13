@extends('layaout.plantilla')
<link rel="stylesheet" href="css/cartas/cartas.css">
@section('titulo','Categoria 4')
@section('contenido')

<div class="scene scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">	Hallar el foco y la directriz de la siguiente parábola: $$2x^2+16y=0$$
      </p>
      <button class="btn-blanco" onclick="modal1()">Abrir</button>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+20</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Hallar vértices, focos y excentricidad de la elipse  $$9x^2+25y^2-225=0 $$</p>
      <button class="btn-blanco" onclick="modal2()">Abrir</button>
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
      <p class="texto_pregunta">Encontrar la ecuación de la elipse con centro(-2,3), un foco en (-2,8) y excentricidad de $$5/7$$</p>
      <button class="btn-blanco" onclick="modal3()">Abrir</button>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+100</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Los vértices de una elipse son los puntos (1,-6) y (9,-6) la longitud de cada lado recto  es 9/2. Hallar la ecuación general de la elipse.</p>
      <button class="btn-blanco" onclick="modal4()">Abrir</button>
    </div>
  </div>

@endsection
@push('scripts')
<script src="js/categoria2/carta_g.js"></script>
<script src="js/ronda3/geo_anal3.js"></script>
@endpush