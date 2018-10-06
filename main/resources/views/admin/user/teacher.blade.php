@extends('layouts.adminlayout')
@section('content')
    <div class="row">

            <div class="col-lg-6">
              <div class="card">
                
                  <section>
                  <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'London')">Post</button>
                    <button class="tablinks" onclick="openCity(event, 'Paris')">Work</button>
                    <button class="tablinks" onclick="openCity(event, 'Tokyo')">Members</button>
                  </div>
                  </section>

                  <br>          
                <section>
                  <p><div id="London" class="tabcontent">
                    <h3>Discussions</h3>
                    <p>London is the capital city of England.</p>
                  </div>

                  <div id="Paris" class="tabcontent">
                    
                    <h3>Assignments</h3>
                    <div>
                    <form href={{route('assignment.add')}} method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="text" name="Assignment title" placeholder="Assignment title"><br><br> 
                    <input type="date" name="duedate">
                      <input type="checkbox" name="list1" value="lock">Lock this assignment after its due date<br>
                      <input type="checkbox" name="list2" value="gradebook">Add to Gradebook<br>
                      <input type="text" name="Assignment Discription" placeholder="assignment Discription">
                      <input type="text" name="Select classes" placeholder="Select classes"> 
                      <input type="file" name="featured">
                      <button>Submit</button>

                    </form>
                  </div>
                  </div>
                  <div id="Tokyo" class="tabcontent">
                    <div><h3>Members</h3>
                    <form href="{{route('student.search')}}" method="post">
                    <span><input type="text" name="searchmembers" placeholder="search members"></span>
                    {{csrf_field()}}
                    <input type="submit" value="Search">
                  </form>
                    </div>
                    <div class="row">
                                <div class="col-md-10">
                                  <div class="card">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Student</a></li>
                                        <li style="margin-left: 5%;" role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Parents</a></li>
                                        
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                          <div>
                                            <img style="width: 20%; border-radius: 50%; height: 20%;" src="img/avatar-1.jpg">
                                            <span style="margin-left: 5%;">Dhruv J Patel</span>
                                            <a href="#"><span style="margin-left: 40%; font-size: 80%;">Progress</span></a>
                                            <a href="#"><span style="margin-left: 80%; font-size: 80%;">Manage</span></a>
                                          </div>
                                          <hr>
                                          <div>
                                            <img style="width: 20%; border-radius: 50%; height: 20%;" src="img/avatar-2.jpg">
                                            <span style="margin-left: 5%;">Dhruv J Patel</span>
                                            <a href="#"><span style="margin-left: 40%; font-size: 80%;">Progress</span></a>
                                            <a href="#"><span style="margin-left: 80%; font-size: 80%;">Manage</span></a>
                                          </div>
                                          <div style="margin-top: 5%;" align="right">
                                            <span>2 number of students</span>
                                          </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="profile">aergerg.</div>
                                    </div>
                                  </div>
                                </div>
                      </div>
                
                    </div>
                  </section>
                
              </div>
            </div>
            <!-- <div class="col-lg-2">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Horizontal Form</h4>
                </div>
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet consectetur.</p>
                  
                </div>
              </div>
            </div> -->
            
            
            
          </div>
<!-- <script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
</div> -->

<div style="margin-left: 5%; margin-top: 5%;" id="Members" class="tabcontent">
  <h3>Members</h3>
  <p>Members is the capital of Japan.</p>
</div>



            <!-- Counts Section -->
     
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Your company &copy; 2017-2019</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div> 
@stop