@extends('layouts.app')

@section('content')

@if($errors->count() > 0)
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $message)
            <?= $message ?>
        @endforeach
    </div>
@endif

<form method="post" action="/citizens">
@csrf

<div class="form-group">
    <input class="form-control" name="citizen_name" type="text" placeholder="Name">
</div>
<div class="form-group">
    <input class="form-control" name="citizen_surname" type="text" placeholder="Surname">
</div>
<div class="form-group">
    <input class="form-control" name="citizen_oib" type="text" placeholder="OIB">
</div>
<div class="form-group"> 
    <select class="form-control" name="city_id">
        @foreach($cities as $city)
        <option value="{{ $city->id }}">{{ $city->city_name }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">   
    <select class="form-control" name="category_id">
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
    </select>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>

@endsection