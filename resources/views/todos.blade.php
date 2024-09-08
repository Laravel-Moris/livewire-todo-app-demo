<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Laravel</title>
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
  
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="relative min-h-screen flex flex-col items-center justify-center">
  <h3 class="font-bold text-2xl mb-12">Laravel Moris Todo App - Livewire version</h3>
  
  <p class="font-semibold text-lg mb-8">Livewire is a full-stack framework for Laravel that allows you to build dynamic UI components without leaving PHP.</p>
  
  <livewire:todo-container/>
</div>
</body>
</html>
