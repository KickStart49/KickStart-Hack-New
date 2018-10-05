@extends('layouts.adminlayout')
@section('content')
<section align="center" style="padding-top: 3%;" class="dashboard-counts">
        @foreach($users as $user)
        <div class="container-fluid" >
          <div class="row">
            <!-- Count item widget-->
            <div  class="col-xl-12 col-sm-6">
              <div>
                @if($user->permission == "administrator")
                <img style="width: 10%; height: 10%;" src="{{asset('img/avatar-1.jpg')}}">  
                
                <p>{{$user->name}}</p>  
                @endif
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </section>
      @foreach($users as $user)
      @if($user->permission == "manager")
			
        <section class="dashboard-counts section-padding" align="center">
        <h2 style="text-align: center; margin-bottom: 3%;">Manager</h2>
        <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div >
           <img style="width: 80%; height: 80%;" src="{{asset('img/avatar-5.jpg')}}">
          </div>
          <br>
        </div>
        </div>
      </section>
      @endif

      @if($user->permission == "visitor")
      
        <section class="dashboard-counts section-padding" align="center">
        <h2 style="text-align: center; margin-bottom: 3%;">visitor</h2>
        <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div >
           <img style="width: 80%; height: 80%;" src="{{asset('img/avatar-5.jpg')}}">
            <p>{{$user->name}}</p>
          </div>
          <br>
        </div>
        </div>
      </section>
      @endif
      @endforeach
@stop