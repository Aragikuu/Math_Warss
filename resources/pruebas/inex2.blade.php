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

    </div>

    <div class="button-container">
        <button type="button" id="spin">¡Girar!</button>
        <button type="button" id="reset">Resetear</button>
    </div>

</section>

<div class="cuadro" href="inex2">
    Algebra
</div>
<div class="cuadro1">
    Matematicas
</div>

<div class="cuadro2">
    comida
</div>
<div class="cuadro3">
    sapatos
</div>
<div class="cuadro4">
    sjjsjsjjs
</div>
@endsection
@push('scripts')
@endpush