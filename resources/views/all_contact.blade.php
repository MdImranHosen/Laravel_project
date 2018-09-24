@extends('layout')
@section('content')
<div class="row-fluid sortable">		
<div class="box span12">
	<div class="box-header" data-original-title>
		<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
		<div class="box-icon">
			<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
			<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
			<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
		</div>
	</div>
	<div class="box-content">
<table class="table table-striped table-bordered bootstrap-datatable datatable">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($all_contacts as $v_contact)
    <tr>
      <th scope="row">{{ $v_contact->id }}</th>
      <td class="center">{{ $v_contact->name }}</td>
      <td class="center">{{ $v_contact->email }}</td>
      <td class="center">{{ $v_contact->phone }}</td>
      <td class="center">
		<a class="btn btn-success" href="{{ URL::to('show-contact/'.$v_contact->id) }}">
			<i class="halflings-icon white zoom-in"></i>
		</a>
		<a class="btn btn-info" href="{{ URL::to('edit-contact/'.$v_contact->id) }}">
			<i class="halflings-icon white edit"></i>  
		</a>
		<a class="btn btn-danger" href="{{ URL::to('delete-contact/'.$v_contact->id) }}" id="delete">
			<i class="halflings-icon white trash"></i> 
		</a>
	</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
@endsection