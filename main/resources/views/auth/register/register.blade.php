@extends('layouts.loginlayout')
@section('css')
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
@stop
@section('content')
  <h4 class="title">Register with your account</h4>
  <!--Avatar-->
        
	 			<form method="post" action="{{ route('register') }}">
	 				<div class="group">      
    					<input class="reg" type="text" required>
      					<span class="highlight"></span>
      					<span class="tbar"></span>
      					<label>First Name</label>
    				</div>
    				<div class="group">      
    					<input class="reg" type="text" required>
      					<span class="highlight"></span>
      					<span class="tbar"></span>
      					<label>Last Name</label>
    				</div>
      
    				<div class="group">      
    			    	<input class="reg one" type="Email" required>
    			    	<span class="highlight"></span>
      					<span class="ebar"></span>
      					<label>Email</label>
						<p class="check"></p>
					</div>
					
					<div class="group">      
    					<input class="reg" name="password" id="password" type="password" required>
						<span id="result"></span>
      					<span class="highlight"></span>
      					<span class="pbar"></span>
      					<label for="password">Password</label>
						<span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password" style="float: left; width: 4%; height:4%; margin-left: 125px; margin-top: -30px"></span>
						<br>
						<p class="check1"></p>
    				</div>
    				<div class="group">      
    					<input class="reg" type="password" id="pass1" required>
      					<span class="highlight"></span>
      					<span class="pbar"></span>
      					<label>Confirm Password</label>
						<p class="check2"></p>
    				</div>
    				<input type="button" class="btn btn-default" name="signin" value="Sign in instead">
            <input type="button" class="btn btn-primary" name="next" id="next" value="Submit">
	    		</form>
@stop
@section('script')
  <script type="text/javascript" src="{{asset('js/caps.js')}}"></script>
@stop