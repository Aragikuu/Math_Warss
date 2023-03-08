@extends('layaout.plantilla')
<link rel="stylesheet" href="css/cartas/cartas.css">
@section('titulo','Calculo')
@section('contenido')

<div class="scene scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <h3>+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>Se suelta un globo de observación en un punto a 10 kilómetros de la estación que recibe su señal y se eleva verticalmente como se indica en la figura. Expresa la distancia 𝑑(ℎ) entre el globo y la estación de recepción como una función de la altitud ℎ del globo.</p>
      <img src="img/Ronda1/calculoD1.png" alt="">
      <button onclick="modal1()">Abrir</button>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3>+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>Determinar el rango de la función</p>
      <p>
        $$
        f(x)=〖2x〗^2
        $$
      </p>
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
      <p>Calcular el límite </p>
      <p>
      $$  
      lim┬(x→7)⁡〖(x^2-49)/(x-7)〗
      $$
      </p>
      <button onclick="modal3()">Abrir</button>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3>+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>Calcular f´(x) si</p>
      <p>
        $$
        f(x)=6√x+1/√x
        $$
      </p>
      <button onclick="modal4()">Abrir</button>
    </div>
  </div>

@endsection
@push('scripts')
<script src="js/categoria2/carta_g.js"></script>
<script src="js/ronda1/calculo.js"></script>
@endpush