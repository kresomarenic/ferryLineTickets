@extends('layouts.app')

@section('content')

<a class="btn btn-outline-primary float-left" href="/cities/new">New</a>

<table class="table table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">City name</th> 
    </tr>
  </thead>
  <tbody>
  @foreach ($cities as $city)
    <tr>
      <td><?= $city->id ?></td>
      <td><?= $city->city_name ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection


