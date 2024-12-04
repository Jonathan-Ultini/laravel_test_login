<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @yield("additional-meta")
  <title>@yield("page-title", "")</title>

  @yield("additional-cdn")
</head>

<body>
  {{-- includi header --}}
  @include("partials.header")

  {{-- inserisci contenuti da chi estende --}}
  <main>
    @yield("main-content")
  </main>

  {{-- includi footer --}}
  @include("partials.footer")

  @vite("resources/js/app.js")
  @yield("additional-scripts")
</body>

</html>