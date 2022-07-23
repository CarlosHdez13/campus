@extends('base_campus')
@section('tittle', 'Home')
@section('content')
<style>
  .titulosPrincipales{
    /* position: absolute;
    top: 164px;
    left: 0;*/
    /* margin-left: 39px; */
    margin-top: 49px; 
  }
  .tema{
    font-size: 15px;
    font-family: 'Lato', sans-serif;
    color: #1f2d35;
  }
  .temaTitulo{
    font-size: 15px;
    font-family: 'Lato', sans-serif;
    color: #1f2d35;
  }
  .areaTrabajo{
    position: fixed;
    /* top: 36%; */
    left: 0;
  }
  .medio{
    margin: 0px 51px 10px 39px;
    /* width: 881px;
    height: 393px; */
  }
</style>
          <div class="medio">
            <div class="titulosPrincipales  mt-29">
                <div class="col-12">
                    <span class="tema">Tema Actual: <span>Ideación</span></span>
                </div>
            </div>
            <!-- <div class="row"> -->
              <div class="col-8">
                <ul class="nav nav-tabs" id="encabezados" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="true">
                    <img src="{{ asset('img/iconos/icono_video.png') }}" alt="" height="16" width="16"> Video
                  </a>
                  
                </li>
                <li class="nav-item">
                  <a class="nav-link active" id="mapa-tab" data-toggle="tab" href="#mapa" role="tab" aria-controls="mapa" aria-selected="true">
                      <img src="{{ asset('img/iconos/icono_mapa_visual.png') }}" alt="" height="16" width="16"> Mapa Visual
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="ejemplo-tab" data-toggle="tab" href="#ejemplo" role="tab" aria-controls="ejemplo" aria-selected="true">
                      <img src="{{ asset('img/iconos/icono_ejemplo.png') }}" alt="" height="16" width="16"> Ejemplo
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="ejercicio-tab" data-toggle="tab" href="#ejercicio" role="tab" aria-controls="ejercicio" aria-selected="true">
                      <img src="{{ asset('img/iconos/icono_ejercicio.png') }}" alt="" height="16" width="16"> Ejercicio
                    </a>
                  </li>
                </ul>
                <div class="tab-content" id="contenido" style="width: 100%; height: 393px;">
                  <div class="tab-pane fade show active" id="compra" role ="tabpanel" aria-labelledby="compra-tab">
                      <iframe width="100%" height="393" src="https://www.youtube.com/embed/sOnqjkJTMaA" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                  </div>
                  <textarea cols="120" style="max-width:100%; background: #ebe9e9;" placeholder="NOTAS DEL USUARIO"></textarea>
                </div>
                <div>
                </div>
              </div>
              <div class="col-4">
                
              </div>
            <!-- </div> -->
          </div>
@endsection
