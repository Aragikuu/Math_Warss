@extends('layaout.plantilla')
<link rel="stylesheet" href="css/cartas/cartas.css">

@section('titulo','Calculo')
@section('contenido')



<div class="scene scene--card">
    
@foreach($algebra as $row)

  <div class="card">
    <div class="card__face card__face--front">
      <h3 class="puntos">{{$row->puntos}}</h3>
    </div>
    <div class="card__face card__face--back">
      <h3 class="preguntas">Pregunta</h3>
      <p class="texto_pregunta">{{$row->pregunta}}</p>
      <p class="texto_pregunta" >{{$row->respuesta}}</p>
        <!-- AQUI VA EL MODAL -->
        <!-- Aqui va el acordion para agregar equipos -->
<div class="barra-despliege">
    <div class="contenido">
        <input class="imput" type="radio" name="acc" id="acc1" required>
        <label class="label" for="acc1" required>
            <!-- <h2 class="numero">01</h2> -->
            <i class="fa-solid fa-graduation-cap"></i>
            <h3 class="titulo">La respuesta es </h3>
        </label>

        <div class="datos">
            <p class="texto_pregunta">{{$row->respuesta}}</p>
        </div>
    </div>
</div>
<!-- aqui finaliza -->
        <!-- Fin de la ventana -->


    
      
    </div>
  </div>

  
@endforeach
</div>



@endsection
@push('scripts')
<script src="js/categoria2/carta_g.js"></script>
<script src="js/ronda1/calculo.js"></script>
<script src="js/mensajes/mensajes.js"></script>

@endpush