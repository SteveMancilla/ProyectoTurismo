@extends('layouts.plantillaReserva')

@section('title', 'Index reserva ')

@section('header')
    <div class="header">
        <div class="logo">Menu</div>
        <input type="checkbox" id="togle">
        <label for="toggle"> <img class="menu" src="img/menu.png" alt="menu"> </label>

        <nav class="navigation">

            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Servicios</a>
                    <ul>
                        <li><a href="{{ route('reservas.create') }}">Reservas</a></li>
                        <li><a href="#">Contratación</a></li>
                        <li><a href="#">Ayuda</a></li>
                    </ul>
                </li>
            </ul>

        </nav>

    </div>
@endsection

@section('content')
    <h1>Aqui podras revisar los diferentes destinos turisticos</h1>
@endsection