@extends('layouts.app')

@section('conteudo')
<h1>Produtos</h1>

<a href="/produtos/create" class="btn btn-warning">Novo Produto</a>
<br><br>
<table class="table table-striped table-hover" style="background: whitesmoke; border-radius: 15px; ">
  <thead>
    <tr>
      <th class="text-right">ID</th>
      <th>Nome</th>
      <th>Valor</th>
      <th class="text-right"> Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($produtos as $produto)
    <tr>
      <td class="text-right">{{$produto->id}}</td>
      <td>{{$produto->name}}</td>
      <td>{{$produto->price}}</td>
      <td class="text-right">
        <a href="/produtos/{{$produto->id}}" class="btn btn-sm" title="Editar produto"><i class="fa fa-edit" style="color: blue;"></i></a>&nbsp;
        <a href="/produtos/{{$produto->id}}/destroy" class="btn btn-sm"><i class="fa fa-trash" style="color: red;" title="Excluir produto"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection