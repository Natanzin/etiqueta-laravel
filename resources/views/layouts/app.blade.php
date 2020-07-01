<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Etiquetas</title>
  <link rel="stylesheet" href="{{asset('js/bootstrap/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('js/fa/css/all.css')}}">

  <script src="{{asset('js/jquery-3.4.1.js')}}"></script>
  <script src="{{asset('js/bootstrap/js/bootstrap.bundle.js')}}"></script>
  <script src="{{asset('js/init.js')}}"></script>

</head>

<body style="background-color: whitesmoke;">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="#">Etiquetas</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/produtos">Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/imprimir">Imprimir</a>
        </li>
      </ul>
    </div>
  </nav>
  <main class="container">
    @yield('conteudo')
  </main>
  @yield('js')
</body>

</html>
