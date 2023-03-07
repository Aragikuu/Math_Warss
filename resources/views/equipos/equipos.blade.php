@extends('layaout.plantilla')
<!-- Aqui es en donde voy a poner los CDN -->

@section('titulo','Equipos')
@section('contenido')
            <!-- Aqui va el acordion para agregar equipos -->
        <div class="barra-despliege">
        <div class="contenido">
          <input class="imput" type="radio" name="acc" id="acc1">
          <label class="label" for="acc1">
            <h2 class="numero">01</h2>
            <h3 class="titulo">hola aca pones el titulo</h3>
          </label>

          <div class="datos">
                <input type="text">
          </div>
        </div>
      </div>
      <!-- aqui finaliza -->
<div class="container">

        

    <!-- boton de agregar -->
    <button class="btn-agregar">
        Agregar
    </button>

    <table class="recent-orders">
        <thead>
            <th>ID</th>
            <th>NOBRE DEL EQUIPO</th>
            <th>PUNTOS</th>
            <th>ACCIONES</th>
        </thead>

        <tbody>
            @php $i=1; @endphp
            @foreach($equipos as $row)
            <td>{{$i++}}</td>
            <td>{{$row->nombre_equipo}}</td>
            <td>{{$row->puntos}}</td>
            <td>

                <!-- boton de editar -->
                <button class="btn-editar">
                    <a href=""></a>
                    Editar
                </button>
                <!-- boton de eliminar -->
                <button class="btn-eliminar">
                    Eliminar
                </button>
                @endforeach
            </td>
        </tbody>
    </table>
</div>
@endsection
@push('scripts')
@endpush