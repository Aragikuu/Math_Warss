@extends('layaout.plantilla2')
<link rel="stylesheet" href="css/cartas/cartas.css">
@section('titulo','Categoria 5')
@section('contenido')

<div class="scene scene--card">

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos" >+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta2">Un científico mide diez veces el diámetro de un cilindro y obtiene los valores 3.88, 4.09, 3.92, 3.97, 4.02, 3.95, 4.03, 3.92, 3.98 y 4.06 centímetros (cm). Hallar la media aritmética de estas mediciones.1.	Un científico mide diez veces el diámetro de un cilindro y obtiene los valores 3.88, 4.09, 3.92, 3.97, 4.02, 3.95, 4.03, 3.92, 3.98 y 4.06 centímetros (cm). Hallar la media aritmética de estas mediciones.</p>
      <button class="btn-card" onclick="modal1()">Abrir</button>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+20</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">De 100 números, 20 fueron 4, 40 fueron 5, 30 fueron 6 y los restantes fueron 7. Encuéntrese la media aritmética de estos números.</p>
      <button class="btn-card" onclick="modal2()">Abrir</button>
    </div>
  </div>
</div>

<div class="scene2 scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos" >+50</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Los valores del pH sanguíneo de 32 individuos se presentan a continuación, agrupar los datos en 5 intervalos y confeccionar la tabla de frecuencias.</p>
      <button class="btn-card" onclick="modal3()">Abrir</button>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos" >+100</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Calcula la media aritmética del siguiente conjunto de datos ordenados</p>
      <button class="btn-card" onclick="modal4()">Abrir</button>
    </div>
  </div>

</div>

@endsection
@push('scripts')
<script src="js/categoria2/carta_g.js"></script>
<script src="js/ronda2/estadistica2.js"></script>
@endpush