@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('produto.store') }}" method="post">
                @csrf
                
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" name="descricao">
                </div>

                <div class="form-group">
                    <label for="valor">Valor</label>
                    <input type="text" class="form-control" name="valor" placeholder="00,00">
                </div>

            <input type="hidden" name="loja_id" value="{{ $loja }}">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
@endsection