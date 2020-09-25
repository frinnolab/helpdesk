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
                <form class="form">
                    <div class="input-field col s6">
                      <i class="material-icons prefix">email</i>
                      <input id="email" type="text" class="validate">
                      <label for="icon_prefix">Email</label>
                    </div>
                    <div class="input-field col s6">
                      <i class="material-icons prefix">lock</i>
                      <input id="password" type="password" class="validate">
                      <label for="icon_telephone">Password</label>
                    </div>

                    <div class="input-field col s6">
                        <button class="btn waves-effect waves-light btn-large"
                            type="submit" name="action">Login
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection



@push('styles')
<link rel="stylesheet" href="{{asset('home.css')}}">
@endpush
@push('scripts')
@endpush
