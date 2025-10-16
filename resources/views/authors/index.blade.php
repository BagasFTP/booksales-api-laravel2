@extends('layouts.app')

@section('content')
  <h1 class="h4 mb-3">Authors</h1>
  <div class="card">
    <div class="card-body p-0">
      <table class="table table-striped mb-0">
        <thead>
          <tr>
            <th style="width:80px">ID</th>
            <th>Name</th>
            <th>Country</th>
            <th>Birth Year</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($authors as $a)
            <tr>
              <td>{{ $a['id'] }}</td>
              <td>{{ $a['name'] }}</td>
              <td>{{ $a['country'] }}</td>
              <td>{{ $a['birth_year'] }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
