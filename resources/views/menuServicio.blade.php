	
@extends('layouts.app')

@section('content')
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Inicio</a></li>
    <li class="breadcrumb-item" aria-current="page">Nuestros servicios</li>
  </ol>
<div class="container">
	<h1 id="txtServicios"> Nuestros Servicios..</h1>

	<div class="section">
		<div class="row">
			<div class="col-md-12 " align="center">
			
			<div class="col-md-4 float-left">
				<div class="card wow fadeInDown" >
				  <img width="128"  height="250" src="servicios/s1.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Lavado de interiores</h5>
				    <p class="card-text">$2,000.00</p>
				    <a href="/lavadoInteriores" class="btn btn-primary"  >Más informacion</a>
				  </div>
				</div>
			</div>

			<div class="col-md-4 float-left">
				<div class="card wow fadeInDown" style="margin: auto;" >
				  <img width="128"  height="250" src="servicios/s2.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Rehabilitado de maquinas</h5>
				    <p class="card-text">$7, 000.00.</p>
				    <a href="/rehabilitadoMaquinaria" class="btn btn-primary">Más informacion</a>
				  </div>
				</div>
			</div>

			<div class="col-md-4 float-right">
				<div class="card wow fadeInDown" >
				  <img width="128"  height="230" src="servicios/s3.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Servicio de mantenimiento a compresores</h5>
				    <p class="card-text">$10, 000.0</p>
				    <a href="/ServicioMantenimientoCompresores" class="btn btn-primary">Más información</a>
				  </div>
				</div>
			</div>
			</div>

		</div>
			
	</div>
	
</div>
@endsection