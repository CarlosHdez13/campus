<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Campus</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
        html {
        position: relative;
        min-height: 100%;
        }
        body {
        margin-bottom: 96px;
        }
        .footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 102px;
        background-color: #f5f5f5;
        }

        
      
        .primerHeader{
            height: 83px;
            line-height: 55px;
            background: #1F2D35;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;  
            top: 0;
            left: 0;
            width: 100%;
        }
        
        .img-cabecera1{
            vertical-align: text-top;
            width: 121px;
            height: 41.5px;
        }
        .segundoHeader{
            height: 81px;
            line-height: 30px;
            background: #0E191E;
            left: 0;
        }
        .img-cabecera2{
            vertical-align: text-top;
        }
        .row{
            /* width: 100%; */
            margin-right: 0px !important;
        }
        .icono_campus{
            margin-top: 21px;
            margin-left: 50px;
            margin-bottom: 21px;
        }
        .barra{
            width: 55%;
            margin-left: 15%;
        }
        .texto-barra{
            font-size: 11px;
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            color: #cccccc;
        }
        .pieNaranja {
            height: 10px;
            background: #F6921E;
            position: absolute !important;
            bottom: 92px;
            left: 0;
            width: 100%;
        }
        .pie {
            height: 92px;
            background: #1F2D35;
            text-align: center;
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            bottom: 0;
            left: 0;
            width: 100%;
        }
        .img-footer{
            vertical-align: text-top;
            width: 147px;
            height: 30px;
        }
        .texto-footer{
            font-size: 11px;
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            color: #90969a;
            margin-left: 30px;
        }
        .progress{
            height: 0.4rem !important;
        }
        .nav-tabs {
            border-bottom: 0px solid #dee2e6;
        }
        .nav-tabs .nav-link {
            border: 2px solid transparent;
        }
        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            border-color: #fff #fff #1f2d35;
        }
   

        /* //////////////////////////// */
        .titulosPrincipales{
            margin-top: 49px; 
        }
        .tema{
            font-size: 15px;
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            color: #1f2d35;
        }
        .nombreTema{
            font-size: 15px;
            font-family: 'Lato', sans-serif;
            font-weight: 900;
            color: #1f2d35;
        }
        .nombre-SubTema{
            font-size: 11px;
            font-family: 'Lato', sans-serif;
            font-weight: 900;
            color: #1f2d35;
        }
        .temaTitulo{
            font-size: 15px;
            font-family: 'Lato', sans-serif;
            color: #1f2d35;
        }
        .areaTrabajo{
            position: fixed;
            left: 0;
        }
        .medio{
            margin: 0px 51px 10px 30px;
        }
        .cabeceras{
            font-size: 13px;
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            color: #1f2d35;
        }
        .tema-anterior{
            height: 51px;
            text-align: center;
            display: flex;
            justify-content: left;
            align-items: center;
            color: #f6921e;
            text-decoration: none !important;
        }
        .tema-siguiente{
            height: 51px;
            text-align: center;
            display: flex;
            justify-content: right;
            color: #f6921e;
            align-items: center;
        }
        .btn-primary {
            text-align: center;
            display: flex;
            justify-content: left;
            align-items: center;
            font-size: 11px;
            font-family: 'Lato', sans-serif;
            font-weight: 900;
            color: #ffffff;
            background-color: #f6921e;
            border-color: #f6921e;
        }
        .botones{
            height: 51px;
            text-align: center;
            display: flex;
            justify-content: right;
            color: #f6921e;
            align-items: center;
        }
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap');
	</style>
</head>
<body>
    <header>
        <div class="text-bg-dark primerHeader">
            <img class="img-cabecera1" src="{{ asset('img/recursos/logo_siembra_gris.png') }}" alt="" height="" width="">
        </div>
        <div class="border-bottom segundoHeader">
            <div class=" d-flex flex-wrap justify-content-center">
                <div class="row" style="width: 100%;">
                    <div class="col-md-4">

                        <div class="icono_campus">

                            <img class="img-cabecera2" src="{{ asset('img/recursos/icono_campus_emprendedor.png') }}" alt="" height="" width="">
                        </div>
                    </div>
                    <div class="col-md-5">

                        <div class="barra">
                            <span class="texto-barra">Tu progreso</span>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <span class="texto-barra">20%</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Begin page content -->
    <!-- <main role="main" class="container"> -->
    <main role="main">
        <div class="row">
            <div class="col-11">
                @yield('content')
            </div>
            <div class="col-1">
                @section('sidebar')
                    <div class="col-12 notificacion">
                        <img src="{{ asset('img/iconos/icono_notificacion_naranja.png') }}" alt="" height="30" width="30" >
                    </div>
                @show
            </div>
        </div>
        
        </main>
        <!-- <footer class="footer"> -->
        <footer class="footer">
            <div class="pieNaranja"></div>
            <div class="pie">
                <img class="img-footer" src="{{ asset('img/recursos/logo_liga_empresarios_2.png') }}" alt="" height="55px" width=""><span class="texto-footer">Derechos reservados 2022 </span>
            </div>
        </footer>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>    
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>