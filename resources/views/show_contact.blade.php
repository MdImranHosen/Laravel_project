@extends('layout')
@section('content')
<div class="row-fluid sortable">		
<div class="box span12">
  <div class="pull-right"><a href="{{ route('all.contact') }}" class="btn btn-danger" title="All Contacts">Go to All Contacts</a></div>
  <div class="clearfix"></div>
<div class="box-content">
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{ $sngl_con->id }}</th>
      <td class="center">{{ $sngl_con->name }}</td>
      <td class="center">{{ $sngl_con->email }}</td>
      <td class="center">{{ $sngl_con->phone }}</td>
    </tr>
  </tbody>
</table>
</div>
</div>
</div>
@endsection