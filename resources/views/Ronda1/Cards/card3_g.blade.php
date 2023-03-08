@extends('layaout.plantilla')
<link rel="stylesheet" href="css/cartas/cartas.css">
@section('titulo','Geometria y Trigonometria')
@section('contenido')

<div class="scene scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <h3>+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>El tobogán de un parque mide 2.9 m y forma un ángulo de 40° con el suelo. ¿Qué altura (X), tendrá la escalerilla?</p>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3>+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>Se quiere fijar una antena con un cable, a 1.5m de su base y con un ángulo de 42°, ¿Cuál será la longitud del cable? </p>
    </div>
  </div>
</div>

<div class="scene2 scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <h3>+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>Los lados de un paralelogramo forman un ángulo de 70°. Sus medidas son 7 y 8 cm. 
        Calcula: a) La longitud de la diagonal menor, b) el área del paralelogramo
      </p>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3>+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>Utilizando identidades trigonométricas encuentra a que identidad corresponde la siguiente expresión:</p>
    </div>
  </div>
</div>
@endsection
@push('scripts')
<script src="js/categoria2/carta_g.js"></script>
@endpush