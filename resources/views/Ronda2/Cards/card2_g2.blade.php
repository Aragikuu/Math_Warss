@extends('layaout.plantilla')
<link rel="stylesheet" href="css/cartas/cartas.css">
@section('titulo','Calculo')
@section('contenido')

<div class="scene scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">¿La siguiente gráfica representa una función?</p>
      <button class="btn-blanco" onclick="modal1()">Abrir</button>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Determina el dominio de la siguiente función</p>
      <p class="texto_pregunta">
        $$ f(x)=(x^3-2x^2)/(x-2) $$
      </p>
      <button class="btn-blanco" onclick="modal2()">Abrir</button>
    </div>
  </div>
</div>

<div class="scene2 scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">Calcular el límite</p>
      <p class="texto_pregunta">
        $$ lim┬(x→1)⁡〖(x^3-1)/(x-1)〗 $$
      </p>
      <button class="btn-blanco" onclick="modal3()">Abrir</button>
    </div>
  </div>

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">	Calcular $$ f'(a) $$ para la siguiente función</p>
      <p class="texto_pregunta">
        $$ f(x)=3x^2+4x+2 a=-1$$
      
      </p>
      <button class="btn-blanco" onclick="modal4()">Abrir</button>
    </div>
  </div>

@endsection
@push('scripts')
<script src="js/categoria2/carta_g.js"></script>
<script src="js/ronda2/calculo2.js"></script>
@endpush