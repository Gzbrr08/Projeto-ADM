{{-- Recuperação de senha --}}
@extends('layouts.auth')
@section('body-class', 'login-page')

@section('content')
    <div class="login-box">
      <div class="login-logo">
        <a href="{{ route('login') }}"><b>Admin</b>LTE</a>
      </div>
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Insira seu email para recuperar a senha</p>

          @session('status')
          <div class="alert alert-success" role="alert"> 
            {{ $value }}
            </div>
          @endsession

          <form action="{{ route('password.email') }}" method="post">
            @csrf
            <div class="input-group mb-1">
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" />
              <div class="input-group-text">
                <span class="bi bi-envelope"></span>
              </div>
            </div>
            @error('email')
              <span class="text-danger small d-block mb-1">{{ $message }}</span>
            @enderror

            <div class="mt-3 text-center">
              <button type="submit" class="btn btn-primary">Link para recuperar senha</button>
            </div>
          </form>

          <p class="mb-0 mt-2 text-center">
            <a href="{{ route('login') }}">Voltar para Login</a>
          </p>
        </div>
      </div>
    </div>
@endsection
