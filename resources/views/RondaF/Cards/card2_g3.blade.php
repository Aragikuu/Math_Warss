@extends('layaout.plantilla3')
<link rel="stylesheet" href="css/cartas/cartas.css">
@section('titulo','Calculo')
@section('contenido')
<div class="recent-orders">
  <h2>Cálculo Diferencial</h2>
</div>

<div class="scene scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta2">Una jugadora de voleibol realiza un pase a su compañera, el balón fue lanzado verticalmente para tener tiempo a reubicarse, de acuerdo a los especialistas, el balón subió de acuerdo a la función f(t)=18t-3t^2, siendo 𝑡 el tiempo en segundos y f(t) la altura en metros.
                                En un intervalo de [0,6] ¿En qué tiempo alcanza la altura máxima?
      </p>
      <button class="btn-card" onclick="modal1()">Abrir</button>
    </div>
  </div>
 
  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+20</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Expresión algebraica que representa la siguiente función</p>
      <img class="imageness" src="img/Ronda3/calculo2.png" alt="" srcset="">
      <button class="btn-card" onclick="modal2()">Abrir</button>
    </div>
  </div>
</div>

<div class="scene2 scene--card">
  <div class="card" style="display:none">
    <div class="card__face card__face--front">
      <h3 class="puntos">+50</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Determinar el dominio y rango de la siguiente función f(x)</p>
      <img class="imageness" src="img/Ronda3/calculo3.png" alt="" srcset="">
      <button class="btn-card" onclick="modal3()">Abrir</button>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+100</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Calcular f´(x) si</p>
      <p class="texto_pregunta">
        $$
        f(x)=x^4∙sen(x)
        $$
      </p>
      <button class="btn-card" onclick="modal4()">Abrir</button>
    </div>
  </div>

@endsection
@push('scripts')
<script src="js/categoria2/carta_g.js"></script>
<script src="js/ronda3/calculo3.js"></script>
@endpush