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
        <input type="checkbox" id="btn-modal" />
    <label for="btn-modal" class="lbl-modal">abrir</label>
    <div class="modal">
      <div class="conten-1">
        <header>Respuesta</header>
        <label for="btn-modal">X</label>
        <div class="contenido-1">
          <table>
              <p>{{$row->respuesta}}</p>
        </div>
      </div>
    </div>
        <!-- AQUI FINALIZA -->

    
      
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