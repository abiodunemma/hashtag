  
    
    @foreach($books as $book)
<div>
{{ $book->name }} - {{ $book->about }} - {{ $book->category }}
</div>
      @endforeach
