  <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>ColdTech</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        <link href="css/styles2.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>


    </head>
    <!-- Just an image -->
    <nav class="navbar navbar-light bg-light" style="background-image: url('images/headerbr.jpg');">
      <a class="navbar-brand" href="/">
        <img src="images/lgo.png" width="200" height="140" alt="">
      </a>

      <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link " id="Refrigeracion" ><h1>Refrigeración industrial</h1></a>
      </li>
     </ul>

    <img class="wow flash" data-wow-duration="10s" id="mexico" src="images/mexico.png" width="50" height="30">
     <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link " id="Telefono"><h5>Teléfono: 9983972896</h5></a>
      </li>
    </ul>
    </nav>
  <div class="topnav justify-content-end " id="myTopnav" >

    
         <a class="nav-link " href="/"><img src="icons/home.png" width="27" height="23" > Inicio</a>


        <a class="nav-link " href="/sucursales"><img src="icons/sucursales.png" width="27" height="23"> Sucursales</a>

   
        <a class="nav-link" href="/menuServicio"><img src="icons/servicios.png" width="27" height="23"> Servicio</a>
     

        <a class="nav-link" href="/QuienesSomos"><img src="icons/somos.png" width="27" height="23">Quienes somos</a>



        <a class="nav-link" href="/Ayuda"><img src="icons/ayuda.png" width="27" height="23">Ayuda</a>

      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>

  </div>



    @yield('content')

    </hr>


    <footer>
        
           
                <div  class="row" style="">
                    <div class="col-md-2 " >
                        <ul class="nav flex-column" >
                          <h3 id="letras">Redes sociales  </h3>
                      <li class="nav-item">
                        
                        <a class="nav-link" title="Facebook" href="https://www.facebook.com/UTdeCancun/" id="letred"><img title="Facebook" id="imgred" src="../icons/rfb.png">Facebook</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" title="Twitter" href="https://www.facebook.com/UTdeCancun/" id="letred"><img title="Twitter" id="imgred" src="../icons/rtw.png">Twitter</a>


                      </li>
                      <li class="nav-item">
                        <a class="nav-link" title="Instagram" href="https://www.facebook.com/UTdeCancun/" id="letred"><img width="40" title="Instagram" id="imgred" src="../icons/rin.png">Instagram</a>

                      </li>
                      <li class="nav-item">
                        <a class="nav-link" title="YouTube" href="https://www.facebook.com/UTdeCancun/" id="letred"><img title="YouTube" id="imgred" src="../icons/ryt.png">Youtube</a>
                      </li>
                    </ul>
                    </div>

                    <div id="datos" class="col-md-7 float-left" align="center">
                                   <h2>ColdTech</h2>
                           <p>Refrigeración Industrial</p>
                                    <p>Cancún Qroo</p>
                            <p>-Michelle Francisco Guzman</p>
                                       
                        <p>-Marco Antonio Ché Noh</p>
                    <p>Derechos reservados Términos y condiciones © 2017 - 2018</p>
                    </div>

                    <div id="mSito" class="col-md-3" style="">
                      <h3>Mapa de sitio</h3>

                      <nav class="nav flex-column">
                       
                          <li><a href="/">Inicio</a></li>
                        

                       
                          Sucursales
                          <li><a href="/sucursales">Todas las Sucursales</a></li>
                       

                        
                     
                        Servicios
                        <li><a href="/menuServicio">Nuestros Servicios</a></li>
                    


      
                        Quienes somos
                        <li><a href="/QuienesSomos">Quienes somos</a></li>
                   

                       
                        Ayuda
                        <li><a href="/Ayuda">Ayuda</a></li>
                       
                       

                      
                    </div>
                </div>
            
    </footer>
       

    <script src = "js / wow.min.js"> </script> 
                  <script> 
                  new WOW (). init (); 
                  </script> 
                  
                  <script type="text/javascript">
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
                  </script>