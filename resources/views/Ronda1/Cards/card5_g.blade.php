@extends('layaout.plantilla')
<link rel="stylesheet" href="css/cartas/cartas.css">
@section('titulo','Categoria 5')
@section('contenido')

<div class="scene scene--card">

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos" >+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Hallar la media geométrica de los números 3.00 y 6.00.</p>
      <button class="btn-card" onclick="modal1()">Abrir</button>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+5</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Dados los conjuntos 2, 5, 8, 11, 14 y 2, 8, 14, encontrar: a) la media de cada conjunto, b) la varianza de cada conjunto</p>
      <button class="btn-card" onclick="modal2()">Abrir</button>
    </div>
  </div>
</div>

<div class="scene2 scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos" >+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Encontrar el rango de los conjuntos: a) 5, 3, 8, 4, 7, 6, 12, 4, 3 y b) 8.772, 6.453, 10.624, 8.628, 9.434, 6.351</p>
      <button class="btn-card" onclick="modal3()">Abrir</button>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos" >+25</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Si 5, 8, 6 y 2 se presentan con frecuencias 3, 2, 4 y 1, respectivamente, su media aritmética es</p>
      <button class="btn-card" onclick="modal4()">Abrir</button>
    </div>
  </div>

</div>

@endsection
@push('scripts')
<script src="js/categoria2/carta_g.js"></script>
<script src="js/ronda1/estadistica.js"></script>
@endpush