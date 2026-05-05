{{-- Resetar senha --}}
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
                <p class="register-box-msg">Resetar senha</p>

                
                <form action="{{ route('password.update') }}" method="post">
                    @csrf

                    <input type="hidden" name="token" value="{{ request()->token }}" />

                    <div class="input-group mb-1">
                        <div class="form-floating">
                            <input id="registerEmail" readonly type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="" value="{{ request()->email}}" />
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
                            <label for="registerPassword">Nova Senha</label>
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
                            <label for="registerPasswordConfirm">Confirmar Nova Senha</label>
                        </div>
                        <div class="input-group-text">
                            <span class="bi bi-lock-fill"></span>
                        </div>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Resetar Senha</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
