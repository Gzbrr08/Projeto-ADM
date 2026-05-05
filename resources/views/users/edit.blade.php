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
@endsection