@extends('layouts.adminlayout')
@section('content')
	@if(count($errors)>0)
		<ul class="list-group">
			@foreach($errors->all() as $error)
				<li class="list-group-item text-danger">
					{{$error}}
				</li>
			@endforeach
		</ul>
	@endif
	<div class="panel panel-default">
		<div class="panel panel-heading">
			<h2>Add a new user</h2>
		</div>
		<div class="panel panel-body">
			<form action="{{route('admin.add.user')}}" method="POST">
				{{csrf_field()}}
				<div class="form-group">
					<label for="name">User</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label for="name">Email</label>
					<input type="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label for="name">Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit">
						Add user
					</button>
				</div>
			</form>
		</div>
	</div>
@stop