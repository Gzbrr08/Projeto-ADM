@extends('layouts.auth')

@section('body-class', 'register-page')

@section('content')
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <a href="{{ route('login') }}" class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover">
                    <h1 class="mb-0"><b>Admin</b>LTE</h1>
                </a>
            </div>
            <div class="card-body register-card-body">
                <p class="register-box-msg">Registro de novo usuário</p>

                <form action="{{ route('register') }}" method="post">
                    @csrf

                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="registerFullName" type="text" name="name" class="form-control @error('name') is-invalid @enderror "placeholder=" "value="{{ old('name') }}" />
                            <label for="registerFullName">Nome completo</label>
                        </div>
                        <div class="input-group-text">
                            <span class="bi bi-person"></span>
                        </div>
                    </div>
                    @error('name')
                        <span class="text-danger small d-block mb-1">{{ $message }}</span>
                    @enderror

                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="registerEmail" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="" value="{{ old('email') }}" />
                            <label for="registerEmail">Email</label>
                        </div>
                        <div class="input-group-text">
                            <span class="bi bi-envelope"></span>
                        </div>
                    </div>
                    @error('email')
                        <span class="text-danger small d-block mb-1">{{ $message }}</span>
                    @enderror

                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="registerPassword" type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="" />
                            <label for="registerPassword">Password</label>
                        </div>
                        <div class="input-group-text">
                            <span class="bi bi-lock-fill"></span>
                        </div>
                    </div>
                    @error('password')
                        <span class="text-danger small d-block mb-1">{{ $message }}</span>
                    @enderror

                    <div class="input-group mb-3">
                        <div class="form-floating">
                            <input id="registerPasswordConfirm" type="password" name="password_confirmation" class="form-control" placeholder="" />
                            <label for="registerPasswordConfirm">Confirm Password</label>
                        </div>
                        <div class="input-group-text">
                            <span class="bi bi-lock-fill"></span>
                        </div>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Criar</button>
                    </div>
                </form>

                <p class="mt-3 mb-0 text-center">
                    <a href="{{ route('login') }}" class="link-primary">Já tenho uma conta</a>
                </p>
            </div>
        </div>
    </div>
@endsection
