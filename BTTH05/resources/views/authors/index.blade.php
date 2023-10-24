<!--ket thua tep co ten la app.balde.php trong thu muc layout-->
@extends('layouts.app')
@section('title','Welcome Page')
@section('content')
<h3 class="text-center text-success my-3">Danh sách tác giả</h3>
<div class="container mt-3">
        <a href="{{ route('authors.create') }}" class="btn btn-success">Add New Author</a>
</div>
<table class="table col-10 ms-5 mt-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Author Name</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>     
    @foreach($authors as $author)
      <tr>
        <td>{{ $author->id }}</td>
        <td>{{ $author->name }}</td>
        <td><a href="{{ route('authors.edit', $author->id) }}" class="btn btn-primary">Edit</a></td>
        <td>
          <i class="bi bi-trash" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $author->id }}"></i>
          <!-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $author->id }}">Delete</button> -->
        </td>  
      </tr>   
      <!-- Modal -->
      <div class="modal fade" id="deleteModal-{{ $author->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Delete Confirmation</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Are you sure you want to delete this author?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bsdismiss="modal">Close</button>
              <form action="{{ route('authors.destroy', $author->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </div>
          </div>
        </div>
      </div> 
    @endforeach
  </tbody>
</table>

@endsection('nav-author', 'active')
