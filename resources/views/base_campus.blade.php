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
	  margin-bottom: 60px;
	}
	.footer {
	  position: absolute;
	  bottom: 0;
	  width: 100%;
	  height: 102px;
	  background-color: #f5f5f5;
	}

	
	body > .container {
	  /* padding: 60px 15px 0; */
	}
	.container {
	  /* margin: 10px ; */
	}
	.container .text-muted {
	  /* margin: 20px 0; */
	}

	.footer > .container {
	  /* padding-right: 15px; */
	  /* padding-left: 15px; */
	}

	code {
	  font-size: 80%;
	}


	.container .text-muted {
	  /* margin: 20px 0; */
	}

    .primerHeader{
        height: 83px;
        line-height: 55px;
        background: #1F2D35;
        text-align: center;
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
            line-height: 30px;
            background: #0E191E;
            left: 0;
        }
        .img-cabecera2{
            vertical-align: text-top;
        }
        .row{
            width: 100%;
        }
        .icono_campus{
            padding-top: 21px;
        }
        .barra{
            width: 50%;
            /* margin-left: 10%; */
        }
        .pieNaranja {
            height:92px;
            line-height:50px;
            background:#F6921E;
            text-align:center;
            position:absolute;
            bottom: 10px;
            left:0;
            width:100%;
        }
        .pie {
            height:92px;
            line-height:67px;
            background:#1F2D35;
            text-align:center;
            position:absolute;
            bottom:0;
            left:0;
            width:100%;
        }
	</style>
</head>
<body>
	
 
    <header>
    <div class="px-3 py-2 text-bg-dark primerHeader">
        <div class="container " >
            <!-- <div > -->
                <img class="img-cabecera1" src="{{ asset('img/recursos/logo_siembra_gris.png') }}" alt="" height="" width="">
            <!-- </div> -->
        </div>
    </div>
    <div class="px-3 py-2 border-bottom mb-3 segundoHeader">
        <div class="container  d-flex flex-wrap justify-content-center">
            <div class="row ">
                <div class="col-md-4">

                    <div class="icono_campus">

                        <img class="img-cabecera2" src="{{ asset('img/recursos/icono_campus_emprendedor.png') }}" alt="" height="" width="">
                    </div>
                </div>
                <div class="col-md-8">

                    <div class="barra">
                        <span style="color: #cccccc">Tu progreso</span>
                        <div style="color: #cccccc" class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                        <span style="color: #cccccc">20%</span>

                    </div>
                </div>
            </div>
        </div>
    </div>
  </header>

    <!-- Begin page content -->
    <!-- <main role="main" class="container"> -->
    <main role="main" style="margin-bottom: 15%;">
        <!-- <div class="row"> -->
            <div class="col-12">
                @yield('content')
            </div>
            <!-- <div class="col-4">
                @section('sidebar')
                    <h2>Barra lateral</h2>
                @show
            </div> -->
        <!-- </div> -->
    </main>

    <footer class="footer">
      <div class="container">
            <div class="pieNaranja">
                <!-- <img class="img-cabecera1" src="{{ asset('img/recursos/logo_liga_empresarios_2.png') }}" alt="" height="55px" width=""> -->
            </div>
            <div class="pie">
                <img class="img-cabecera1" src="{{ asset('img/recursos/logo_liga_empresarios_2.png') }}" alt="" height="55px" width="">
            </div>
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