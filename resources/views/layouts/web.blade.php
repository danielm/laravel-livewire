<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Laravel Livewire Ap</title>

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
  <header class="shadow-lg">
    <div class="bg-blue-900 py-1"></div>
    <nav class="bg-blue-800 py-2 text-white">
      <a href="{{ route('home') }}">
        <img src="{{ asset('images/logo-8.svg') }}" alt="" class="h-8 mx-auto">
      </a>
    </nav>

  </header>
  <main class="py-10">
    <div class="container mx-auto px-5">
      @yield('content')
    </div>
  </main>

  <footer class="py-4 text-center">
    @auth
      <a href="{{ url('dashboard') }}" class="text-sm text-gray-700 underline">
        Dashboard
      </a>
    @else
      <a href="{{ url('login') }}" class="text-sm text-gray-700 underline">
        Login
      </a>
      <a href="{{ url('register') }}" class="ml-4 text-sm text-gray-700 underline">
        Register
      </a>
    @endauth
  </footer>
</body>
</html>