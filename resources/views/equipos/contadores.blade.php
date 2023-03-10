@extends('layaout.plantilla')
<link rel="stylesheet" href="css/cartas/estilos.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<script src="https://kit.fontawesome.com/714fbe6707.js" crossorigin="anonymous"></script>
@section('contenido')
<!-- Aqui va el acordion para agregar equipos -->
<div class="barra-despliege">
    <div class="contenido">
        <input style="--clr:#6eff3e" class="imput" type="radio" name="acc" id="acc1" required>
        <label class="label" for="acc1" required>
            <!-- <h2 class="numero">01</h2> -->
            <h3 class="titulo"><i class="fa-solid fa-graduation-cap"></i>Agrega un nuevo equipo</h3>
        </label>

        <div class="datos">
            <!-- aqui va el contenido -->
            <form id="frmContador" action="{{ url('contadores') }}" method="POST">
                @csrf
                <input type="text" class="input" name="nombre_equipo" placeholder="Nombre del equipo">


                <div style="padding-top: 10px;"></div>
                <button class="btn-agregar">
                    <i class="fa-solid fa-plus"></i>
                </button>
            </form>


        </div>
    </div>
</div>
<!-- aqui finaliza -->
<!-- <div class="marco">
    @php $i=1; @endphp
    @foreach($contadores as $row)
    <div class="contenedor">
    <form id="frmContador" action="{{ url('contadores') }}" method="POST">
        @method('PUT')
        @csrf
        <input class="input" name="nombre_equipo">{{$row->nombre_equipo}}</p>
        <input type="text" class="input" name="puntos" value="{{$row->puntos}}">

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
        <button class="btn-agregar">agregar</button>
    </form>
    </div>
    @endforeach -->
    <!-- aqui finaliza el contenedor del contador -->
<!-- </div> -->

<div class="marco">
<!-- Aqui comienza la pruba con cards estaticos -->
<div class="contenedor">
<form id="frmContador" action="{{ url('contadores') }}" method="POST">
                @csrf
        <input type="text" class="input" name="nombre_equipo">

        <input type="text" class="input" name="puntos">

        <div class="botones">
            <btn class="incr" id="incr2">
                <spa class="material-icons-round">add</spa>
            </btn>
            <btn class="decr" id="decr2">
                <spa class="material-icons-round">remove</spa>
            </btn>
            <btn class="reset" id="reset2">
                <spa class="material-icons-round">cached</spa>
            </btn>
           
</div>
<button class="btn-agregar">agregar</button>
</div>
<!-- segundo card -->
        <div class="contenedor">

        <input type="text" class="input" name="nombre_equipo">

        <input type="text" class="input" name="puntos">

        <div class="botones">
            <btn class="incr" id="incr2">
                <spa class="material-icons-round">add</spa>
            </btn>
            <btn class="decr" id="decr2">
                <spa class="material-icons-round">remove</spa>
            </btn>
            <btn class="reset" id="reset2">
                <spa class="material-icons-round">cached</spa>
            </btn>
        </div>
        <button class="btn-agregar">agregar</button>
        </div>    
        <!-- fin del segundo card  -->
<!-- Aqui finaliza -->
</div>
@endsection
@push('scripts')
<script src="js/main.js"></script>
@endpush