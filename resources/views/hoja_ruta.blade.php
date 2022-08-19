@extends('base_campus')
@section('tittle', 'Hoja Ruta')
<style>
  .notificacion{
    margin-top: 8em;
  }
</style>
@section('content')
  <!-- <div class="medio"> -->
    <div class="titulosPrincipales  mt-29">
      <div class="row">
        <div class="col-8" style="align-items: center;display: flex;">
          <span class="tema">Tema Actual: <span  class="nombreTema">Hoja de Ruta</span></span>
        </div>
        <div class="col-4">
          <div class="botones">
            <button class="btn btn-primary">
              <span style="display: flex;">RETOMAR CURSO
                <div style="text-align: center;display: flex;justify-content: left;align-items: center; margin-left: 5px;">
                  <img src="{{ asset('img/iconos/flecha_blanca_derecha.png') }}" height="6px" width="6px">
                </div>
              </span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <Hr></Hr>
    <div class="row">
      <div class="col-12">
        <div class="tab-content" id="contenido" style="margin-top: 30px;">
          <span class="nombre-SubTema">EXPLICACIÓN</span><br>
          <span style="font-size: 14px;font-family: 'Lato', sans-serif;font-weight: 900;color: #1f2d35;">
            Siembra tu idea 
          </span>
          <span style="font-size: 14px;font-family: 'Lato', sans-serif;font-weight: 400;color: #1f2d35;">
            es una metodología que integra en un proceso de formación empresarial el
          </span>
          <span style="font-size: 14px;font-family: 'Lato', sans-serif;font-weight: 900;color: #1f2d35;">
            "Know How"
          </span>
          <span style="font-size: 14px;font-family: 'Lato', sans-serif;font-weight: 400;color: #1f2d35;">
            , por medio de la Transferencia del Conocimiento, siendo funcional en cualquier etapa de tu negocio; 
            en el que podrás obtener resultados en el menor tiempo posible, para que seas capaz de tomar las mejores 
            decisiones en beneficio de tu idea de negocio.
          </span>
          <div style="text-align: center; margin-bottom: 74px; margin-top: 133px;">
              <!-- <img src="{{ asset('img/recursos/ruta_diagrama_enfoque.png') }}" alt="" responsive="responsive" height="504" width="574"> -->
              <img src="{{ asset('img/recursos/hoja_de_ruta.png') }}" alt="" responsive="responsive" height="" width="58%">
          </div>
        </div>
        
        <div class="row" style="width:100%; margin-bottom: 86px;">
          <div class="col-6">
            <span class="tema-anterior">
              <a href="{{ ('../hoja_ruta') }}" style="text-decoration: none;display: flex; color: #f6921e;">
                <div style="text-align: center;display: flex;justify-content: left;align-items: center; margin-right: 5px">
                  <img src="{{ asset('img/iconos/flecha_naranja_izquierda.png') }}" height="6px" width="6px">
                </div>
              
              Tema Anterior</span></a>
          </div>
          <div class="col-6">
            <span class="tema-siguiente">
              <a href="{{ ('../inicio_tema') }}" style="text-decoration: none;display: flex; color: #f6921e;">Tema Siguiente
                <div style="text-align: center;display: flex;justify-content: left;align-items: center; margin-left: 5px;">
                  <img src="{{ asset('img/iconos/flecha_naranja_derecha.png') }}" height="6px" width="6px">
                </div>
              </a>
            </span>
          </div>
        </div>
      </div>
   
    </div>
  <!-- </div> -->
@endsection
