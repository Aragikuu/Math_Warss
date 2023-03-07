@extends('layaout.plantilla')
<!-- Aqui es en donde voy a poner los CDN -->

@section('titulo','Equipos')
@section('contenido')
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