@extends('layouts.app')

@section('title', 'Login')

@section('content')
@include('sweetalert::alert')
<style>
    .buttonpw {
        background: transparent;
        border: none;
        color: #4E73DF; 
        font-size: 14px;
        cursor: pointer;
    }
    .buttonpw:hover {
        background: transparent;
        border: none;
        color: #4E73DF; 
        font-size: 14px;
        cursor: pointer;
    }
    
    .buttonpw:active{
        background: transparent;
        border: none;
        color: #4E73DF; 
        font-size: 14px;
        cursor: pointer;
    }

</style>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class=" col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>

                                <form class="user" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group">
                                        <input id="email" type="email" class="form-control form-control-user form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus"  aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input id="password" type="password" class="form-control form-control-user form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        <div class="text-right">
                                            <button type="button" class="btn btn-outline-primary buttonpw btn-sm" id="showPasswordButton">
                                                Show password
                                            </button>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input form-check-input" name="remember" id="customCheck" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        {{ __('Login') }}
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelector('#showPasswordButton').addEventListener('click', function() {
    var passwordField = document.querySelector('#password');
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        this.textContent = 'Hide password';
    } else {
        passwordField.type = 'password';
        this.textContent = 'Show password';
    }
});
</script>
@endsection
