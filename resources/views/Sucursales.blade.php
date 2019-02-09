
@extends('layouts.app')
@section('content')
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Inicio    </a></li>
    <li class="breadcrumb-item" aria-current="page">Sucursales</li>
  </ol>    
       <div class="container">
       <h1 id="txtsucursal">Sucursales</h1>
       	<div class="section" >
				<div class="row">
					<div class="col-md-6 float-right wow bounceInLeft">
						<h2 id="txtnombreSucursal">Sucursal canari</h2>
						<p>
            		<br>
            		<strong> Dirección:</strong>Av. Chichen Itza 10, Benito Juárez, 
            		77500 Cancún, Q.R.<br> 
            		<strong>Horario: </strong> Lunes a sabado de 9am-10pm<br>
            		<strong>Telefono:</strong>  01 998 884 3471<br>

                </p>
					</div>

				<div class="col-md-6 float-left wow bounceInRight" align="center" >
			   		<figure >
                 		<img  class="img-fluid img-thumbnail" src="../images/sucursal2.jpeg"/>
                 	</figure>	
			   	</div>

			   	<div class="col-md-12 " id="mapa" align="center">
			   		<figure>
            			<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14883.126255883199!2d-86.85560572878907!3d21.16108953570203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRefrigeraci%C3%B3n+canari+de+Canc%C3%BAn+S.A.+de+C.V.!5e0!3m2!1ses!2smx!4v1547186623983" width="70%" height="50%"  allowfullscreen></iframe>
            		</figure>
			   	</div>

				</div>
			</div>

			<hr/>

       	<div class="section" id="segundaSucursal">
       	
       		<div class="row">
			  <div class="col-md-6 float-right wow bounceInLeft">
			  	<h2 id="txtnombreSucursal">Sucursal sureste</h2>
            	<p>
            		<br>
            		<strong> Dirección:</strong> MZA 3 LTE 46, López Portillo 355,<br> 
            		Benito Juárez, 77510 Cancún, Q.R.<br>
            		<strong>Horario:</strong>  Lunes a sabado de 9am-10pm<br>
            		<strong>Telefono: </strong>  01 998 884 8181<br>

                </p>
			  </div>

			   <div class="col-md-6 float-left wow bounceInRight" align="center" >
			   	<figure >
                 <img  class="img-fluid img-thumbnail" src="../images/sucursal1.jpeg"/>
                 </figure>	
			   </div>

			   <div  class="col-md-12" id="mapa" align="center">
			   	<figure >
                  	<iframe  src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1906222.9045036482!2d-89.34514220737188!3d21.069002994469564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sRefrigeracion+American+del+Sureste+S.+A.+de+C.V!5e0!3m2!1ses!2smx!4v1547184817551" width="70%" height="50%" allowfullscreen></iframe>
                  </figure> 
			   </div>
			  </div>
			</div>
       	</div>

@endsection
       </div>