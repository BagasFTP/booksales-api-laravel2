@extends('layouts.app')

@section('content')
  <h1 class="h4 mb-3">Books</h1>
  <div class="card">
    <div class="card-body p-0">
      <table class="table table-striped mb-0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Genre</th>
            <th>Publication Year</th>
            <th>Author</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($books as $book)
            <tr>
              <td>{{ $book->id }}</td>
              <td>{{ $book->title }}</td>
              <td>{{ $book->genre }}</td>
              <td>{{ $book->publication_year }}</td>
              <td>{{ $book->author->name ?? '-' }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
