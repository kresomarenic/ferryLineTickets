@extends('layouts.app')

@section('content')

<a class="btn btn-outline-primary float-left" href="/prepaidTickets/new">New</a>

<table class="table table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Citizen</th>
      <th scope="col">Ferry line</th>
      <th scope="col">Valid from</th>
      <th scope="col">Valid to</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($prepaidTickets as $prepaidTicket)
    <tr>
      <td><?= $prepaidTicket->id ?></td>
      <?php $name = $prepaidTicket->citizen->citizen_name ?>
      <?php $surname = $prepaidTicket->citizen->citizen_surname ?>
      <td><?= $name." ".$surname ?></td>
      <?php $departure = $prepaidTicket->ferryLine->departureFerryPort->ferry_port_name ?>
      <?php $destination = $prepaidTicket->ferryLine->destinationFerryPort->ferry_port_name ?>
      <td><?= $departure." - ".$destination ?></td>
      <td><?= $prepaidTicket->valid_from ?></td>
      <td><?= $prepaidTicket->valid_to ?></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection
