@extends('layaout.plantilla')
<link rel="stylesheet" href="css/cartas/cartas.css">
@section('titulo','Geometria y Trigonometria')
@section('contenido')
<div class="recent-orders">
  <h2>Geometría y trigonometría</h2>
</div>

<div class="scene scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">El tobogán de un parque mide 2.9 m y forma un ángulo de 40° con el suelo. ¿Qué altura (X), tendrá la escalerilla?</p>
      <img class="imageness" src="img/Ronda1/Geometria_1.png" alt="" srcset="">
      <button class="btn-card" onclick="modal1()">Abrir</button>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+20</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Se quiere fijar una antena con un cable, a 1.5m de su base y con un ángulo de 42°, ¿Cuál será la longitud del cable? </p>
      <img class="imageness" src="img/Ronda1/Geometria_2.png" alt="" srcset="">
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
      <p class="texto_pregunta">Los lados de un paralelogramo forman un ángulo de 70°. Sus medidas son 7 y 8 cm. 
        Calcula: a) La longitud de la diagonal menor, b) el área del paralelogramo
      </p>
      <img class="imageness" src="img/Ronda1/Geometria_3.png" alt="" srcset="">
      <button class="btn-card" onclick="modal3()">Abrir</button>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+100</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Utilizando identidades trigonométricas encuentra a que identidad corresponde la siguiente expresión:</p>
      <img class="imageness" src="img/Ronda1/Geometria_4.png" alt="" srcset="">
      <button class="btn-card" onclick="modal4()">Abrir</button>
      
    </div>
  </div>
</div>
@endsection
@push('scripts')
<script src="js/categoria2/carta_g.js"></script>
<script src="js/ronda1/geo_trigo.js"></script>
@endpush