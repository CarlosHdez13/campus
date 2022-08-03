@extends('base_campus')
@section('tittle', 'Hoja Ruta')
<style>
  .notificacion{
    margin-top: 8em;
  }
</style>
@section('content')
  <div class="medio">
    <div class="titulosPrincipales  mt-29">
      <div class="row">
        <div class="col-8" style="align-items: center;display: flex;">
          <span class="tema">Tema Actual: <span  class="nombreTema">Hoja de Ruta</span></span>
        </div>
        <div class="col-4 botones">
          <button class="btn btn-primary">RETOMAR CURSO</button>
        </div>
      </div>
    </div>
    <Hr></Hr>
    <div class="row">
      <div class="col-12">
        <span class="nombre-SubTema">EXPLICACIÓN</span><br>
        <span style="font-size: 12px;font-family: 'Lato', sans-serif;font-weight: 900;color: #1f2d35;">Siembra tu idea 
          <span style="font-size: 12px;font-family: 'Lato', sans-serif;font-weight: 400;color: #1f2d35;">
            es una metodología que integra en un proceso de dormación empresarial el 
            <span style="font-size: 12px;font-family: 'Lato', sans-serif;font-weight: 900;color: #1f2d35;"> "Know How"</span>,
            por medio de la Tranferencia del Conocimiento, siendo funcional en cualquier ligar de tu negocio; en el prodrás
            obtener resultados en el menor tiempo posible, para que seas capaz de tomar las mejores decisiones en beneficio
            de tu idea de negocio.
          </span>
        </span>
        <div style="text-align: center; margin-bottom: 74px; margin-top: 133px;">
            <img src="{{ asset('img/iconos/ruta_diagrama_enfoque.png') }}" alt="" responsive="responsive" height="504" width="574">
        </div>
        
        <div class="row" style="width:100%;">
          <div class="col-6">
            <a href="" style="text-decoration: none;"><span class="tema-anterior">Tema Anterior</span></a>
          </div>
          <div class="col-6"  style="margin-bottom: 86px;">
            <a href="" style="text-decoration: none;"><span class=" tema-siguiente">Tema Siguiente</span></a>
          </div>
        
        </div>
      </div>
   
    </div>
  </div>
@endsection
