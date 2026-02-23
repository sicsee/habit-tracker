<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>
    {{ config('app.name') }}
  </title>
  @vite('resources/css/app.css')
</head>
<body class="bg-background min-h-screen flex justify-between  flex-col font-mono relative habit-bg">

  {{-- HEADER --}}
  <x-header />

  {{-- CONTEÚDO --}}
  {{ $slot }}

  {{-- FOOTER --}}
  <x-footer />

  {{-- TOAST --}}
  <x-toast />
  <script type="module" src="{{ Vite::asset('resource/js/app.js') }}"></script>
</body>
</html>
