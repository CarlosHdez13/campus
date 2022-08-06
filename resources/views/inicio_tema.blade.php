@extends('base_campus')
@section('tittle', '70/30')
<style>
  .notificacion{
    margin-top: 11em;
  }
</style>
@section('content')
  <!-- <div class="medio"> -->
    <div class="titulosPrincipales  mt-29">
      <div class="col-12">
        <span class="tema">Tema Actual: <span  class="nombreTema">Ideación</span></span>
      </div>
    </div>
    <ul class="nav nav-tabs" id="encabezados" role="tablist" style="margin-top: 40px;">
      <li class="nav-item active">
          <a class="nav-link active" id="presentacion-tab" data-toggle="tab" href="#presentacion" role="tab" aria-controls="presentacion" aria-selected="true">
          <img src="{{ asset('img/iconos/icono_presentacion.png') }}" alt="" height="16" width="16"> <span class="cabeceras">Presentación</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="preguntas-tab" data-toggle="tab" href="#preguntas" role="tab" aria-controls="preguntas" aria-selected="false">
          <img src="{{ asset('img/iconos/icono_preguntas.png') }}" alt="" height="16" width="16"> <span class="cabeceras">Cuestionario</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="radar-tab" data-toggle="tab" href="#radar" role="tab" aria-controls="radar" aria-selected="false">
          <img src="{{ asset('img/iconos/icono_radar.png') }}" alt="" height="16" width="16"> <span class="cabeceras">Radar de Riesgo</span>
        </a>
      </li>
    </ul>
    <!-- <div class="tab-content" id="contenido" style="width: 100%; height: 500px;margin-top: 30px;"> -->
    <div class="tab-content" id="contenido" style="margin-top: 30px;">
      <div  class="tab-pane fade show in active" id="presentacion" role ="tabpanel" aria-labelledby="compra-tab">
        <div style="text-align: center;">
          <!-- <img src="{{ asset('img/recursos/img_tema_presentacion.png') }}" alt="" responsive="responsive" height="511" width="681"> -->
          <img src="{{ asset('img/recursos/img_tema_presentacion.png') }}" alt="" responsive="responsive" height="" width="100%">
        </div>
      </div>
      <div class="tab-pane fade show" id="preguntas" role ="tabpanel" aria-labelledby="compra-tab">
        <div style="text-align: center;">
          <!-- <img src="{{ asset('img/recursos/img_tema_cuestionario.png') }}" alt="" responsive="responsive" height="379" width="879"> -->
          <img src="{{ asset('img/recursos/img_tema_cuestionario.png') }}" alt="" responsive="responsive" height="" width="100%">
        </div>
        <!-- aqui deberia de ir el cuestionario  -->
        <!-- <div class="row">
          <div class="col-12">
            <span class="nombre-SubTema">CUESTIONARIO DE CONOCIMIENTO</span><br><br>
            <span style="font-size: 12px;font-family: 'Lato', sans-serif;font-weight: 400;color: #1f2d35;">
              Mueve mediante las barras el nivel de conocimiento que tengas respecto a cada una de las prguntas
            </span>
            <div class="row">
              <table>
                <thead>
                  <tr>
                    <th>PREGUNTAS</th>
                    <th>MUY BAJO</th>
                    <th>BAJO</th>
                    <th>MEDIO</th>
                    <th>ALTO</th>
                    <th>MUY ALTO</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.¿Necesitas ayuda?</td>
                    <td colspan="5"><input type="range" class="form-range" min="0" max="2"  step="0.5" id="customRange3"></td>
                  </tr>
                  <tr>
                    <td>2.¿Dónde lo harás?</td>
                    <td colspan="5"><input type="range" class="form-range" min="0" max="2"  step="0.5" id="customRange3"></td>
                  </tr>
                  <tr>
                    <td>3.¿Cómo lo harás?</td>
                    <td colspan="5"><input type="range" class="form-range" min="0" max="2"  step="0.5" id="customRange3"></td>
                  </tr>
                  <tr>
                    <td>4.¿Tiempo a invertir?</td>
                    <td colspan="5"><input type="range" class="form-range" min="0" max="2"  step="0.5" id="customRange3"></td>
                  </tr>
                  <tr>
                    <td>5.¿Dinero a invertir?</td>
                    <td colspan="5"><input type="range" class="form-range" min="0" max="2"  step="0.5" id="customRange3"></td>
                  </tr>
                  <tr>
                    <td>6.¿Cúantas veces lo has hecho antes?</td>
                    <td colspan="5"><input type="range" class="form-range" min="0" max="2"  step="0.5" id="customRange3"></td>
                  </tr>
                  <tr>
                    <td>7.¿A quien beneficia?</td>
                    <td colspan="5"><input type="range" class="form-range" min="0" max="2"  step="0.5" id="customRange3"></td>
                  </tr>
                  <tr>
                    <td>8.¿Cúanto sabes de tu idea?</td>
                    <td colspan="5"><input type="range" class="form-range" min="0" max="2"  step="0.5" id="customRange3"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div> -->
      </div>
      <div class="tab-pane fade show" id="radar" role ="tabpanel" aria-labelledby="compra-tab">
        <div style="text-align: center;">
          <!-- <img src="{{ asset('img/recursos/img_tema_radar.png') }}" alt="" responsive="responsive" height="379" width="879"> -->
          <img src="{{ asset('img/recursos/img_tema_radar.png') }}" alt="" responsive="responsive" height="" width="100%">
        </div>
      </div>
    </div>
    <div class="row" style="width:100%;">
      <div class="col-4">
        <span class="tema-anterior">
          <a href="{{ ('../hoja_ruta') }}" style="text-decoration: none;display: flex; color: #f6921e;">
            <div style="text-align: center;display: flex;justify-content: left;align-items: center; margin-right: 5px">
              <img src="{{ asset('img/iconos/flecha_naranja_izquierda.png') }}" height="6px" width="6px">
            </div>
            Tema Anterior
          </a>
        </span>
      </div>
      <div class="col-4 botones">
        <button class="btn btn-primary">
          <span class="">REPRODUCIR AUDIO</span>
        </button>
      </div>
      <div class="col-4" style="margin-bottom: 86px;">
        <span class="tema-siguiente">
          <a href="{{ ('../ideacion') }}" style="text-decoration: none;display: flex; color: #f6921e;">Tema Siguiente
            <div style="text-align: center;display: flex;justify-content: left;align-items: center; margin-left: 5px;">
              <img src="{{ asset('img/iconos/flecha_naranja_derecha.png') }}" height="6px" width="6px">
            </div>
          </a>
        </span>
      </div>
     
      <div>
        <textarea style="background: #ebe9e9;width: 100%;height: 132px;margin-top: 51px;margin-bottom: 86px;border: none;" placeholder="NOTAS DEL USUARIO"></textarea>
      </div>
    </div>
            
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $( document ).ready(function() {
        console.log( "ready!" );
    });

    $(document).ready(function(){
      activaTab('presentacion');
    });

    // function activaTab(tab){
    //   window.open(tab, "presentacion");
    // };
</script>
