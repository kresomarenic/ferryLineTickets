@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/prepaidTickets">
@csrf

<div class="form-group">    
    <select class="form-control" name="citizen_id">
        @foreach($citizens as $citizen)
        <option value="{{ $citizen->id }}">{{ $citizen->citizen_name." ".$citizen->citizen_surname }}</option>
        @endforeach
    </select>
</div>
<div class="form-group"> 
    <select class="form-control" name="ferry_line_id">
        @foreach($ferryLines as $ferryLine)
        <?php $departure = $ferryLine->departureFerryPort->ferry_port_name ?>
        <?php $destination = $ferryLine->destinationFerryPort->ferry_port_name ?>
        <option value="{{ $ferryLine->id }}">{{ $departure." - ".$destination }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <input class="form-control" name="valid_from" type="date" placeholder="Valid from">
</div>
<div class="form-group">
    <input class="form-control" name="valid_to" type="date" placeholder="Valid to">
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection

