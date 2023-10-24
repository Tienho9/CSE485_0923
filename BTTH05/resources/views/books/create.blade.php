@extends('layouts.app')
@section('title','Welcome Page')
@section('content')
<h3 class="text-center text-success my-3">Thêm sách</h3>
<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="author_id">Author_id:</label>
        <input type="text" name="author_id" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="title">Title:</label>
        <textarea name="title" class="form-control" required></textarea>
    </div>
    <div class="form-group mt-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="form-group mt-3">
        <a href="{{ route('authors.index') }}" class="btn btn-warning text-white">Back</a>
    </div>
</form>
@endsection