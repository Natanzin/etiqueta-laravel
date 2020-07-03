<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDF - Etiquetas</title>
  <style>
    .card {
      height: 2.5cm;
      width: 5cm;
      border: 1px solid black;
      margin: 2px;
    }

    .nomeProduto {
      font-size: 10;
      padding-top: 5;
      margin: 0;
      text-align: center;
    }

    .preco {
      text-align: center;
      font-size: 40px;
    }

    .title {
      text-align: center;
      margin: 0;
      padding: 0;
    }

    .qtd {
      text-align: center;
      font-size: 12px;
      margin: 0;
      padding: 0;
    }
  </style>
</head>

<body>
  <h3 class="title">Etiquetas</h3>
  <p class="qtd">Quantidade: {{ count($produtos) }} etiquetas </p>
  <hr>
  <table>
    <tbody>
      @foreach($produtos as $produto)
      <tr>
       <td>
          <div class="card">
            <p class="nomeProduto">{{$produto->name}}</p>
            <h1 class="preco">R$ {{$produto->price}}</h1>
          </div>
        </td>
        <td>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</body>

</html>