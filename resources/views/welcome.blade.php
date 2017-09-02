<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gestion del Curso</title>
        @include('layouts.welcome')
        <script type="text/javascript" src="{{ asset('js/code.js') }}"></script>
    </head>
    <body>

        <div class="flex-center position-ref full-height">
          <div class="top-left links">
            <a href="http://www.itmexicali.edu.mx">Instituto Tecnologico de Mexicali</a>
          </div>

            @if (Route::has('login'))
                    <div id="desk" class="top-right links">
                        @if (Auth::check())
                            <a href="{{ url('/home') }}">Inicio</a>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Cerrar Sesion
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @else
                            <a href="{{ url('/login') }}">Iniciar Sesion</a>
                        @endif
                    </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                  Sistema de Gestión de Curso
                </div>
            </div>
        </div>
    </body>
</html>
