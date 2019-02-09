@extends('layouts.app')
@section('content')
 <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Inicio</a></li>
    <li class="breadcrumb-item " aria-current="page"> Ayuda</li>
  </ol>

<style type="text/css">
	body {
  position: relative;
}
</style>

	<div class="container">
		<div class="col-md12"><h1 id="txtServicios">Preguntas frecuentes</h1></div>
		<div class="section">
			<div class="bd-example">
  <div class="row">
    <div class="col-4">
      <div id="list-example" class="list-group">
        <a class="list-group-item list-group-item-action" href="#list-item-1">¿Qué es coldTech?</a>
        <a class="list-group-item list-group-item-action" href="#list-item-2">¿Cómo puedo contratar un servicio?</a>
        <a class="list-group-item list-group-item-action" href="#list-item-3">¿Dónde nos encontramos?</a>
        <a class="list-group-item list-group-item-action" href="#list-item-4">¿Qué servicos ofrecemos?</a>
        <a class="list-group-item list-group-item-action" href="#list-item-5">¿Cómo contactarnos? </a>
        <a class="list-group-item list-group-item-action" href="#list-item-6">¿Cómo rellenar el formulario?</a>
        <a class="list-group-item list-group-item-action" href="#list-item-7">¿Se puede solicitar un servicio personalizado?</a>
        <a class="list-group-item list-group-item-action" href="#list-item-8">¿Ofrece sericios únicamente a nievel nacional?</a>
        <a class="list-group-item list-group-item-action" href="#list-item-9">¿Es necesario una cuenta en este sitio? 	</a>
      </div>
    </div>
    <div class="col-8">
      <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">

        <h4 id="list-item-1">¿Qué es coldTech?</h4>
        <p> ColdTech Nace en Cancún Quintana Roo, en el año del 2019, como un proyecto de atención a clientes de forma integral en el ramo de la refrigeración. Ofreciendo asesorÍa, servicio y proyectos, con el firme propósito de otorgar a los clientes una solución integral en su sistema de refrigeración.</p>

        </br></br>


        <h4 id="list-item-2">¿Cómo puedo contratar un servicio?</h4>
        <p> Para contactar nuestros servicios puedes comunicarte con nosotros de cualquiera de las siguientes formas:
        </br></br>	
        *Contamos con redes sociales como lo son  <a class="nav-link" title="Facebook" href="https://www.facebook.com/UTdeCancun/" ><img title="Facebook" id="imgred" src="../icons/rfb.png">Facebook</a>
        <a class="nav-link" title="Twitter" href="https://www.facebook.com/UTdeCancun/" ><img title="Twitter" id="imgred" src="../icons/rtw.png">Twitter</a>
        <a class="nav-link" title="Instagram" href="https://www.facebook.com/UTdeCancun/"><img width="40" title="Instagram" id="imgred" src="../icons/rin.png">Instagram</a>	
        <a class="nav-link" title="YouTube" href="https://www.facebook.com/UTdeCancun/"><img title="YouTube" id="imgred" src="../icons/ryt.png">Youtube</a>
    </br>
    	*Contactar nuestra pestana de <a href="/sucursales">Sucursales</a> dónde encontrara la dirección, teléfono de cada sucursal.
    </br></br>
    	*Marcar el Teléfono: 9983972896	
        </p>
        </br></br></br>



        <h4 id="list-item-3">¿Dónde nos encontramos?</h4>
        <p>Contactar nuestra pestana de <a href="/sucursales">Sucursales</a> dónde encontrara la dirección con ayuda de un mapa para ubicarse
    	</p>
        </br></br>

        <h4 id="list-item-4">¿Qué servicos ofrecemos?</h4>
        <p>Puedes consultar nuestra lista de servicios disponible en la pestaña <a href="/menuServicio">Nuestros Servicios</a></p>

        </br></br>

        <h4 id="list-item-5">¿Cómo contactarnos?</h4>
        <p>
        *Contamos con redes sociales como lo son:  <a class="nav-link" title="Facebook" href="https://www.facebook.com/UTdeCancun/" ><img title="Facebook" id="imgred" src="../icons/rfb.png">Facebook</a>
        <a class="nav-link" title="Twitter" href="https://www.facebook.com/UTdeCancun/" ><img title="Twitter" id="imgred" src="../icons/rtw.png">Twitter</a>
        <a class="nav-link" title="Instagram" href="https://www.facebook.com/UTdeCancun/"><img width="40" title="Instagram" id="imgred" src="../icons/rin.png">Instagram</a>	
        <a class="nav-link" title="YouTube" href="https://www.facebook.com/UTdeCancun/"><img title="YouTube" id="imgred" src="../icons/ryt.png">Youtube</a>	
           </br>
        *Marcar el Teléfono: 9983972896	
        </p>
        </br></br>

        <h4 id="list-item-6">¿Cómo rellenar el formulario?</h4>
        <p>
        *Formulario de contacto ubicado en la pestaña de <a href="/">Inicio</a>
        	-Ingresar tu nombre
        	-Ingresar tu correo electrónico donde desees que se te localice
        	-Ingresar la ciudad dónde se realizara el servicio
        	-Realizar el comentario que deses(pregunta/duda, queja o sugerencia)

        </p>

        </br></br>

        <h4 id="list-item-7">¿Se puede solicitar un servicio personalizado?</h4>
        <p>
        Si claro, nosotros nos adaptamos a sus necesidades siempre que este dentro de nuestras posibilidades.	
        </p>

        </br></br>

        <h4 id="list-item-8">¿Ofrece sericios únicamente a nievel nacional?</h4>
        <p>
        Por el momento si, unicamente nos encontramos en la republica mexicana.	
        </p>
        </br></br>

        
        <h4 id="list-item-9">¿Es necesario una cuenta en este sitio? </h4>
        <p>
        No, puedes navegar en el sitio sin la necesidad de registrarte	
        </p>

      </div>
    </div>
  </div>
</div>

		</div>
	</div>


@endsection