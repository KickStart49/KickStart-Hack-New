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
                                        <form>
                      <input type="text" name="Assignment title" placeholder="Assignment title"><br><br> 
                    <input type="date" name="duedate">

                      <input type="checkbox" name="list1" value="lock">Lock this assignment after its due date<br>
                      <input type="checkbox" name="list2" value="gradebook">Add to Gradebook<br>
                      <input type="text" name="Assignment Discription" placeholder="Assignment Description">
                      <input type="text" name="Select classes" placeholder="Select Classes"> 
                      <input type="file" name="attach a file">
                      <button>Submit</button>

                    </form>
                  </div>
                  </div>
                  <div id="Tokyo" class="tabcontent">
                    <h3>Tokyo</h3>
                    <p>Tokyo is the capital of Japan.</p>
                  </div></p>
                  </section>
                
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Horizontal Form</h4>
                </div>
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet consectetur.</p>
                  
                </div>
              </div>
            </div>
            
            
            
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