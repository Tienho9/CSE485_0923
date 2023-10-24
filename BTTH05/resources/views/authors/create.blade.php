@extends('layouts.app')
@section('title','Welcome Page')
@section('content')
<h3 class="text-center text-success my-3">Thêm Tác Giả</h3>

<form action="{{ route('authors.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control">
    </div>
    
    <div class="form-group mt-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="form-group mt-3">
        <a href="{{ route('authors.index') }}" class="btn btn-warning text-white">Back</a>
    </div>
</form>
@endsection