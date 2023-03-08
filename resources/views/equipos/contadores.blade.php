@extends('layaout.plantilla')
<link rel="stylesheet" href="css/cartas/estilos.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<script src="https://kit.fontawesome.com/714fbe6707.js" crossorigin="anonymous"></script>
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
            <form id="frmContador" action="{{ url('contadores') }}" method="POST">
                @csrf
                <input type="text" class="input" name="nombre_equipo" placeholder="Nombre del equipo">
                <input type="number" class="input" name="puntos" placeholder="Puntos del equipo">

                <div style="padding-top: 10px;"></div>
                <button class="btn-agregar">
                    <i class="fa-solid fa-plus"></i>
                </button>
            </form>


        </div>
    </div>
</div>
<!-- aqui finaliza -->
<div class="marco">
        @php $i=1; @endphp
        @foreach($contadores as $row)
    <div class="contenedor">
        
        <p class="titulo" name="nombre_equipo">{{$row->nombre_equipo}}</p>
        <p class="contar" id="contar" name="puntos">{{$row->puntos}}</p>

        <div class="botones">
            <btn class="incr" id="incr">
                <spa class="material-icons-round">add</spa>
            </btn>
            <btn class="decr" id="decr">
                <spa class="material-icons-round">remove</spa>
            </btn>
            <btn class="reset" id="reset">
                <spa class="material-icons-round">cached</spa>
            </btn>
        </div>

    </div>
        @endforeach
    <!-- aqui finaliza el contenedor del contador -->

   

    </div>

@endsection
@push('scripts')
<script src="js/main.js"></script>
@endpush