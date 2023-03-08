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
      <p>María y Pedro se encuentran a ambos lados de la orilla de un río en los puntos A y B. ¿Qué anchura tiene el río?</p>
      <button onclick="modal1()">Abrir</button>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3>+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>Halla el área comprendida entre un pentágono regular de 20 cm de perímetro y su circunferencia circunscrita.</p>
      <button onclick="modal2()">Abrir</button>
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
      <p>En un triángulo rectángulo, los catetos miden 6 y 8 cm. Calcula la medida de la altura sobre la hipotenusa y la distancia desde su pie hasta los extremos.</p>
      <button onclick="modal3()">Abrir</button>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3>+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>Dos edificios distan entre sí 150 m. Desde un punto que está entre los dos edificios, las visuales a los puntos más altos de éstos forman con la horizontal ángulos de 35° y 20°, respectivamente. Halla la altura de los edificios, si sabemos que los dos miden lo mismo.</p>
      <button onclick="modal4()">Abrir</button>
    </div>
  </div>
</div>
@endsection
@push('scripts')
<script src="js/categoria2/carta_g.js"></script>
<script src="js/ronda2/geo_trigo2.js"></script>
@endpush