@extends('layaout.plantilla')
<link rel="stylesheet" href="css/cartas/cartas.css">
@section('titulo','algebra')
@section('contenido')
<div class="recent-orders">
  <h2>Estabilidad de resultados de negociación</h2>

</div>
<div class="scene scene--card">

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos" >+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">A qué se refiere la estabilidad de los resultados de las negociaciones</p>
      <button class="btn-card" onclick="modal1()">Abrir</button>
    </div>
  </div>
  <!-- style="display:none" -->
  <div class="card" >
    <div class="card__face card__face--front">
      <h3 class="puntos">+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Que es la confianza</p>
      <button class="btn-card" onclick="modal2()">Abrir</button>
    </div>
  </div>
</div>

<div class="scene2 scene--card">
  <div class="card" >
    <div class="card__face card__face--front">
      <h3 class="puntos" >+10</h3>
      <!-- segun aqui habi un error
      <button class="btn-card" id="ocultarTarjeta1">Ocultar Tarjeta</button> -->
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Porque es recomendable que los acuerdos se documenten de manera clara y detallada por escrito</p>
      <button class="btn-card" onclick="modal3()">Abrir</button>
    </div>
  </div>

  <div class="card" >
    <div class="card__face card__face--front">
      <h3 class="puntos" >+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Porque los acuerdos estables tienden a reducir los conflictos posteriores</p>
      <button class="btn-card" onclick="modal4()">Abrir</button>
    </div>
  </div>

</div>
@endsection
@push('scripts')
<script src="js/categoria2/carta_g.js"></script>
<script src="js/ronda1/algebra.js"></script>
@endpush