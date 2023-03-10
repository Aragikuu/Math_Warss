@extends('layaout.plantilla')
<link rel="stylesheet" href="css/cartas/cartas.css">
@section('titulo','algebra')
@section('contenido')

<div class="scene scene--card">

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos" >+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Un terreno de forma cuadrada tiene un área de 196 m2. ¿Cuántos metros de tela de alambre tiene que comprar para poder cercar los cuatro lados?</p>
      <button class="btn-card" onclick="modal1()">Abrir</button>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+5</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Un maestro carpintero y su ayudante trabajaron en una obra por seis días y ganaron $192. El maestro carpintero tiene un salario de $8 más por día que el de su ayudante. ¿Cuánto gana cada uno por día?</p>
      <button class="btn-card" onclick="modal2()">Abrir</button>
    </div>
  </div>
</div>

<div class="scene2 scene--card">
  <div class="card" style="display:none;">
    <div class="card__face card__face--front">
      <h3 class="puntos" >+10</h3>

    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">El perímetro de un rectángulo es 34 metros y su área es de 60 m2. ¿Cuánto mide el lado más grande de este rectángulo?</p>
      <button class="btn-card" onclick="modal3()">Abrir</button>
    </div>
  </div>

  <div class="card" style="display:none;">
    <div class="card__face card__face--front">
      <h3 class="puntos" >+25</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Si el cuadrado de un número positivo se disminuye en seis veces el número, el resultado es 27. Encontrar el número.</p>
      <button class="btn-card" onclick="modal4()">Abrir</button>
    </div>
  </div>

</div>
@endsection
@push('scripts')
<script src="js/categoria2/carta_g.js"></script>
<script src="js/ronda1/algebra.js"></script>
@endpush