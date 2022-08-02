@extends('layouts.Registro_Empresas')

@section('title','Perfil de la empresa')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/Ingreso_perfil_de_la_empresa.css') }}">
@endsection

@section('Container_Registro_Empresas')
    <section class="main--header">
        <div class="main--header--flecha-1">
            <img src="{{ url('assets/flechas/FLECHA_INICIO_GRIS.png') }}" alt="" />
            <div class="main--header--flecha--text-1"><p>Universidad Objetivo</p></div>
        </div>
        <div class="main--header--flecha-2">
            <img src="{{ url('assets/flechas/FLECHA_INTERMEDIO.png') }}" alt="" />
            <div class="main--header--flecha--text-2"><p>Crear Cuenta de Empresa</p></div>
        </div>
        <div class="main--header--flecha-2">
            <img src="{{ url('assets/flechas/FLECHA_INTERMEDIO_GRIS.png') }}" alt="" />
            <div class="main--header--flecha--text-3"><p>Datos de la Empresa</p></div>
        </div>
        <div class="main--header--flecha-2">
            <img src="{{ url('assets/flechas/FLECHA_FINAL_GRIS.png') }}" alt="" />
            <div class="main--header--flecha--text-4"><p>Encuesta de Satisfacción</p></div>
        </div>
    </section>
    <form action="{{ route('Empresa.create' )}}" method="POST">
        @csrf
        <section id="main--formulario">
            <div class="main--formulario-formulario">
                <div class="main--formulario-texto">
                    <p>Correo Electrónico*</p>
                </div>
                <div class="main--formulario-cuadro">
                    <input type="email" placeholder="Correo de la empresa..." name="correo" required>
                </div>
                <div class="main--formulario-texto">
                    <p>Usuario*</p>
                </div>
                <div class="main--formulario-cuadro">
                    <input type="text" placeholder="Nombre de Usuario..." name="user" required>
                </div>
                <div class="main--formulario-texto">
                    <p>Contraseña*</p>
                </div>
                <div class="main--formulario-cuadro">
                    <input type="password" placeholder="Contraseña" name="password" minlength="6" required>
                </div>
                <div class="main--formulario-texto">
                    <p>*Campos obligatorios</p>
                </div>
            </div>
        </section>

        <section id="main--botones">
            <div class="main--botones-texto">
                <p>Todos los datos proporcionados serán verificados para  sersiorar su veracidad.</p>
            </div>
            <div class="main--botones-boton">
                <div class="main--botones-1">
                    <a href="{{ route('welcome')}}">Regresar</a>
                </div>
                <div class="main--botones-2">
                    <button>Siguiente</button>
                </div>
            </div>
        </section>
    </form>
@endsection