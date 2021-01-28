@extends('main')
@section('contenido')
	<h1> Ofertas </h1>

	<h2> Sin usar blade </h2>

	<?php for($i=0; $i<=10; $i++): ?>
	    <p> <?php echo 'El valor actual es: '. $i ?> </p>
	<?php endfor ?>


	<h2> usando Blade </h2>

	@for($i=0; $i<=10; $i++)
	    @if($i == 5)
	        <p> El numero es 5 </p>
	    @endif
	    <p> El valor actual es: {{$i}} </p>
	@endfor

@stop


