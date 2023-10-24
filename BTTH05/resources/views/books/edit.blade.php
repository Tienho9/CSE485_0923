@extends('layouts.app')
@section('title','Welcome Page')
@section('content')
<h3 class="text-center text-success my-3">Sửa Sách</h3>
<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="id">ID:</label>
        <input type="text" name="id" class="form-control" value="{{ $book->id }}" readonly>
    </div>
    <div class="form-group">
        <label for="author_id">Author_id:</label>
        <input type="text" name="author_id" class="form-control" value="{{$book->author_id }}" required>
    </div>
    <div class="form-group">
        <label for="title">Title:</label>
        <textarea name="title" class="form-control" required>{{ $book->title }}</textarea>
    </div>
    <div class="d-flex">
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        <div class="form-group mt-3 ">
            <a href="{{ route('authors.index') }}" class="btn btn-warning text-white">Back</a>
        </div>
    </div>
</form>
@endsection