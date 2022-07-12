<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .primerHeader{
            background-color: #7D7B78 !important;
            /* position: fixed; */
            top: 0;
            height: 85px;
            right: 0;
            left: 0;
            z-index: 1030;
        }
        .img-cabecera1{
            margin-top: 10px;
        }
        .segundoHeader{
            background-color: #3E3D3C !important;
            /* position: fixed; */
            top: 85px;
            height: 81px;
            right: 0;
            left: 0;
            z-index: 1030;
        }
        .img-cabecera2{
            margin-top: 20px;
            margin-left: 50px;
        }
        .tema{
            margin-top: 49px;
            margin-left: 39px;
            color: #1f2d35;
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
    </style>
</head>
<body>
    <div class="primerHeader">
        <center>
            <img class="img-cabecera1" src="../img/logo_siembra_gris.png" alt="" height="70px" width="">
        </center>

    </div>
    <div class="segundoHeader">
        <div class="row">
            <div class="col-4">

                <img class="img-cabecera2" src="../img/icono_campus_emprendedor.png" alt="" height="50px" width="">
            </div>
            <div class="col-4">
                <span style="color: #cccccc">Tu progreso</span>
                <div style="color: #cccccc" class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span style="color: #cccccc">20%</span>
            </div>
            <div class="col-4">
                {{-- <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-dark p-4">
                    <h5 class="text-white h4">Collapsed content</h5>
                    <span class="text-muted">Toggleable via the navbar brand.</span>
                    </div>
                </div> --}}
                {{-- <nav class="navbar navbar-dark bg-dark"> --}}
                    {{-- <div class="container-fluid"> --}}
                    {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> --}}
                    {{-- </div> --}}
                {{-- </nav> --}}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <span class="tema">Tema Actual: <span>Ideación</span></span>
        </div>
    </div>
    <footer>
        <p>Author: Hege Refsnes<br>
        <a href="mailto:hege@example.com">hege@example.com</a></p>
    </footer>
</body>
</html>


