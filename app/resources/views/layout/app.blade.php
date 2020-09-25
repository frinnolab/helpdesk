<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('', 'Help Desk')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- Styles --}}
        <link rel="stylesheet" href="{{asset('semantic/semantic.css')}}">
        <link rel="stylesheet" href="{{asset('material/css/materialize.css')}}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

         <link rel="stylesheet" href="{{asset('app.css')}}">
         @stack('styles')
    </head>
    <body>
                        <!-- Dropdown Structure -->
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="#!">Account</a></li>
                {{-- <li><a href="#!"></a></li> --}}
                <li class="divider"></li>
                <li><a href="#!">Logout</a></li>
            </ul>
            {{-- Navbar --}}
            <nav class="nav">
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo active">Help Desk</a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="sass.html">Services</a></li>
                        <li><a href="badges.html">FAQS</a></li>
                        <!-- Dropdown Trigger -->
                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">User<i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>
                </div>
            </nav>

            <div class="main">
                @yield('content')
                {{-- Footer --}}
               <footer class="footer">
                   Footer
               </footer>
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
