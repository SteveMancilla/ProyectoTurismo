@extends('layouts.plantillaReserva')

@section('title', 'Index reserva ')

@section('header')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="{{ asset('css1/style.css') }}">

    <div class="header">
        <div class="logo">Destinos Turisticos</div>
        <ul class="menu">
            <li>Inicio</li>
            <li>Destinos Turisticos</li>
            <li><a href="#">Reservas</a></li>
            <li>login</li>
        </ul>

    </div>
@endsection

@section('content')

<div class="slider">
    <!-- list Items -->
    <div class="list">
        <div class="item active">
            <img src="{{ asset('css1/img/img1.png') }}">
            <div class="content">
                <p>design</p>
                <h2>Slider 01</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, neque?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, ex.
                </p>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('css1/img/img2.jpg') }}">
            <div class="content">
                <p>design</p>
                <h2>Slider 02</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, neque?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, ex.
                </p>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('css1/img/img3.jpg') }}">
            <div class="content">
                <p>design</p>
                <h2>Slider 03</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, neque?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, ex.
                </p>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('css1/img/img4.jpg') }}">
            <div class="content">
                <p>design</p>
                <h2>Slider 04</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, neque?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, ex.
                </p>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('css1/img/img5.jpg') }}">
            <div class="content">
                <p>design</p>
                <h2>Slider 05</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, neque?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, ex.
                </p>
            </div>
        </div>
    </div>
    <!-- button arrows -->
    <div class="arrows">
        <button id="prev"><</button>
        <button id="next">></button>
    </div>
    <!-- thumbnail -->
    <div class="thumbnail">
        <div class="item active">
            <img src="{{ asset('css1/img/img1.png') }}">
            <div class="content">
                Name Slider
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('css1/img/img2.jpg') }}">
            <div class="content">
                Name Slider
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('css1/img/img3.jpg') }}">
            <div class="content">
                Name Slider
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('css1/img/img4.jpg') }}">
            <div class="content">
                Name Slider
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('css1/img/img5.jpg') }}">
            <div class="content">
                Name Slider
            </div>
        </div>
    </div>
</div>

<section>
    <h2>Destinos Populares</h2>
    <div class="popular-content">
        <img src="{{ asset('css1/img/g1.jpg') }}" alt="">
        <img src="{{ asset('css1/img/g2.jpg') }}" alt="">
        <img src="{{ asset('css1/img/g3.jpg') }}" alt="">
        <img src="{{ asset('css1/img/g4.jpg') }}" alt="">
        <img src="{{ asset('css1/img/g5.jpg') }}" alt="">
        <img src="{{ asset('css1/img/g6.jpg') }}" alt="">
        <img src="{{ asset('css1/img/g7.jpg') }}" alt="">
    </div>
</section>

<main class="product container">

    <h2>Todos los Destinos turisticos</h2>

    <div class="product-content">
        <div class="product-1">
            <img src="{{ asset('css1/img/l1.jpg') }}" alt="">
            <div class="producto-txt">
                <h3>juego lorem</h3>
                <div class="price">
                    <p>$500</p>
                    <a href="{{ route('reservas.create') }}" class="btn-2">Contratar</a>
                </div>
            </div>
        </div>

        <div class="product-1">
            <img src="{{ asset('css1/img/l2.jpg') }}" alt="">
            <div class="producto-txt">
                <h3>juego lorem</h3>
                <div class="price">
                    <p>$500</p>
                    <a href="#" class="btn-2">Contratar</a>
                </div>
            </div>
        </div>

        <div class="product-1">
            <img src="{{ asset('css1/img/l3.jpg') }}" alt="">
            <div class="producto-txt">
                <h3>juego lorem</h3>
                <div class="price">
                    <p>$500</p>
                    <a href="#" class="btn-2">Contratar</a>
                </div>
            </div>
        </div>

        <div class="product-1">
            <img src="{{ asset('css1/img/l4.jpg') }}" alt="">
            <div class="producto-txt">
                <h3>juego lorem</h3>
                <div class="price">
                    <p>$500</p>
                    <a href="#" class="btn-2">Contratar</a>
                </div>
            </div>
        </div>

        <div class="product-1">
            <img src="{{ asset('css1/img/l5.jpg') }}" alt="">
            <div class="producto-txt">
                <h3>juego lorem</h3>
                <div class="price">
                    <p>$500</p>
                    <a href="#" class="btn-2">Contratar</a>
                </div>
            </div>
        </div>

        <div class="product-1">
            <img src="{{ asset('css1/img/l6.jpg') }}" alt="">
            <div class="producto-txt">
                <h3>juego lorem</h3>
                <div class="price">
                    <p>$500</p>
                    <a href="#" class="btn-2">Comprar</a>
                </div>
            </div>
        </div>

        <div class="product-1">
            <img src="{{ asset('css1/img/l7.jpg') }}" alt="">
            <div class="producto-txt">
                <h3>juego lorem</h3>
                <div class="price">
                    <p>$500</p>
                    <a href="#" class="btn-2">Comprar</a>
                </div>
            </div>
        </div>

        <div class="product-1">
            <img src="{{ asset('css1/img/l8.jpg') }}" alt="">
            <div class="producto-txt">
                <h3>juego lorem</h3>
                <div class="price">
                    <p>$500</p>
                    <a href="#" class="btn-2">Comprar</a>
                </div>
            </div>
        </div>

        <div class="product-1">
            <img src="{{ asset('css1/img/l9.jpg') }}" alt="">
            <div class="producto-txt">
                <h3>juego lorem</h3>
                <div class="price">
                    <p>$500</p>
                    <a href="#" class="btn-2">Comprar</a>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection

@section('script')
    <script src="{{ asset('css1/app.js') }}"></script>
@endsection