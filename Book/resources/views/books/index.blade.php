@extends('layouts.app')
@section('title', 'Books Index')
@section('content')
<div class="table-responsive">
  <table class="table table-primary">
      <thead>
          <tr>
              <th scope="col">Title</th>
              <th scope="col">Author</th>
              <th scope="col">Description</th>
              <th>Category</th>
              <th>Tags</th>
              <th>Action</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($books as $book)
              <tr>
                  <td>
                      <a href="/books/{{$book->id}}">{{$book->title}}</a>
                  </td>
                  <td>{{ $book->author }}</td>
                  <td>{{ $book->description }}</td>
                  <td>{{ $book->category->name }}</td>
                  <td>
                      @foreach ($book->tags as $tag)
                          <span class="badge bg-primary">{{ $tag->name }}</span>
                      @endforeach
                  </td>
                  <td>
                      <a href="/books/{{$book->id}}/edit">
                          <button type="button" class="btn btn-primary">Edit</button>
                      </a>
                      <form action="/books/{{$book->id}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                      </form>
                  </td>
              </tr>
          @endforeach
      </tbody>
  </table>
</div>
@endsection
