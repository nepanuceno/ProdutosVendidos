@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h4>Viculo de usuário com Loja</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('user-loja.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <select class="itemUser form-control" name="itemUser"></select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                            <select class="itemLoja form-control" name="itemLoja"></select>
                            </div>
                        </div>

                        <button class="btn btn-success" type="submit">Vincular</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  
<script type="text/javascript">

$('.itemUser').select2({
  placeholder: 'Selecione o Usuário',

  ajax: {
    url: '/user_ajax',
    dataType: 'json',
    delay: 250,

    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
              return {
                  text: item.name,
                  id: item.id
              }
          })
      };
    },

    cache: true
  }

});

$('.itemLoja').select2({
  placeholder: 'Selecione a Loja',

  ajax: {
    url: '/lojas_ajax',
    dataType: 'json',
    delay: 250,

    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
              return {
                  text: item.nome,
                  id: item.id
              }
          })
      };
    },

    cache: true
  }

});

</script>
@endsection