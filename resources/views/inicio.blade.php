@extends('layouts.base_campus')
@section('tittle', 'Home')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="titulosPrincipales">
                {{-- <div class="col-12"> --}}
                    <span class="tema">Tema Actual: <span>Ideación</span></span>
                {{-- </div> --}}
            </div>
            <div class="areaTrabajo">
                <div class="container">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Video</a>
                          <div>
                            <video src="video.webm" poster="presentacion.jpg" controls></video>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Mapa Visual</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Ejemplo</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link">Ejercicio</a>
                        </li>
                      </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
