@extends('layouts.app')

@section('content')

<a class="btn btn-outline-primary float-left" href="/ferryPorts/new">New</a>

<table class="table table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Port name</th>
      <th scope="col">City</th>
      <th scope="col">Obriši</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($ferryPorts as $ferryPort)
    <tr>
      <td><?= $ferryPort->id ?></td>
      <td><?= $ferryPort->ferry_port_name ?></td>
      <td><?= $ferryPort->city->city_name ?></td>
      <td><a href="/ferryPorts/delete/{{ $ferryPort->id }}" class="btn btn-sm btn-outline-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection