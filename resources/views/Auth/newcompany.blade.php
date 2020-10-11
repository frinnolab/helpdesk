@extends('layout.app')
@section('content')
<div class="sign_up">

    <div class="card">
        <label class="card-title" >New Company</label>
        <div class="card-content">
            {{-- <p>Hi {{$data->fullname}}</p> --}}
            <form class="form" action="{{route('companynew')}}" method="POST">
                {{ csrf_field() }}
                <p>STEP 2: Company Information</p>
                        <div class="input-field col s6">
                            {{-- <i class="material-icons prefix">email</i> --}}
                            {{-- <i class="address-book icon"></i> --}}
                            <input id="fullname" name="fullname" type="text" class="validate">
                            <label for="icon_prefix">Fullname</label>
                          </div>

                          <div class="input-field col s6">
                            {{-- <i class="material-icons prefix">lock</i> --}}
                            <input id="email" name="email" type="email" class="validate">
                            <label for="icon_telephone">Email</label>
                          </div>
                          <div class="input-field col s6">
                            {{-- <i class="material-icons prefix">lock</i> --}}
                            <input id="address" name="address" type="text" class="validate">
                            <label for="icon_telephone">Address</label>
                          </div>

                          <div class="input-field col s6">
                            {{-- <i class="material-icons prefix">lock</i> --}}
                            <input id="contact" name="contact" type="number" class="validate">
                            <label for="icon_telephone">Contact</label>
                          </div>
                          <div class="input-field col s6">
                            {{-- <i class="material-icons prefix">lock</i> --}}
                            <input id="password" name="password" type="password" class="validate">
                            <label for="icon_telephone">Password</label>
                          </div>

                          <div class="input-field col s6">
                            {{-- <i class="material-icons prefix">lock</i> --}}
                            <input id="password2" name="password2" type="password" class="validate">
                            <label for="icon_telephone">Confirm Password</label>
                          </div>

                    <div class="input-field col s6">
                        <button class="btn waves-effect waves-light btn-large btn_sgnp"
                            type="submit" name="action">Save
                        </button>
                    </div>
            </form>

        </div>
    </div>
</div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{asset('design/signup.css')}}">
<style>
.sign_up{
    padding: 30px;
}

.card{
    padding: 10px
}
.card-title{
    margin: 30px 20px;
}
</style>
@endpush
@push('scripts')
@endpush
