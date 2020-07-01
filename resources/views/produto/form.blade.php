@extends('layouts.app')

@section('conteudo')
<h1>Novo Produto</h1>


<br><br>
<div style="border: 1px solid rgb(102, 255, 102); padding: 20px;">
  <form action="/produtos" method="POST" class="">
    @csrf
    <input type="hidden" name="id" id="id" value="{{$produto->id}}">
    <div class="form-group row">
      <label for="name" class="col-sm-1 col-form-label text-center">Nome</label>
      <div class="col-sm-11">
        <input autofocus type="text" class="form-control" id="name" name="name" placeholder="Insira aqui o nome do produto!" value="{{$produto->name}}">
        <div id="mensagemNome" class="text-danger"></div>
      </div>
    </div>
    <div class="form-group row">
      <label for="price" class="col-sm-1 col-form-label text-center">Preço</label>
      <div class="col-sm-11">
        <input type="text" class="form-control" id="price" name="price" placeholder="R$ 0,00" value="{{$produto->price}}">
      </div>
    </div>
    <div class="text-center">
      <input type="submit" value="Enviar" class="btn btn-success">&nbsp;
      <a href="/produtos" class="btn btn-danger">Cancelar</a>
    </div>
</div>
</form>
@endsection

@section('js')
<script>

  $('#name').change(function() {
    $.ajax({
      url: '/produtos/verifica-nome/' + $('#name').val(),
      success: function(existeNome) {
        if(existeNome > 0){
          $('#mensagemNome').html("O produto " + $('#name').val() + " já existe!");
          $('#name').val('');
        } else {
          $('#mensagemNome').html("");
        }
      }
    })
  });

</script>
@endsection