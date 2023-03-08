@extends('layaout.plantilla')
<!-- Aqui es en donde voy a poner los CDN -->
<script src="https://kit.fontawesome.com/714fbe6707.js" crossorigin="anonymous"></script>
@section('titulo','Equipos')
@section('contenido')
<!-- Aqui va el acordion para agregar equipos -->
<div class="barra-despliege">
    <div class="contenido">
        <input class="imput" type="radio" name="acc" id="acc1" required>
        <label class="label" for="acc1" required>
            <!-- <h2 class="numero">01</h2> -->
            <i class="fa-solid fa-graduation-cap"></i>
            <h3 class="titulo">Agrega un nuevo equipo</h3>
        </label>

        <div class="datos">
            <!-- aqui va el contenido -->
            <form id="frmEquipos" action="{{ url('equipos') }}" method="POST">
                @csrf
                <input class="imput" type="text" name="nombre_equipo" placeholder="Nombre del equipo"><br>
                <input class="imput" type="number" name="puntos" placeholder="Puntos del equipo"><br>
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
                    <a href=" {{ url('equipos',[$row]) }}" class="btn-editar">
                    <button class="btn-editar">
                        
                            <i class="fa-solid fa-pencil"></i>
                    </button>
                    </a>
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