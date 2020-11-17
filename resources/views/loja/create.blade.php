@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <fieldset>
                <legend for="">Cadastrar Loja</legend>
            
                <form action="{{ route('loja.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nome da Loja</label>
                    <input type="text" name="nome" id="nome" value="" value="{{ old('nome') }}" class="form-control @error('nome') is-invalid @enderror">
            
                    @error('nome')
            
                        <div class="invalid-feedback">
                            {{ $message}}
                        </div>
                    @enderror
                    </div>
            
                    <div class="form-group">
                        <label for="">Cnpj</label>
                        <input type="text" name="cnpj" value="{{ old('cnpj') }}" id="cnpj"  class="form-control @error('cnpj') is-invalid @enderror">
            
                        @error('cnpj')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Endereço</label>
                        <input type="text" name="endereco" value="{{ old('endereco') }}" id="endereco"  class="form-control @error('endereco') is-invalid @enderror">
            
                        @error('endereco')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Cidade</label>
                        <input type="text" name="cidade" value="{{ old('cidade') }}" id="cidade"  class="form-control @error('cidade') is-invalid @enderror">
            
                        @error('cidade')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Estado</label>
                        <input type="text" name="estado" value="{{ old('estado') }}" id="estado"  class="form-control @error('estado') is-invalid @enderror">
            
                        @error('estado')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">País</label>
                        <input type="text" name="pais" value="{{ old('pais') }}" id="pais"  class="form-control @error('pais') is-invalid @enderror">
            
                        @error('pais')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Telefone</label>
                        <input type="text" name="telefone" value="{{ old('telefone') }}" id="telefone"  class="form-control @error('telefone') is-invalid @enderror">
            
                        @error('telefone')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">E-mail</label>
                        <input type="text" name="email" value="{{ old('email') }}" id="email"  class="form-control @error('email') is-invalid @enderror">
            
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
            
                    <button class="btn btn-primary btn-lg" type="submit">
                        <i class="fas fa-plus"></i><span class="pl-2">Cadastrar</span>
                    </button>
                </form>
            </fieldset>
        </div>
    </div>
</div>
@endsection