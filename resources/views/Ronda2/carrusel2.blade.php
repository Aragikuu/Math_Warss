@extends('layaout.plantilla')
<script src="js/Winwheel.min.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/jQuery-2.1.4.min.js"></script>
<link rel="stylesheet" href="css/ruleta.css" class="css">
@section('contenido')

<div class="ruleta">
    <canvas id="canvas" height="600px" width="600px"></canvas>
</div>
<input class="btn" type="button" value="Girar" onclick="miRuleta.startAnimation()">

    <div class="cuadro" onclick="redireccion1_2()">
        Algebra
    </div>

    <div class="cuadro1" onclick="redireccion2_2()">
        Matematicas
    </div>

    <div class="cuadro2" onclick="redireccion3_2()">
        comida
    </div>

    <div class="cuadro3" onclick="redireccion4_2()">
        sapatos
    </div>

    <div class="cuadro4" onclick="redireccion5_2()">
        sjjsjsjjs
    </div>

@endsection
@push('scripts')
<script src="js/ruleta/ruletagiro2.js"></script>
@endpush