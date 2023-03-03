@extends('layaout.plantilla')
<script src="js/Winwheel.min.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/jQuery-2.1.4.min.js"></script>
<link rel="stylesheet" href="css/ruleta.css" class="css">
@section('contenido')

<div class="ruleta">
    <canvas id="canvas" height="600px" width="600px">
    </canvas>
</div>
<input class="btn" type="button" value="Girar" onclick="miRuleta.startAnimation()">

@endsection
@push('scripts')
<script src="js/ruletagiro.js"></script>
@endpush