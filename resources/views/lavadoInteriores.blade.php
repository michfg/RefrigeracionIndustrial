@extends('layouts.app')
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
@section('content')

	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="/">Home</a></li>
	    <li class="breadcrumb-item "><a href="/menuServicio"> Menu Servicios</a></li>
	    <li class="breadcrumb-item" aria-current="page">Lavado Interiores</li>
	  </ol>
		<div class="container">
			<div class="section" >
				<div class="row" align="center">
					
					<div id="carousel"  class="col-md-10" align="center">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					  </ol>
					  <div class="carousel-inner">
					    <div class="carousel-item active">
					      <img align="center" src="servicios/s1.jpg" class="d-block w-100" alt="..." height="60%" >
					      <div class="carousel-caption d-none d-md-block">
	    						<h5>Carusel</h5>
								    <p>...</p>
							</div>
					    </div>
					    <div class="carousel-item">
					      <img src="servicios/s2.jpg" class="d-block w-100" alt="..." height="60%">
					    	<div class="carousel-caption d-none d-md-block">
	    						<h5>Carusel</h5>
								    <p>...</p>
							</div>
					    </div>
					    <div class="carousel-item">
					      <img src="servicios/s3.jpg" class="d-block w-100" alt="..." height="60%">
					    	<div class="carousel-caption d-none d-md-block">
	    						<h5>Carusel</h5>
								    <p>...</p>
							</div>
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
			</div>


				</div>
				</div>
		</div>

		<div class="section " align="center" id="descripcionServicio">
			<div class="col-md-9" align="center" id="descripcionServicio">
				<div class="card wow bounceInLeft">
				  <div class="card-header">
				    <h1>Lavado de interiores</h1>
				  </div>
				  <div class="card-body">
				    
				     <h4>Precio: $2000 </h4>
	                         <h4>Descripción:</h4>
	                         <p>Reparación y mantenimiento técnico de compresores. Reparaciones, mantenimientos preventivos, correctivos y predictivos de compresores reciprocantes y de tornillo.Para estos servicios se dispone de repuestos de compresores originales, herramienta y logística necesaria para dar respuesta a cualquier situación.</p>
				    
				  </div>

                          <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-6">
                              	<a href="javascript:openVentana();">
                                  <button href="/" type="submit" class="btn btn-success ">
                                      Me interesa
                                  </button>
                                  </a>
                              </div>
                          </div>
				</div>
			</div>
		</div>
	</div>

		<script type="text/javascript">
			$('.carousel').carousel({
	  interval: 2000
	})
		</script>
	@endsection
	</div>


<script type="text/javascript">
function openVentana(){
    $(".ventana").slideDown("slow");
}
function closeVentana(){
    $(".ventana").slideUp("fast");
}

</script>
        <div class="ventana">

            <div class="form">
                <div class="cerrar"><a href="javascript:closeVentana();">X</a></div>
                <h1 style="color:black;">Contactanos?</h1>
                <h6>Nosotros en <strong>ColdTech</strong> estamos dispuestos a ayudarte en todo momento
                    solo contactanos e informanos de tus dudas.</h6>
                <form>
                <table>
                    <div class="form-group">
    <div class="col-lg-11">
       Llamame: <input type="text" name="country" value="9983297442" size="35" readonly><br>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-11">
      Mandame Correo: <input type="text" name="country" value="marcoantoniochenoh@gmail.com" size="35" readonly><br>
    </div>
  </div>

  <div class="form-group">
    <div class="">
      <div id="lilu"></div>
      <div id="nogracias" class="cerrar"><a href="javascript:closeVentana();">No gracias</a></div>
    </div>
  </div>
                </table>
                </form>
            </div>

        </div>