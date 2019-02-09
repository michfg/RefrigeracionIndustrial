@extends('layouts.app')
@section('content')

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <ol class="breadcrumb">
      <li class="breadcrumb-item" aria-current="page">Inicio</li>
    </ol>



  <div class="container" >
      <div class="section" >
          <div class="row" >

              <div class="col-md-5 float-left wow bounceInLeft"  id="inicio">
              <form action="javascript:validar()"  >

                          <div class="form-group">
                              <div class="col-sm-11">
                                  <label><h2>Contacto<h2></label>
                              </div>

                              <div class="form-group">
                              <div class="col-sm-11">
                                <p>Nombre</p>
                                  <input id="limpiar" type="text" required name="nombre" id="nombre" class="form-control" placeholder="Nombre">
                              </div>
                          </div>

                              <div class="form-group">
                              <div class="col-sm-11">
                                <p>Email</p>
                                  <input id="limpiar" type="email" required name="email" id="email" class="form-control" placeholder="Email" >
                              </div>
                              </div>

                              <div class="form-group">
                              <div class="col-sm-11">
                                <p>Ciudad</p>
                          <select id="limpiar" class="selectpicker form-control" required name="ciudad" data-style="btn-primary">
                              <option>Seleccione un Ciudad</option>
                              <option>Quintana Roo</option>
                              <option>CDMX</option>
                              <option>Baja California
                              </option>
                              <option>Oaxaca</option>
                              <option>Guadalajara</option>
                              <option>Monterrey</option>
                              <option>Veracruz</option>
                              <option>Sonora</option>
                              <option>Yucatan</option>
                              <option>Chihuahua</option>
                          </select>
                          </div>
                             </div>


                          <div class="form-group">
                              <div class="col-sm-11">
                                <p>Mensaje</p>
                                  <textarea type="text" name="comentario" id="comentario" class="form-control" placeholder="Comentario"></textarea>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-6">
                                  <button href="/" type="submit" class="btn btn-success ">
                                     <a ><img src="icons/enviarmsg.png" width="44" height="35" ></a>
                                  </button>
                                  <button type="reset" class="btn btn-danger ">
                                     <a ><img src="icons/limpiar.png" width="44" height="35" ></a>
                                  </button>
                              </div>
                          </div>


                          </div>
                      </form>
              </div>


              <div   class="col-md-7 float-rigth wow wow bounceInRight" >
                <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel" >
    <div class="carousel-inner" >
      <div class="carousel-item active" data-interval="10000">
        <img src="servicios/s1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-interval="2000">
        <img src="servicios/s2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="servicios/s6.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    </div>

           <div class="section" align="center" id="descripcionServicio">
          <div class="col-md-9 wow fadeInDown" align="center" id="historia" style="border: white 8px ridge;">
                  <p  >Historia
                              <strong>ColdTech</strong> Nace en Cancún Quintana Roo, en el año del 2019, como un proyecto de atención 
                              a clientes de forma integral en el ramo de la refrigeración. Ofreciendo asesorÍa, servicio y 
                              proyectos, con el firme propósito de otorgar a los clientes una solución integral en su sistema de 
                              refrigeración.
                  </p>
          </div>
      </div>
          </div>
          </div>
      </div>
  </div>



                      <script type="text/javascript">
                      $(function(){
                          $('#slider div:gt(0)').hide();
                              setInterval(function(){
                                  $('#slider div:first-child').fadeOut(1000)
                                      .next('div').fadeIn(1000)
                                      .end().appendTo('#slider');
                              },5000);
                      })

                      function validar(){
        var validado = true;
        elementos = document.getElementsByClassName("inputFormu");
        for(i=0;i<elementos.length;i++){
          if(elementos[i].value == "" || elementos[i].value == null){
          validado = false
          }
        }
        if(validado){
        location.reload();
        alert("Mensaje enviado,Espere la respuesta") 
        }else{
        alert("Hay campos vacios")   
        }
      }


                  </script>


      <script type="text/javascript">
      $('.carousel').carousel({
    interval: 2000
  })
  </script>

  <script src = "js / wow.min.js"> </script> 
                <script> 
                new WOW (). init (); 
                </script> 
  @endsection
  </div>