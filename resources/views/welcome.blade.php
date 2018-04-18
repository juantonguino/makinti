<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" >
    <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navigator-makinti">
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
    <section>
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
    
        <div>
            <img src="{{ asset('images/banner-02.png') }}" alt="Banner makinti" width="100%">
        </div>
        <footer>
            <div id="copy">
                COPYRIGHT © MAKINTI. ALL RIGHTS RESERVED.
            </div>
            <div id="arriba">
                <a href="#carouselExampleControls">IR ARRIBA</a>
            </div>
            <div>
                <h3>CONTACTENOS</h3>
                    <p>Makinti es una empresa dedicada a
                        Hashitoapps es una empresa dedicada al desarrollo de 
                    software radicada en Pasto - Colombia, Programamos 
                    cualquier aplicación web o móvil con tecnologías de punta.
                    </p>
            </div>
        </footer>
    </section>
</body>
</html>