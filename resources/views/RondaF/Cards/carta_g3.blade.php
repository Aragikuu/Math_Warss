@extends('layaout.plantilla3')
<link rel="stylesheet" href="css/cartas/cartas.css">
@section('titulo','algebra')
@section('contenido')
<div class="recent-orders">
  <h2>Álgebra</h2>
</div>

<div class="scene scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos" >+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Un comerciante tiene $500.00 y desea adquirir 20 artículos entre botellas de aceites (a) y botellas de insecticidas (i), si el costo de cada botella de aceite es de $18.00 y de cada botella de insecticida es de $42.00, el sistema de ecuaciones que representa dicho problema es:</p>
      <button class="btn-card" onclick="modal1()">Abrir</button>
    </div>
  </div>

 

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+20</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Roberto compró 6 kg de tomate y 3 kg de frijol y pagó $183.00; mientras que su vecina compró 4 kg de frijol y 2 kg de tomate y pagó $142.00, ¿Cuál es el precio del kilogramo de frijol?</p>
      <button class="btn-card" onclick="modal2()">Abrir</button>
    </div>
  </div>
</div>

<div class="scene2 scene--card">
  <div class="card" style="display:none">
    <div class="card__face card__face--front">
      <h3 class="puntos" >+50</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">La velocidad constante de un globo aerostático es de (x+5) kilómetros por hora. ¿Cuánto tiempo tardará en recorrer (x2 + 6x + 5) kilómetros?</p>
      <button class="btn-card" onclick="modal3()">Abrir</button>
    </div>
  </div>



  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos" >+100</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Halla un número entero sabiendo que la suma con su inverso es   26/5</p>
      <button class="btn-card" onclick="modal4()">Abrir</button>
    </div>
  </div>

</div>
@endsection
@push('scripts')
<script src="js/categoria2/carta_g.js"></script>
<script src="js/ronda3/algebra3.js"></script>
@endpush