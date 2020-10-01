@extends('layout.app')
@section('content')
<div class="home">
    <div class="home_left">
        <h5>Welcome to our Help Desk.</h5>
        <h1>How can we help...?</h1>
    </div>

    <div class="home_right">
        <div class="card">
            <label class="card-title" >Login to your Company</label>
            <div class="card-content">
                <form class="form" method="POST" action="{{route('logon')}}" >
                    {{ csrf_field() }}
                    <div class="input-field col s6">
                      {{-- <i class="material-icons prefix">email</i> --}}
                      {{-- <i class="address-book icon"></i> --}}
                      <input id="email" name="email" type="email" class="validate">
                      <label for="icon_prefix">Email</label>
                    </div>
                    <div class="input-field col s6">
                      {{-- <i class="material-icons prefix">lock</i> --}}
                      <input id="password" type="password" name="password" class="validate">
                      <label for="icon_telephone">Password</label>
                    </div>

                    <button class="btn waves-effect waves-light btn-large btn_sgnp"
                        type="submit" name="action">Login
                    </button>

                    <a href="{{route('signupform')}}" class="card-title sgn-up">
                        Sign Up
                    </a>
                    {{-- <a href="{{route('adminform')}}" class="card-title sgn-up">
                        Sign Up Admin
                    </a> --}}
                </form>

            </div>
        </div>
    </div>
</div>

@endsection



@push('styles')
<link rel="stylesheet" href="{{asset('design/homeo.css')}}">
@endpush
@push('scripts')
@endpush
