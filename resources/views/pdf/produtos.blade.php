<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDF - Produtos</title>
</head>

<body>
  <h3 style="text-align: center;">Produtos</h3>
  <p>Data de emissão: {{ date('d/M/Y') }}</p>
  <table  style="width: 100%;">
    <thead style="border-bottom: 2px solid black;">
      <tr>
        <th style="text-align: left;">Produto</th>
        <th style="text-align: right;">Valor</th>
      </tr>
    </thead>
    <tbody style="border-bottom: 2px solid black;">
      @foreach($produtos as $produto)
      <tr>
        <td style="border-bottom: 1px solid silver;">{{$produto->name}}</td>
        <td style="text-align: right;border-bottom: 1px solid silver;">R$ {{$produto->price}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

</body>

</html>