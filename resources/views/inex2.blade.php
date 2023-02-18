@extends('layaout.master')
@section('contenido')
<section class="roulette-container">

    <div id="selector"></div>

    <div id="roulette">

        <div class="roulette-section">
            <div class="roulette-section-container">
                <p>Borra tu código</p>
            </div>
        </div>

        <div class="roulette-section">
            <div class="roulette-section-container">
                <p>Apaga tu compu</p>
            </div>
        </div>

        <div class="roulette-section">
            <div class="roulette-section-container">
                <p>Formatea tu compu</p>
            </div>
        </div>

        <div class="roulette-section">
            <div class="roulette-section-container">
                <p>Compra helado</p>
            </div>
        </div>

        <div class="roulette-section">
            <div class="roulette-section-container">
                <p>Toma un descanso</p>
            </div>
        </div>

        <div class="roulette-section">
            <div class="roulette-section-container">
                <p>¡Huevo en tu cabeza!</p>
            </div>
        </div>

        <div class="roulette-section">
            <div class="roulette-section-container">
                <p>Tira la laptop</p>
            </div>
        </div>

        <div class="roulette-section">
            <div class="roulette-section-container">
                <p>$1,00USD a tus suscriptores</p>
            </div>
        </div>

        <div class="roulette-section">
            <div class="roulette-section-container">
                <p>Cómete un snack</p>
            </div>
        </div>

        <div class="roulette-section">
            <div class="roulette-section-container">
                <p>Juega un rato</p>
            </div>
        </div>

        <div class="roulette-section">
            <div class="roulette-section-container">
                <p>¡Termina tu tarea!</p>
            </div>
        </div>

        <div class="roulette-section">
            <div class="roulette-section-container">
                <p>Vuelve a grabar</p>
            </div>
        </div>

    </div>

    <div class="button-container">
        <button type="button" id="spin">¡Girar!</button>
        <button type="button" id="reset">Resetear</button>
    </div>

</section>

<div class="cuadro">
    Algebra
</div>
<div class="cuadro1">
    Algebra
</div>

<div class="cuadro2">
    Algebra
</div>
<div class="cuadro3">
    Algebra
</div>
<div class="cuadro4">
    Algebra
</div>
@endsection
@push('scripts')
@endpush