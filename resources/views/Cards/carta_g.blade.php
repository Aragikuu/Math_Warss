@extends('layaout.plantilla')
<link rel="stylesheet" href="css/cartas/cartas.css">
@section('titulo','Categoria 1')
@section('contenido')

<div class="scene scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <img src="img/alg.png" alt="">
      <h3>+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>Un terreno de forma cuadrada tiene un área de 196 m2. ¿Cuántos metros de tela de alambre tiene que comprar para poder cercar los cuatro lados?</p>
      
      <button id="modal1">
       Abrir
      </button>
      <div id="modal_container" class="modal-container">
        <div class="modal">
        </div>
      </div>

    </div>
  </div>



  <div class="card">
    <div class="card__face card__face--front">
      <img src="img/alg.png" alt="">
      <h3>+5</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>Un maestro carpintero y su ayudante trabajaron en una obra por seis días y ganaron $192. El maestro carpintero tiene un salario de $8 más por día que el de su ayudante. ¿Cuánto gana cada uno por día?</p>

      <button id="modal2">
       Abrir
      </button>
      <div id="modal_container" class="modal-container">
        <div class="modal">
        </div>
      </div>

    </div>
  </div>



  <div class="card">
    <div class="card__face card__face--front">
      <img src="img/alg.png" alt="">
      <h3>+50</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>El perímetro de un rectángulo es 34 metros y su área es de 60 m2. ¿Cuánto mide el lado más grande de este rectángulo?</p>
    </div>
  </div>



  <div class="card">
    <div class="card__face card__face--front">
      <img src="img/alg.png" alt="">
      <h3>+30</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>Si el cuadrado de un número positivo se disminuye en seis veces el número, el resultado es 27. Encontrar el número</p>
    </div>
  </div>
</div>

<div class="scene2 scene--card">
  <div class="card">
    <div class="card__face card__face--front">
      <img src="img/alg.png" alt="">
      <h3>+10</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>Paty tiene 49 años y su hija 7, ¿dentro de cuantos años la edad de Paty será tres veces mayor que la de su hija?</p>
      <div class="boton-modal">
        <label for="btn-modal"> Ver </label>
      </div>
    </div>
  </div>



  <div class="card">
    <div class="card__face card__face--front">
      <img src="img/alg.png" alt="">
      <h3>+25</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>Una tubería atraviesa diagonalmente un terreno de forma cuadrada. La tubería mide 30 m. ¿Cuál es la longitud, en metros, del lado del cuadrado? </p>
    </div>
  </div>



  <div class="card">
    <div class="card__face card__face--front">
      <img src="img/alg.png" alt="">
      <h3>+20</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>Una familia salió a las 9:30 am con rumbo al destino donde pasarían el fin de semana y llegaron a las 17:00 hrs del mismo día. Si el auto donde viajaban se desplazó a una velocidad constante de 95 km/h, ¿Cuántos kilómetros recorrió?</p>
    </div>
  </div>



  <div class="card">
    <div class="card__face card__face--front">
      <img src="img/alg.png" alt="">
      <h3>+15</h3>
    </div>
    <div class="card__face card__face--back">
      <h3>Pregunta</h3>
      <p>Para encontrar el valor de un artículo deportivo se debe multiplicar el valor del artículo por su mismo valor disminuido en ocho, y esto dará como resultado 48. Encuentre el valor del artículo.</p>
    </div>
  </div>
</div>

<!--Ventanas Modal1-->
<input type="checkbox" id="btn-modal" />
<div class="container-modal">
  <div class="content-modal">
    <h2>Respuesta</h2>
    <p class="tamaño">
    56 m
    </p>
    <div class="btn-cerrar">
      <label for="btn-modal">Cerrar</label>
    </div>
  </div>
  <label for="btn-modal" class="cerrar-modal"></label>
</div>



@endsection
@push('scripts')
<script src="js/categoria2/carta_g.js"></script>
<script src="js/modal.js"></script>
<script src="js/modal2.js"></script>
@endpush