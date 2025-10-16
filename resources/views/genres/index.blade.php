@extends('layouts.app')

@section('content')
  <h1 class="h4 mb-3">Genres</h1>
  <div class="card">
    <div class="card-body p-0">
      <table class="table table-striped mb-0">
        <thead>
          <tr>
            <th style="width:80px">ID</th>
            <th>Name</th>
            <th>Slug</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($genres as $g)
            <tr>
              <td>{{ $g['id'] }}</td>
              <td>{{ $g['name'] }}</td>
              <td><code>{{ $g['slug'] }}</code></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
