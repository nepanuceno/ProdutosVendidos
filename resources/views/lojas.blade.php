@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        {{-- <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li> --}}
        <li class="nav-item ml-1">
            <a href="{{ url('/loja/create')}}" class="btn btn-primary">Adicionar Loja</a>
        </li>
        <li class="nav-item ml-1">
            <a href="{{ url('/user-loja/create')}}" class="btn btn-primary">Vincular Usuário com Loja</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li> --}}
      </ul>
    </div>
  </nav>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lojas</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul class="list-group list-group-flush">
                        @forelse($lojas as $loja)
                    <li class="list-group-item"><a href="/vitrine/{{$loja->id}}/">{{ $loja->nome }}</a></li>
                        @empty
                            Usuário não possui uma loja vinculada
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection