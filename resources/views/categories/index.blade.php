@extends('layouts.app')

@section('content')

<a class="btn btn-outline-primary float-left" href="/categories/new">New</a>

<table class="table table-striped mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Label</th>
      <th scope="col">Discount (%)</th>
      <th scope="col">Obriši</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($categories as $category)
    <tr>
      <td><?= $category->id ?></td>
      <td><?= $category->category_name ?></td>
      <td><?= $category->label ?></td>
      <td><?= $category->discount ?></td>
      <td><a href="/categories/delete/{{ $category->id }}" class="btn btn-sm btn-outline-danger">X</a></td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection
