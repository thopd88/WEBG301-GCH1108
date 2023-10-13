@extends('layouts.app')
@section('title', 'Books Create')
@section('content')
<form action="/books" method="post">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Title</label>
    <input type="text"
      class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Author</label>
    <input type="text"
      class="form-control" name="author" id="author" aria-describedby="helpId" placeholder="">
  </div>
  <div class="mb-3">
    <label for="category_id" class="form-label">Category</label>
    <select class="form-select form-select-lg" name="category_id" id="category_id">
      @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="tags" class="form-label">Tags</label>
    <select class="form-select form-select-lg" name="tags[]" id="tags" multiple>
      @foreach ($tags as $tag)
        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Description</label>
    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection