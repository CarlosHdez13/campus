@extends('base_campus')
@section('tittle', '70/30')
<style>
  .notificacion{
    margin-top: 11em;
  }
</style>
@section('content')
  <div class="medio">
    <div class="titulosPrincipales  mt-29">
      <div class="col-12">
        <span class="tema">Tema Actual: <span  class="nombreTema">Ideación</span></span>
      </div>
    </div>
    <ul class="nav nav-tabs" id="encabezados" role="tablist" style="margin-top: 40px;">
      <li class="nav-item active">
          <a class="nav-link active" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="true">
          <img src="{{ asset('img/iconos/icono_video.png') }}" alt="" height="16" width="16"> <span class="cabeceras">Video</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " id="mapa-tab" data-toggle="tab" href="#mapa" role="tab" aria-controls="mapa" aria-selected="true">
          <img src="{{ asset('img/iconos/icono_mapa_visual.png') }}" alt="" height="16" width="16"> <span class="cabeceras">Mapa Visual</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " id="ejemplo-tab" data-toggle="tab" href="#ejemplo" role="tab" aria-controls="ejemplo" aria-selected="true">
          <img src="{{ asset('img/iconos/icono_ejemplo.png') }}" alt="" height="16" width="16"> <span class="cabeceras">Ejemplo</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " id="ejercicio-tab" data-toggle="tab" href="#ejercicio" role="tab" aria-controls="ejercicio" aria-selected="true">
          <img src="{{ asset('img/iconos/icono_ejercicio.png') }}" alt="" height="16" width="16"> <span class="cabeceras">Ejercicio</span>
        
        </a>
        </li>
    </ul>
    <div class="tab-content" id="contenido" style="width: 100%;height: 393px;margin-top: 30px;">
      <!-- <div id="compra"  aria-labelledby="compra-tab">
        <iframe class="responsive-iframe" width="100%" height="393" src="https://www.youtube.com/embed/sOnqjkJTMaA" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
      </div> -->
      <div  class="tab-pane fade show in" id="video" role ="tabpanel" aria-labelledby="compra-tab">
        <iframe class="responsive-iframe" width="100%" height="393" src="https://www.youtube.com/embed/sOnqjkJTMaA" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
      </div>
      <div class="tab-pane fade show" id="mapa" role ="tabpanel" aria-labelledby="compra-tab">
        <h1>mapa</h1>
      </div>
      <div class="tab-pane fade show" id="ejemplo" role ="tabpanel" aria-labelledby="compra-tab">
        <h1>ejemplo</h1>
      </div>
      <div class="tab-pane fade show" id="ejercicio" role ="tabpanel" aria-labelledby="compra-tab">
        <h1>ejercicio</h1>
      </div>
    </div>
    <div class="row" style="width:100%;">
      <div class="col-5">
        <a href="" style="text-decoration: none;"><span class="tema-anterior">Tema Anterior</span></a>
      </div>
      <div class="col-5">
        <a href="" style="text-decoration: none;"><span class=" tema-siguiente">Tema Siguiente</span></a>
      </div>
      <div class="col-2 botones">
        <button class="btn btn-primary">
          <span class="">Guardar</span>
        </button>
      </div>
    </div>
    <div>
      <textarea style="background: #eff3f6;width: 100%;height: 132px;margin-top: 51px;margin-bottom: 86px;border: none;" placeholder="NOTAS DEL USUARIO"></textarea>
    </div>
  </div>
          
  <script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });


$(document).ready(function() {
    $('#mapa').click(function(){
        // $( "#btipo" ).removeClass( "btn-secondary" ).addClass( "btn-primary" );
        $( ".nav-link" ).addClass( "active" );
        // $('.tipoConsultoria').hide();
        // $('.temaConsultoria').show('fast');
    });
  });
  </script>
@endsection
