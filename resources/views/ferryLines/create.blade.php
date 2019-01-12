@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/ferryLines">
@csrf

<div class="form-group">    
    <select class="form-control" name="departure_port_id">
        @foreach($ferryPorts as $ferryPort)
        <option value="{{ $ferryPort->id }}">{{ $ferryPort->ferry_port_name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">    
    <select class="form-control" name="destination_port_id">
        @foreach($ferryPorts as $ferryPort)
        <option value="{{ $ferryPort->id }}">{{ $ferryPort->ferry_port_name }}</option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection
