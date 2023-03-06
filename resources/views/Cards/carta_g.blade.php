@extends('layaout.plantilla')
<link rel="stylesheet" href="css/cartas/cartas.css">
@section('titulo','Categoria 1')
@section('contenido')
<div class="scene scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <img src="img/card.png" alt="">
      <h3>+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>¿que es algebra?</p>
      <div class="boton-modal">
        <label for="btn-modal"> Ver </label>
      </div>
    </div>
  </div>
</div>

<div class="scene scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <img src="img/card.png" alt="">
      <h3>+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>¿que es algebra?</p>
    </div>
  </div>
</div>

<div class="scene scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <img src="img/card.png" alt="">
      <h3>+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>¿que es algebra?</p>
    </div>
  </div>
</div>

<div class="scene scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <img src="img/card.png" alt="">
      <h3>+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>¿que es algebra?</p>
    </div>
  </div>
</div>
<!--Ventanas Modal-->
<input type="checkbox" id="btn-modal" />
<div class="container-modal">
  <div class="content-modal">
    <h2>¿que es algebra?</h2>
    <p class="tamaño">
      2+2=?
    </p>
    <div class="btn-cerrar">
      <label for="btn-modal">Cerrar</label>
    </div>
    <div class="btn-respuesta">
      <label for="btn-modal">respuesta</label>
    </div>
  </div>
  <label for="btn-modal" class="cerrar-modal"></label>
</div>
@endsection
@push('scripts')
<script src="js/categoria2/carta_g.js"></script>
@endpush