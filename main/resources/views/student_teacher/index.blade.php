@extends('layouts.loginlayout')
@section('content')

@if(session('permission') == "student")
<br><br><br>
	<div style="text-align: center;">
		Please Enter Your Class Code.
		<input type="text" name="code">
	</div>
<br><br>
@else

@if(session('permission') == "parent")
	<form method="post" action="{{ route('submitpermission') }}">
	<br><br><br>
	<div style="text-align: center;">
		<div class="col-12">please enter your class code.
		<input type="text" name="code">
	</div><br>
	<div class="col-12">please enter your child code.
		<input type="text" name="code">
	</div>
	</div>
</form>

<br><br>
@endif 

@endif
    <div style="text-align:center;"><a  href="{{ route('home') }}">{{ __('Homepage') }}</a></div>
@stop