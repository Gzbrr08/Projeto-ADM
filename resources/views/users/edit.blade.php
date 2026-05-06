@extends('layouts.default')
@section('page-title', 'Editar Usuário')

@section('content')
      @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
   
    @include('users.parts.basic-detalhes')
    <br>
    @include('users.parts.profile')
    <br>
    @include('users.parts.roles')
    <br>
    @include('users.parts.interests')
    <hr class="mt-4">
    <div class="d-flex justify-content-end mt-3">
      <a href="{{ route('users.index') }}" class="btn btn-secondary">Voltar</a>
    </div>

@endsection
