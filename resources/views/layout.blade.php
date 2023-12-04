<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body{ background-image: url(https://img.freepik.com/fotos-gratis/conceito-de-plano-de-fundo-do-estudio-abstrato-vazio-luz-gradiente-roxo-estudio-quarto-fundo-para-o-produto-plano-de-fundo-liso-do-estudio_1258-63873.jpg);
      background-size: cover;
      background-position: auto;
    
    }
      </style>
  </head>
  <body>
    @include('include.header')
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>
