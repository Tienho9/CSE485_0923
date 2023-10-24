@extends('layouts.app')
@section('title','Welcome Page')
@section('content')
<h3 class="text-center text-success my-3">Sửa Tác Giả</h3>
<form action="{{ route('authors.update', $author->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="id">ID:</label>
        <input type="text" name="id" class="form-control" value="{{ $author->id }}" readonly>
    </div>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" value="{{$author->name }}" required>
    </div>
    <div class="form-group mt-3">
        <a href="{{ route('authors.index') }}" class="btn btn-warning text-white">Back</a>
    </div>
 </form>
 @endsection