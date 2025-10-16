@extends('layouts.app')

@section('content')
  <h1 class="h4 mb-3">Authors</h1>
  <div class="card">
    <div class="card-body p-0">
      <table class="table table-striped mb-0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Country</th>
            <th>Birth Year</th>
            <th>Total Books</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($authors as $author)
            <tr>
              <td>{{ $author->id }}</td>
              <td>{{ $author->name }}</td>
              <td>{{ $author->country }}</td>
              <td>{{ $author->birth_year }}</td>
              <td>{{ $author->books->count() }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
