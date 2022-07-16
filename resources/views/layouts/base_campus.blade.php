<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <style>
        .primerHeader{
            height:14%;
            line-height:50px;
            background:#1f2d35;
            text-align:center;
            position:absolute;
            top:0;
            left:0;
            width:100%;
        }
        .img-cabecera1{
            vertical-align: text-top;
        }
        .segundoHeader{
            height:12%;
            line-height:30px;
            background:#3E3D3C;
            position:absolute;
            top:14%;
            left:0;
            width:100%;
        }
        .img-cabecera2{
            vertical-align: text-top;
        }
        .tema{
            /* margin-top: 49px; */

        }
        .footer {
            text-align: center;
            padding: 3px;
            background-color: DarkSalmon;
            color: white;
        }
        .row{
            width: 100%;
        }
        .icono_campus{
            padding-top: 2.7%;
            padding-left: 10%;
        }
        .barra{
            width: 35%;
            margin-left: 10%;
        }
        .titulosPrincipales{/
            color: #1f2d35;
            position: fixed;
            top: 26%;
            left: 0;
            width: 100%;
            height: 10%;
            margin-left: 5%;
            line-height: 50px;
        }
        .areaTrabajo{
            /* color: #1f2d35; */
            position: fixed;
            top: 36%;
            left: 0;
            width: 100%;
            height: 10%;
            margin-left: 5%;
            line-height: 50px;
        }
        .pie {
            height:92px;
            line-height:50px;
            background:#1f2d35;
            /* color:white; */
            text-align:center;
            position:absolute;
            bottom:0;
            left:0;
            width:100%;
        }
        .hijo {
  width: 50px;
  height: 50px;
  background-color: red;
  /* centrar vertical y horizontalmente */
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -25px 0 0 -25px; /* aplicar a top y al margen izquierdo un valor negativo para completar el centrado del elemento hijo */
}
    </style>
</head>
<body>
    @yield('content')

    <div class="primerHeader">
        <img class="img-cabecera1" src="{{ asset('img/recursos/logo_siembra_gris.png') }}" alt="" height="70px" width="">
</div>
<div class="segundoHeader">
    <div class="row">
        <div class="col-md-4">

            <div class="icono_campus">

                <img class="img-cabecera2" src="{{ asset('img/recursos/icono_campus_emprendedor.png') }}" alt="" height="50" width="">
            </div>
        </div>
        <div class="col-md-8">

            <div class="barra">
                <span style="color: #cccccc">Tu progreso</span>
                <div style="color: #cccccc" class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span style="color: #cccccc">20%</span>

            </div>
        </div>
    </div>
</div>


<div class="pie">
        <img class="img-cabecera1" src="{{ asset('img/recursos/logo_liga_empresarios.png') }}" alt="" height="55px" width="">
</div>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
