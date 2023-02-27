@extends('layouts.layout')
@section('content')
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"></a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline"></a>
                        @endif
                    @endauth
                </div>
            @endif


            <div class="all-posts">

  <div class="heading"><h3>Enjoy creating any hashtag .</h3> </div>
  <div class="box-container">

  <section class="all-posts">
    <div class="box">
     
    
    @foreach($books as $book)
<div>
{{ $book->name }} - {{ $book->about }} - {{ $book->category }}
</div>
      @endforeach

<h2>Username: </h2>
<h2>Email:</h2>
<h2>Name:  </h2>
<h2>About:</h5>
<h2>Category: {</h5>

    
    
</section>


@endsection