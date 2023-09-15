@foreach($books as $book)
    <p>{{ $book->title }}</p>
    <p>{{ $book->author }}</p>
    <p>{{ $book->description }}</p>
@endforeach