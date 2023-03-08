@extends('layaout.plantilla')
<!-- Aqui es en donde voy a poner los CDN -->
<script src="https://kit.fontawesome.com/714fbe6707.js" crossorigin="anonymous"></script>
@section('titulo','Equipos')
@section('contenido')
<!-- Aqui va el acordion para agregar equipos -->
<div class="barra-despliege">
    <div class="contenido">
        <input class="imput" type="radio" name="acc" id="acc1">
        <label class="label" for="acc1">
            <!-- <h2 class="numero">01</h2> -->
            <i class="fa-solid fa-graduation-cap"></i>
            <h3 class="titulo">Agrega un nuevo equipo</h3>
        </label>

        <div class="datos">
            <!-- aqui va el contenido -->
            <form id="frmEquipos" action="{{ url('equipos') }}" method="POST">
                @csrf
                <input type="text" name="nombre_equipo" placeholder="Nombre del equipo">
                <input type="number" name="puntos" placeholder="Puntos del equipo">

                <div style="padding-top: 10px;"></div>
                <button class="btn-agregar">
                    <i class="fa-solid fa-plus"></i>
                </button>
            </form>
        </div>
    </div>
</div>
<!-- aqui finaliza -->

<div class="recent-orders">
    <table class="">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOBRE DEL EQUIPO</th>
                <th>PUNTOS</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1; @endphp
            @foreach($equipos as $row)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$row->nombre_equipo}}</td>
                <td>{{$row->puntos}}</td>
                <td>
                    <!-- boton de editar -->
                    <button class="btn-editar">
                        <a href=" {{ url('equipos',[$row]) }}">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                    </button>
                    <!-- boton de eliminar -->
                    <form method="POST" action="{{ url('equipos',[$row] )}}">
                        @method("delete")
                        @csrf
                        <button class="btn-eliminar">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@push('scripts')
@endpush