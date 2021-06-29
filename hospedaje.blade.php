<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Rocio de Luna</title>
    <link rel="icon" type="image/png" href="{{ url('/static/img/logo.png') }}  "/>
    <!-- css bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/static/css/hospedaje.css') }}  ">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

    <!-- Compiled and minified CSS MATERIALIZE-->
    <link rel="stylesheet" href="{{ url('/static/css/materialize.min.css') }}  ">
    <!-- Compiled and minified JavaScript MATERIALIZE -->
    <script src="{{ url('/static/js/materialize.js') }}  "></script>


    <!-- script de swipe para hacer un slide de fotos -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <style>
        .swiper-container {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 200px;
        }
        .swiper-slide {
            width: 300px;
            height: 300px;
            position: relative;
            background-position: bottom;
            background-size: cover;
            box-shadow: 0px 50px 70px rgba(0,0,0,0.3),
            0px 10px 10px rgba(0,0,0,0.1);
        }
        .swiper-slide::after{
            content: "";
            background-image: inherit;
            width: inherit;
            height: 40%;
            position: absolute;
            bottom: -41%;
            transform: scaleY(-1);
            background-position: bottom;
            background-size: cover;
            opacity: 0.4;
        }
        .swiper-slide::before{
            content: "";
            width: inherit;
            height: 42%;
            position: absolute;
            bottom: -42%;
            background: linear-gradient(to bottom, rgba(255,255,255,0.3), white);
            z-index: 1;
        }
    </style>
</head>
<body>


    <!-- BARRA DE NAVEGACION QUE SE OCULTA PARA EL INTRO--->
    <div id="menu-area">
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ url('/static/img/logo.png') }}  " alt="">
            </a>
        </div>
        <ul>
            <li class="nav-item"><a href="{{ url('/') }}">Inicio</a></li>
            <li ><a href="{{ url('hospedaje') }}">Casa</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Departamentos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="drop">
                    <a class="dropdown-item" href="#hospedajes">Dpto Nº1</a>
                    <a class="dropdown-item" href="#hospedajes">Dpto Nº2</a>
                    <a class="dropdown-item" href="#hospedajes">Dpto Nº3</a>
                    <a class="dropdown-item" href="#hospedajes">Dpto Nº4</a>
                </div>
            </li>
            <li class="nav-item"><a href="#contacto"> Contacto </a></li>

        </ul>
    </div>

    <div class="divider"></div>



    <section >
        <div class="container" >
          <div class="card">
           <div class="card-content">
               <div class="row">
                <form class="col s12">
                    <div class="center">
                      <label class="black-text">
                        <h3><b>CONTACTO</b></h3>
                      </label>
                    </div>
                    <div class="center">
                      <label class="dark-text">
                        <h6>Para mas información o reserva:</h6>
                      </label>
                    </div>
                </form>
               </div>
           </div>
          </div>
        </div>
    </section>





<!-- javascript bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- script de swipe para hacer un slide de fotos -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>


    $(document).onload;

        M.AutoInit();

  </script>

</body>
</html>

