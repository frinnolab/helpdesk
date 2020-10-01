@extends('layout.app')
@section('content')
<div class="sign_up">

    <div class="card">
        <label class="card-title" >New Company</label>
        <div class="card-content">
            <form class="form" action="{{route('signup')}}" method="POST">
                {{ csrf_field() }}
                <p>STEP 1: Company Admin/ Contact Person Information</p>
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
                            <input id="mobile" name="mobile" type="number" class="validate">
                            <label for="icon_telephone">Mobile</label>
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

                          <div class="input-field col s6" hidden>
                            {{-- <i class="material-icons prefix">lock</i> --}}
                            <input id="company_id" name="company_id" type="text" class="validate">
                            <label for="icon_telephone"></label>
                          </div>

                          <div class="input-field col s6" hidden>
                            {{-- <i class="material-icons prefix">lock</i> --}}
                            <input id="role_id" name="role_id" type="number" value=3>
                            <label for="icon_telephone"></label>
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
