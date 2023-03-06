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
        <p class="contar" id="contar2">0</p>

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

    </div>

    <div class="contenedor">
        <p class="titulo">Equipo #3</p>
        <p class="contar" id="contar3">0</p>

        <div class="botones">
            <btn class="incr" id="incr3">
                <spa class="material-icons-round">add</spa>
            </btn>
            <btn class="decr" id="decr3">
                <spa class="material-icons-round">remove</spa>
            </btn>
            <btn class="reset" id="reset3">
                <spa class="material-icons-round">cached</spa>
            </btn>
        </div>

    </div>

    <div class="contenedor">
        <p class="titulo">Equipo #4</p>
        <p class="contar" id="contar4">0</p>

        <div class="botones">
            <btn class="incr" id="incr4">
                <spa class="material-icons-round">add</spa>
            </btn>
            <btn class="decr" id="decr4">
                <spa class="material-icons-round">remove</spa>
            </btn>
            <btn class="reset" id="reset4">
                <spa class="material-icons-round">cached</spa>
            </btn>
        </div>

    </div>
</div>
@endsection
@push('scripts')
<script src="js/main.js"></script>
@endpush