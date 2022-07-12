@extends('sample_oekaki_frame')
@section('main')

<!-- partial:index.partial.html -->
<h1>Extra Fabric object</h1>
<canvas height='500' id='foo' width='500'></canvas>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/fabric.js/2.4.2/fabric.min.js'></script>
<script src="{{asset('js/oekaki.js')}}"></script>

@stop