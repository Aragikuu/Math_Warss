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
      <p class="texto_pregunta">Hallar la ecuación de la circunferencia con radio 5 y cuyo centro está en C(0,-3)
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
      <p class="texto_pregunta">Hallar la ecuación de la parábola con vértice en el origen y cuya directriz es: y-5=0</p>
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
      <p class="texto_pregunta">	Encontrar la intersección de las siguientes rectas: x+y=5,    3x-y=1</p>
      <button class="btn-blanco" onclick="modal3()">Abrir</button>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+100</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">	Dada la siguiente ecuación $$x^2-10x-12y+13=0$$ encontrar: el vértice, el foco, y la directriz de la parábola.</p>
     
      <button class="btn-blanco" onclick="modal4()">Abrir</button>
    </div>
  </div>
@endsection
@push('scripts')
<script src="js/categoria2/carta_g.js"></script>
<script src="js/ronda2/geo_anal2.js"></script>
@endpush