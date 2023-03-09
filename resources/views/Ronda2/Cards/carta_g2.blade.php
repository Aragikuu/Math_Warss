@extends('layaout.plantilla')
<link rel="stylesheet" href="css/cartas/cartas.css">
@section('titulo','algebra')
@section('contenido')

<div class="scene scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>Una familia salió a las 9:30 am con rumbo al destino donde pasarían el fin de semana y llegaron a las 17:00 hrs del mismo día. Si el auto donde viajaban se desplazó a una velocidad constante de 95 km/h, ¿Cuántos kilómetros recorrió?</p>
      <button onclick="modal1()">Abrir</button>
    </div>
  </div>



  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+5</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>Para encontrar el valor de un artículo deportivo se debe multiplicar el valor del artículo por su mismo valor disminuido en ocho, y esto dará como resultado 48. Encuentre el valor del artículo.</p>
      <button onclick="modal2()">Abrir</button>
    </div>
  </div>
</div>

<div class="scene2 scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>El dueño de un terreno cuadrado compra un predio rectangular adjunto con la misma medida de ancho y 24 m de largo. Si la superficie final que resulta de la unión de los dos terrenos es de 432 m2, ¿Cuál era el área, en m2, del terreno inicial?</p>
      <button onclick="modal3()">Abrir</button>
    </div>
  </div>



  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+25</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>La altura de un triángulo es menor 5 pulgadas que su base. Su área es de 42 pulgadas cuadradas. Encontrar la medida de la base del triángulo.</p>
      <button onclick="modal4()">Abrir</button>
    </div>
  </div>


@endsection
@push('scripts')
<script src="js/categoria2/carta_g.js"></script>
<script src="js/ronda2/algebra2.js"></script>
@endpush