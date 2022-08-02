<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') }}"></script>
        <script src="{{ asset('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') }}"></script>
        @yield('styles') 
        @yield('scripts')          
    </head>
    
    <body>
        
        <header>
            <div class="header--div--img-1">
                <img src="{{ url('assets/img/u26.png') }}" alt="" />
            </div>
            <div class="header--Title">
                <p>Sistema de Seguimiento de Egresados y Bolsa de Trabajo</p>
            </div>
            <div class="header--div--img-2">
                <img src="{{ url('assets/img/u43.png') }}" alt="" />
            </div>
        </header>

        <main>
            <section class="main--section">
                <section class="main--container">
                    @yield('Container_Registro_Empresas')
                </section>
            </section>
        </main>

        <footer>
            <div class="footer--container--1">
                <img src="{{ url('assets/img/u26.png') }}" alt="" />
            </div>
            <div class="footer--container--2">    
                
                <div class="footer--Title">
                    <div class="footer--title--1">
                        <p>Sobre SUNEO</p>
                    </div>
                    <div class="footer--title--1">
                        <p>Aviso de Privacidad</p>
                    </div>
                    <div class="footer--title--1">
                        <p>Empresas</p>
                    </div>
                    <div class="footer--title--1">
                        <p>Ayuda</p>
                    </div>
                </div>
                
                <div class="footer--Text">
                    <div class="footer--title--2-1">
                        <p>Coordinación de Vinculación de Alumnos y Egresados UTM</p>
                    </div>
                    <div class="footer--title--2-2">
                        <p>Teléfonos: (953) 53 203 99 o (953) 53 202 14 ext. 113 o 116</p>
                    </div>
                </div>
                
                <div class="footer--Text">
                    <div class="footer--title--2-1">
                        <p>De Lunes a Viernes de 8:00 a 13:00 y de 16:00 a 19:00 hrs</p>
                    </div>
                    <div class="footer--title--2-2">
                        <p>Carretera a Acatlima Km. 2.5 Huajuapan de León, Oaxaca, México C.P 69000</p>
                    </div>
                </div>
                
                <div class="footer--Text">
                    <div class="footer--title--2-1">
                        <p>SUNEO, Oaxaca, México. 2020</p>
                    </div>
                </div>
            </div>
            <div class="footer--container--3">
                <img src="{{ url('assets/img/u14.png') }}" alt="" />
            </div>
        </footer>

    </body>
</html>