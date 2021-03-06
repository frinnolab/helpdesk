<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('', 'Help Desk')}}</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        {{-- <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{url('/semantic/themes/fonts/outline-icons.svg')}}" rel="stylesheet"> --}}

        {{-- Styles --}}
        <link rel="stylesheet" href="{{asset('semantic/semantic.css')}}">
        <link rel="stylesheet" href="{{asset('material/css/materialize.css')}}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

         <link rel="stylesheet" href="{{asset('design/app.css')}}">
         @stack('styles')
    </head>
    <body>

            {{-- Navbar --}}
            <nav class="nav">
                <div class="nav-wrapper">
                    <a href="{{route('home')}}" class="brand-logo active">Help Desk</a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="{{route('services')}}">Services</a></li>
                        <li><a href="badges.html">FAQS</a></li>
                        @guest
                            {{-- <li><a href="{{route('home')}}">Login</a></li>

                            @if (Route::has('adminform'))
                                <li><a href="{{route('adminform')}}">Register</a></li>
                            @endif --}}
                        @else
                        <!-- Dropdown Trigger -->
                        <li>
                            <a class="dropdown-trigger" href="#!" data-target="dropdown1">{{ Auth::user()->fullname }}
                                    <i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>

                                      <!-- Dropdown Structure -->
                        <ul id="dropdown1" class="dropdown-content">
                            @if (Auth::user())
                                @if (Auth::user()->role_id == 1)
                                    <li><a href="{{route('admindash')}}">Account</a></li>
                                @endif
                            @else
                                <li><a href="{{route('home')}}">Login</a></li>
                            @endif
                            {{-- <li><a href="#!"></a></li> --}}
                            <li class="divider"></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                        @endguest
                    </ul>
                </div>
            </nav>

            <div class="main">
                @yield('content')
                {{-- Footer --}}
               {{-- <footer class="footer">
                   Version 1.0
               </footer> --}}
            </div>
            <script src="{{asset('jquery-3.4.1.min.js')}}"></script>
            <script src="{{asset('semantic/semantic.js')}}"></script>
            <script src="{{asset('material/js/materialize.js')}}"></script>
            @stack('scripts')

            <script>
                $('document').ready(()=>{
                    $(".dropdown-trigger").dropdown();
                });
            </script>

    </body>
</html>
