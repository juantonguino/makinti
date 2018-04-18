<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Makinti</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" >
    <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script>
      function initMap() {
        var uluru = {lat: 1.2145227, lng: -77.2841189};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZfRj36K_j8thlzx9BT0uU4dDBEJBAOpM&callback=initMap">

    </script>
</head>
<body>
    <nav class="w-100 p-3 navbar navbar-expand-lg navbar-light bg-light" id="navigator-makinti">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/makinti-01.png') }}" alt="Logo Makinti" height="70">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">¿Quienes Somos?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Aliados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">¡¡Haz parte!!</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Iniciar Sesion</a>
                </li>
            </ul>
        </div>
    </nav>
    <section >
        <article>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('images/galeria/banner-04.jpg') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('images/galeria/banner-03.png') }}" alt="Second slide">
                    </div>
                    <!--
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('images/galeria/makinti-04.jpg') }}" alt="Third slide">
                    </div>
                    -->
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </article>
        <hr>
        <article>
            <div class="row">
                <div class="col-sm">
                    <div class="row">
                        tecnicas
                        <img src="" alt="tecnicas">
                    </div>
                    <div class="row">
                        productos
                        <img src="" alt="Productos">
                    </div>
                </div>
                <div class="col-sm">
                    completos
                    <img src="" alt="Taller">
                </div>
                <div class="col-sm">
                    <div class="row">
                        comunidad
                        <img src="" alt="tecnicas">
                    </div>
                    <div class="row">
                        ubicacion
                        <img src="" alt="Productos">
                    </div>
                </div>
                <div class="col-sm">
                    completos
                    <img src="" alt="Blog">
                </div>
            </div>
        </article>
        <hr>
        <article>
            <div class="row text-center">
                <div class="col-sm-4" style="padding: 0px">
                    <img src="" alt="Eventos" class="rounded-circle" style="background-color:gray">
                    <h3 class="text-center"><strong>Eventos</strong></h3>
                    <p class="text-center">desc</p>
                </div>
                <div class="col-sm-4" style="padding: 0px">
                    <img src="" alt="ofertas" class="rounded-circle" style="background-color:gray">
                    <h3 class="text-center"><strong>Ofertas</strong></h3>
                    <p class="text-center">desc</p>
                </div>
                <div class="col-sm-4" style="padding: 0px">
                    <img src="" alt="ofertas" class="rounded-circle" style="background-color:gray">
                    <h3 class="text-center"><strong>Pensado para tí</strong></h3>
                    <p class="text-center">desc</p>
                </div>
            </div>
            <hr>
        </article>
    
        <!--
        <div class="row">
            <img src="{{ asset('images/banner-02.png') }}" alt="Banner makinti" width="100%">
        </div>
        -->
    </section>
    <footer width="100%" style="background-color: #B00A0C; color: #26120A">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-6">
                <a href="" style="text-decoration:none; color:#26120A">COPYRIGHT © MAKINTI. ALL RIGHTS RESERVED.</a>
                </div>
                <div class="col-6">
                <a href="#carouselExampleControls" style="text-decoration:none; color:#FFFFFF">IR ARRIBA</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-6">
                    <div class="row">
                        <h6>CONTACTENOS</h6>
                        <p>Hashitoapps es una empresa dedicada al desarrollo de 
                        software radicada en Pasto - Colombia, Programamos 
                        cualquier aplicación web o móvil con tecnologías de punta.
                        </p>
                        <div>
                            <p>Telefono: (+57)313 715 4902</p> 
                            <p>Direccion: San Felipe</p>
                            <p>Email: makinti@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <h6>ESTAMOS AQUI</h6>
                    </div>
                    <div class="row">
                        <div id="map" class="col-6" ></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>