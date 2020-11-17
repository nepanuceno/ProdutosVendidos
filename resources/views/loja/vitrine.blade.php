@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ml-1">
            <a href="{{ route('produto.create',['id'=>$loja->id])}}" class="btn btn-primary">Adicionar Produto</a>
        </li>   
      </ul>
    </div>
</nav>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Produtos de {{ $loja->nome }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul class="list-group list-group-flush">
                        @forelse($produtos as $produto)
                    <li class="list-group-item"><a href="/vitrine/{{$produto->id}}/">{{ $produto->descricao }}</a></li>
                        @empty
                        <div class="alert alert-success" role="alert">
                            A Loja ainda não possui produtos
                        </div>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection