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
  <h3 class="font-bold text-2xl mb-12">Laravel Moris Todo App</h3>
  
  <p class="font-semibold text-lg mb-8">Livewire is a full-stack framework for Laravel that allows you to build dynamic UI components without leaving PHP.</p>
  <div class="w-full max-w-7xl mx-auto">
    <div class="grid sm:grid-rows-2 sm:grid-cols-1 md:grid-rows-1 md:grid-cols-8 w-full">
      <form
        class="bg-slate-100 px-6 py-8 h-40 col-span-3 relative"
        action="{{ route('todos.store') }}"
        method="post"
      >
        @csrf
        
        <div>
          <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900"></label>
          <input
            type="text"
            id="first_name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            placeholder="Todo"
            name="task"
            required
          />
        </div>
        
        <button
          type="submit"
          class="absolute bottom-0 mb-4 mr-4 h-8 right-0 bg-indigo-500 text-white rounded-md w-32"
        >
          Add
        </button>
      </form>
      
      <div class="flex flex-col items-center space-y-2 mx-4 col-span-4">
        @foreach($todos as $todo)
          <form
            class="bg-slate-50 w-full grid grid-cols-3 gap-x-8 items-center px-4 py-2"
            action="{{ route('todos.destroy', $todo->id) }}"
            method="post"
          >
            @csrf
            @method('DELETE')
            <span>{{ $todo->task }}</span>
            <span>{{ $todo->created_at->format('Y-m-d H:i') }}</span>
            <button
              type="submit"
              class="bg-red-500 text-white rounded-md w-16 h-8"
            >
              Delete
            </button>
          </form>
        @endforeach
      </div>
    </div>
  </div>
</div>
</body>
</html>
