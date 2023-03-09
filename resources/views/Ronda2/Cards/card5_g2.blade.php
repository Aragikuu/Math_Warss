@extends('layaout.plantilla')
<link rel="stylesheet" href="css/cartas/cartas.css">
@section('titulo','Categoria 5')
@section('contenido')

<div class="scene scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <img src="img/geoA.jpg" alt="">
      <h3>+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>¿que es algebra?</p>
    </div>
  </div>


  <div class="scene scene--card">
    <div class="card">
      <div class="card__face card__face--front">
        <img src="img/geoA.jpg" alt="">
        <h3>+10</h3>
      </div>
      <div class="card__face card__face--back">
        <h3>Pregunta</h3>
        <p>¿que es algebra?</p>
      </div>
    </div>
  </div>

</div>

<div class="scene2 scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <img src="img/geoA.jpg" alt="">
      <h3>+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>¿que es algebra?</p>
    </div>
  </div>


  <div class="scene scene--card">
    <div class="card">
      <div class="card__face card__face--front">
        <img src="img/geoA.jpg" alt="">
        <h3>+10</h3>
      </div>
      <div class="card__face card__face--back">
        <h3>Pregunta</h3>
        <p>¿que es algebra?</p>
      </div>
    </div>
  </div>
</div>



@endsection
@push('scripts')
<script src="js/categoria2/carta_g.js"></script>
@endpush