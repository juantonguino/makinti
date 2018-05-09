@extends('layouts.makintisite')
@section('content')
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
            <div class="container">
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
            </div>
        </article>
        <hr>
        <article>
            <div class="container">
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
                <div class="row text-center">
                    <div class="col-12">
                        <button type="button" class="btn"><h6>Ver Más</h6></button>
                    </div>
                </div>
            </div>
        </article>
        <hr>
        <!--
        <div class="row">
            <img src="{{ asset('images/banner-02.png') }}" alt="Banner makinti" width="100%">
        </div>
        -->
@endsection