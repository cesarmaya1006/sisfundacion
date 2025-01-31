@extends('extranet.app')
@section('cuerpo')
<div class="row">
    <div class="col-12">
        <div id="carouselExample" class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('imagenes/slides/slide1.png')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('imagenes/slides/slide2.png')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('imagenes/slides/slide3.png')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('imagenes/slides/slide4.png')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('imagenes/slides/slide5.png')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<br><br>
<div class="row d-flex justify-content-evenly mb-5">
    <div class="col-12 col-md-3 pt-3" style="border: 1px solid black;box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);">
        <div class="row">
            <div class="col-12">
                <img src="{{asset('imagenes/slides/card1.jpg')}}" class="img-fluid w-100" alt="...">
            </div>
            <div class="col-12 text-center">
                <h3><strong>Apadrina</strong></h3>
            </div>
            <div class="col-12">
                <p style="text-align: justify;text-justify: inter-word;">Tu puedes generar un gran impacto en la vida de un niño, acompáñalo en su recorrido.</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-3 pt-3" style="border: 1px solid black;box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);">
        <div class="row">
            <div class="col-12">
                <img src="{{asset('imagenes/slides/card2.jpg')}}" class="img-fluid w-100" alt="...">
            </div>
            <div class="col-12 text-center">
                <h3><strong>Campañas</strong></h3>
            </div>
            <div class="col-12">
                <p style="text-align: justify;text-justify: inter-word;">Te proponemos formas variadas de participar activamente en la educación de nuestros niños.</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-3 pt-3" style="border: 1px solid black;box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);">
        <div class="row">
            <div class="col-12">
                <img src="{{asset('imagenes/slides/card3.jpg')}}" class="img-fluid w-100" alt="...">
            </div>
            <div class="col-12 text-center">
                <h3><strong>Voluntariado</strong></h3>
            </div>
            <div class="col-12">
                <p style="text-align: justify;text-justify: inter-word;">Tu participación voluntaria es una fuerza de trabajo que se suma a la labor de nuestros profesionales.</p>
            </div>
        </div>
    </div>
</div>
@endsection
