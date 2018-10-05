@extends('layouts.adminlayout')
@section('content')
<section align="center" style="padding-top: 3%;" class="dashboard-counts">
        <div class="container-fluid" >
          <div class="row">
            <!-- Count item widget-->
            <div  class="col-xl-12 col-sm-6">
              <div>
                <img style="width: 10%; height: 10%;" src="{{asset('img/avatar-1.jpg')}}">  
                <p>Administrator:-Dhruv Patel</p>  
              </div>
            </div>
          </div>
        </div>
      </section>
      @if($users->count()>0)
			@foreach($users as $user)
      <section class="dashboard-counts section-padding" align="center">
        <h2 style="text-align: center; margin-bottom: 3%;">Manager</h2>
        <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div >
          <img style="width: 80%; height: 80%;" src="{{asset('img/avatar-5.jpg')}}">
        </div>
        <br>
        <div>
        @if($user->manager)
							<a href="{{route('user.visitor',['id'=>$user->id])}}"class="btn btn-primary">
							Visitor</a>
						@elseif($user->visitor)
							<a href="{{route('user.manager',['id'=>$user->id])}}"class="btn btn-primary">
							Manager</a>
						@endif
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div>
          <img style="width: 80%; height: 80%;" src="{{asset('img/avatar-4.jpg')}}">
        </div>
        <br>
        <div>
        @if($user->manager)
              <a href="{{route('user.visitor',['id'=>$user->id])}}"class="btn btn-primary">
              Visitor</a>
            @elseif($user->visitor)
              <a href="{{route('user.manager',['id'=>$user->id])}}"class="btn btn-primary">
              Manager</a>
            @endif
        </div>
           
        </div>
      <div class="col-lg-3 col-sm-6">
        <div>
          <img style="width: 80%; height: 80%;" src="{{asset('img/avatar-3.jpg')}}">
        </div>
        <br>
        <div>
        @if($user->manager)
              <a href="{{route('user.visitor',['id'=>$user->id])}}"class="btn btn-primary">
              Visitor</a>
            @elseif($user->visitor)
              <a href="{{route('user.manager',['id'=>$user->id])}}"class="btn btn-primary">
              Manager</a>
            @endif
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div>
          <img style="width: 80%; height: 80%;" src="{{asset('img/avatar-2.jpg')}}">
        </div>
        <br>
        <div>
        @if($user->manager)
              <a href="{{route('user.visitor',['id'=>$user->id])}}"class="btn btn-primary">
              Visitor</a>
            @elseif($user->visitor)
              <a href="{{route('user.manager',['id'=>$user->id])}}"class="btn btn-primary">
              Manager</a>
            @endif
        
      </div>
    </div>
      </section>
      {{-- <section align="center" class="dashboard-counts section-padding">
        <h2 style="text-align: center; margin-bottom: 3%;">Visitor</h2>
        <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div>
          <img style="width: 80%; height: 80%;" src="{{asset('img/avatar-6.jpg')}}">
        </div>
        <p>Visitor</p>
        <button>ADD</button>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div>
          <img style="width: 80%; height: 80%;" src="{{asset('img/avatar-7.jpg')}}">
        </div>
        <p>Visitor</p>
        <button>ADD</button>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div>
          <img style="width: 80%; height: 80%;" src="{{asset('img/avatar-8.jpg')}}">
        </div>
        <p>Visitor</p>
        <button>ADD</button>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div>
          <img style="width: 80%; height: 80%;" src="{{asset('img/avatar-9.jpg')}}">
        </div>
        <p>Visitor</p>
        <button>ADD</button>
      </div>
    </div>
    
      </section> --}}
      @endforeach
    @endif
@stop