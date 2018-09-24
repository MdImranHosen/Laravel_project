@extends('layout')
@section('content')
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{ url('insert-contact') }}" method="post">
							@csrf
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="name"> Full Name </label>
								<div class="controls">
								  <input class="input-xlarge focused" id="name" type="text" name="name" value="" placeholder="Enter your Name.">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="email"> Email Address </label>
								<div class="controls">
								  <input class="input-xlarge focused" id="email" type="text" name="email" value="" placeholder="Enter your Email.">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="phone"> Phone Number </label>
								<div class="controls">
								  <input class="input-xlarge focused" id="phone" type="text" name="phone" value="" placeholder="Enter your Phone.">
								</div>
							  </div>
							 
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Add Contact</button>
							  </div>
							</fieldset>
						  </form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
@endsection