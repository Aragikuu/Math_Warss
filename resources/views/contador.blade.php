@extends('layaout.plantilla')
<link rel="stylesheet" href="css/cartas/estilos.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
@section('contenido')
<div class="marco">
    <div class="contenedor">
        <p class="titulo">Equipo #1</p>
        <p class="contar" id="contar">0</p>

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

    <div class="contenedor">
        <p class="titulo">Equipo #2</p>
        <p class="contar" id="contar">0</p>

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

    <div class="contenedor">
        <p class="titulo">Equipo #3</p>
        <p class="contar" id="contar">0</p>

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

    <div class="contenedor">
        <p class="titulo">Equipo #4</p>
        <p class="contar" id="contar">0</p>

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
</div>
@endsection
@push('scripts')
<script src="js/main.js"></script>
@endpush