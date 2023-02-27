


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Books</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       <link href="/css/main.css" rel="stylesheet">
       <link href="/css/create.css" rel="stylesheet">
       <link href="/css/home.css" rel="stylesheet">
       <header class="header">
<section class="flex">
<a href="/" class="logo">Reko.</a>

<nav class="navbar">
 
    <a href="/Book/create">Upload</a>

    <a href="{{ route('login') }}">Login</a>

    <a href="/Book/profile">Profile</a>

    <a href="#">Logout</a>

</section>

</header>


    <body>


    @yield('content')  
    <footer>
      <h2>  copyright 2023 Books | Adeyemi-Abiodun | Php laravel dev  </h2>
    </footer>        
    </body>
</html>