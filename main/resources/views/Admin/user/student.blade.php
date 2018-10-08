@extends('layouts.adminlayout')
@section('content')
	<div class="row">
<div class="col-lg-1"></div>
            <div class="col-lg-10">
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
                    <div> 
                      <div align="center" class="jumbotron">
                      <h3>Assignments</h3>
                    </div>
                    <div align="center">
                        <div class="row">
<div class="col-lg-1"></div>
            <div class="col-lg-10">
              <div class="card">
                <table class="table table-striped">
  <tr>
    <th>Class</th>
    <th>Assignment</th>
    <th>Upload</th>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Pending</td>
    <td><input type="File" name=""></td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Done</td>
    <td><input type="File" name=""></td>
  </tr>
  <tr>
    <td>Joe</td>
    <td>Swanson</td>
    <td><input type="File" name=""></td>
  </tr>
  <tr>
    <td>Cleveland</td>
    <td>Brown</td>
    <td><input type="File" name=""></td>
  </tr>
</table>

              </div>
            </div>
          </div>
      </div>
<div align="center" style="margin-bottom: 5%;">
          <input type="submit" style="border-radius: 4%">
      </div>
                  </div>
                    <div class="jumbotron" align="center">
                      <h3>Just comlete your question given in a quiz...</h3>
                    </div>
<div align="center" style="margin-bottom: 5%;">
<div class="btn-group">
  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Large button
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">class1</a>
    <a class="dropdown-item" href="#">class2</a>
    <a class="dropdown-item" href="#">class3</a>
  </div>
</div>
</div>
<div class="tab">
  <button class="ta" onclick="openCity1(event, 'a1')" id="defaultOpen">Multi-option Questions</button>
  <button class="ta" onclick="openCity1(event, 'a2')">True or False</button>
  <button class="ta" onclick="openCity1(event, 'a3')">Short Answer</button>
  <button class="ta" onclick="openCity1(event, 'a4')">Match Followings</button>
</div>

<div id="a1" class="tb">
 <div class="multi">
			                  
 </div>
</div>

<div id="a2" class="tb">
                   <div class="pad" class="truefalse">
                  
                </div>
</div>

<div id="a3" class="tb">
  
  <div class="Shortanswer pad">
  
      </div>
</div>
<div id="a4" class="tb">
   <div class="Matching pad">
                 
    </div>
</div>
<div align="center">
 <input type="submit" style="margin-top: 5%;">
</div>
                 </div>
                  <div id="Tokyo" class="tabcontent pad">
                    <div><h3>Members</h3>
                    <span style="margin-top: 5%;"><input type="text" name="searchmembers" placeholder="search members"></span>
                    </div>
                    <div class="row">
                                <div class="col-md-10">
                                  <div  style="margin-top: 5%;" class="card">
                                   	<h3>Student</h3>
                                   	<hr>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                          <div>
                                            <img style="width: 20%; border-radius: 50%; height: 20%;" src="img/avatar-1.jpg">
                                            <span class="pad">Dhruv J Patel</span>
                                            <span style="margin-left: 40%; font-size: 80%;" data-toggle="modal" data-target="#myModal">Progress</span>
                                          </div>
                                          <hr>
                                          <div>
                                            <img style="width: 20%; border-radius: 50%; height: 20%;" src="img/avatar-2.jpg">
                                            <span class="pad">Dhruv J Patel</span>
                                            <span style="margin-left: 40%; font-size: 80%;" data-toggle="modal" data-target="#myModal1">Progress</span>
                                          </div>
                                          <div style="margin-top: 5%;" align="right">
                                            <span>2 number of students</span>
                                          </div>
                                        </div>
                                  </div>
                                </div>
                      </div>
                
                    </div>
                  </section>
  <!-- Modal -->
  <div style="background-color: white;" class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
    <div align="center">
 <table style="margin-top: 50%;" class="table table-striped">
  <tr>
    <th>Student_Name</th>
    <th>Action</th>
    <th>Grade</th>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Pending</td>
    <td>49/50</td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Done</td>
    <td>44/50</td>
  </tr>
  <tr>
    <td>Joe</td>
    <td>Swanson</td>
    <td>30/50</td>
  </tr>
  <tr>
    <td>Cleveland</td>
    <td>Brown</td>
    <td>25/50</td>
  </tr>
</table>
      </div>      
    </div>
  </div>
  
              
              </div>
            </div>            
          </div>

<div style="background-color: white;" class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
    <div align="center">
 <table style="margin-top: 50%;" class="table table-striped">
   <tr>
    <th>Student_Name</th>
    <th>Action</th>
    <th>Grade</th>
  </tr>
  <tr>
    <td>Peter</td>
    <td>Pending</td>
    <td>49/50</td>
  </tr>
  <tr>
    <td>Lois</td>
    <td>Done</td>
    <td>44/50</td>
  </tr>
  <tr>
    <td>Joe</td>
    <td>Swanson</td>
    <td>30/50</td>
  </tr>
  <tr>
    <td>Cleveland</td>
    <td>Brown</td>
    <td>25/50</td>
  </tr>
</table>
      </div>      
    </div>
  </div>
  
              
              </div>
            </div>            
          </div>
	
@stop