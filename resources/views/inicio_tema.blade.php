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
      <li class="nav-item">
          <a class="nav-link active" id="presentacion-tab" data-toggle="tab" href="#presentacion" role="tab" aria-controls="presentacion" aria-selected="true">
          <img src="{{ asset('img/iconos/icono_presentacion.png') }}" alt="" height="16" width="16"> <span class="cabeceras">Presentación</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="preguntas-tab" data-toggle="tab" href="#preguntas" role="tab" aria-controls="preguntas" aria-selected="true">
          <img src="{{ asset('img/iconos/icono_preguntas.png') }}" alt="" height="16" width="16"> <span class="cabeceras">Cuestionario</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="radar-tab" data-toggle="tab" href="#radar" role="tab" aria-controls="radar" aria-selected="true">
          <img src="{{ asset('img/iconos/icono_radar.png') }}" alt="" height="16" width="16"> <span class="cabeceras">Radar de Riesgo</span>
        </a>
      </li>
    </ul>
    <div class="tab-content" id="contenido" style="width: 100%;height: 393px;margin-top: 30px;">
      <!-- <div id="compra"  aria-labelledby="compra-tab">
        <h1>Ideacion</h1>
      </div> -->
      <div  class="tab-pane fade show in" id="presentacion" role ="tabpanel" aria-labelledby="compra-tab">
        <h1>Ideacion</h1>
      </div>
      <div class="tab-pane fade show" id="preguntas" role ="tabpanel" aria-labelledby="compra-tab">
        <div class="row">
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
              </table>
              
            </div>
            <!-- <div style="text-align: center; margin-bottom: 74px; margin-top: 133px;">
                <img src="{{ asset('img/iconos/ruta_diagrama_enfoque.png') }}" alt="" responsive="responsive" height="504" width="574">
            </div> -->
            
            <!-- <div class="row" style="width:100%;">
              <div class="col-6">
                <a href="" style="text-decoration: none;"><span class="tema-anterior">Tema Anterior</span></a>
              </div>
              <div class="col-6"  style="margin-bottom: 86px;">
                <a href="" style="text-decoration: none;"><span class=" tema-siguiente">Tema Siguiente</span></a>
              </div>
            
            </div> -->
          </div>
        </div>
      </div>
      <div class="tab-pane fade show" id="radar" role ="tabpanel" aria-labelledby="compra-tab">
        <h1>Radar</h1>
      </div>
    </div>
    <div class="row" style="width:100%;">
      <div class="col-5">
        <a href="" style="text-decoration: none;"><span class="tema-anterior">Tema Anterior</span></a>
      </div>
      <div class="col-2 botones">
        <button class="btn btn-primary">
          <span class="">REPRODUCIR AUDIO</span>
        </button>
      </div>
      <div class="col-5">
        <a href="" style="text-decoration: none;"><span class=" tema-siguiente">Tema Siguiente</span></a>
      </div>
    </div>
    <div>
      <textarea style="background: #ebe9e9;width: 100%;height: 132px;margin-top: 51px;margin-bottom: 86px;border: none;" placeholder="NOTAS DEL USUARIO"></textarea>
    </div>
  </div>
            
@endsection
