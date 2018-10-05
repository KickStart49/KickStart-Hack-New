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
      
			
        <section class="dashboard-counts section-padding" align="center">
        <h2 style="text-align: center; margin-bottom: 3%;">Manager</h2>
        <div class="row">
        @foreach($users as $user)
        @foreach($profiles as $profile)
      @if($user->permission == "manager")
      <div class="col-xl-3 col-sm-6">
            <img style="border-radius: 50%;" src="{{asset('img/avatar-5.jpg')}}">  
            <p class="contentv">{{$user->name}}</p>
           
           <p>{{$profile->about}}</p>
            <button>Contact</button><br>
            <a href="{{route('user.visitor',['id'=>$user->id])}}"class="btn">Remove</a>
          </div>
        
      @endif
      @endforeach
      @endforeach
      </div>
      </section>

      
           
        
        <h2 style="text-align: center; margin-bottom: 3%;">visitor</h2>
        <section class="dashboard-counts section-padding" align="center">
        <div class="row">
          @foreach($users as $user)
          @foreach($profiles as $profile)
             @if($user->permission == "visitor")
         <div class="col-xl-3 col-sm-6">
            <img style="border-radius: 50%;" src="{{asset('img/avatar-5.jpg')}}">  
            <p class="contentv">{{$user->name}}</p>
            <p>{{$user->profile->about}}</p>
            <button>Contact</button><br>
            <a href="{{route('user.manager',['id'=>$user->id])}}"class="btn">Remove</a>  
            
        </div>

      @endif
      
      @endforeach
      @endforeach
</div>
      
@stop