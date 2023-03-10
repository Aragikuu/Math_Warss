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

      <button type="submit" class="btn-blanco" onclick="respuesta('<?php echo $row['id'] ?>', '<?php echo $row['respuesta'] ?>')">Abrir</button>
    </div>
  </div>

  
@endforeach
</div>



@endsection
@push('scripts')
<script src="js/categoria2/carta_g.js"></script>
<script src="js/ronda1/calculo.js"></script>
<script src="js/mensajes/mensajes.js"></script>
<script>
    function respuesta(id,respusta){
    
    swal("Respuesta: ", "<?php echo $row['respuesta'] ?>", "success");
}
</script>
@endpush