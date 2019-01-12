@extends('layouts.app')

@section('content')

<a class="btn btn-outline-primary float-left" href="/ferryLines/new">New</a>

<table class="table table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Departure port</th>
      <th scope="col">Destination port</th> 
      <th scope="col">Obriši</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($ferryLines as $ferryLine)
    <tr>
      <td><?= $ferryLine->id ?></td>
      <td><?= $ferryLine->departureFerryPort->ferry_port_name ?></td>
      <td><?= $ferryLine->destinationFerryPort->ferry_port_name ?></td>
      <td><a href="/ferryLines/delete/{{ $ferryLine->id }}" class="btn btn-sm btn-outline-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection

