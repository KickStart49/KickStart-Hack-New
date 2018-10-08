@extends('layouts.adminlayout')
@section('content')   
<div class="row">
<div class="col-lg-1"></div>
            <div class="col-lg-10">
              <div class="card">
                
                  <section>
                  <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'London')">Post</button>
                    <button class="tablinks" onclick="openCity(event, 'Tokyo')">Members</button>
                  </div>
                  </section>

                  <br>          
                <section>
                  <div id="London" class="tabcontent">
                    <h3>Discussions</h3>	
   
                         


<div class="tab">
  <button class="ta" onclick="openCity1(event, 'a1')" id="defaultOpen">Multi-option Questions</button>
  <button class="ta" onclick="openCity1(event, 'a2')">True or False</button>
  <button class="ta" onclick="openCity1(event, 'a3')">Short Answer</button>
  <button class="ta" onclick="openCity1(event, 'a4')">Match Followings</button>
</div>

<div id="a1" class="tb">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
 <div class="multi">
                  <textarea class="pad" style="border:1px solid darkgrey; margin-top: 5%; width: 50%;" placeholder="Enter the question."></textarea>
                  <form  class="pad" action="Post">
                    <input type="radio" name="same" value=""><input  style="margin-left: 3%; margin-top: 5%;" type="text" name="" placeholder="Option"><br>
                    <input type="radio" name="same" value=""><input  style="margin-left: 3%; margin-top: 5%;" type="text" name="" placeholder="Option"><br>
                    <input type="radio" name="same" value=""><input  style="margin-left: 3%; margin-top: 5%;" type="text" name="" placeholder="Option"><br>
                    <input type="radio" name="same" value=""><input  style="margin-left: 3%; margin-top: 5%;" type="text" name="" placeholder="Option"><br>
                    <textarea style="margin-top: 5%;" class="pad" placeholder="Mention Answer"></textarea>
                </form>
                </div>
</div>

<div id="a2" class="tb">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
                   <div class="pad" class="truefalse">
                  <textarea style="border:1px solid darkgrey; margin-top: 5%; width: 50%;" placeholder="Enter the question."></textarea>
                  <form action="Post">
                    <input type="radio" style="margin-left: 3%;" type="text" name="" placeholder="True"><span>True</span><br>
                    <input type="radio" style="margin-left: 3%;" type="text" name="" placeholder="False"><span>False</span><br>
                    <textarea style="margin-top: 5%;" placeholder="Mention Answer"></textarea>
                </form>
                </div>
</div>

<div id="a3" class="tb">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  <div class="Shortanswer pad">
      <textarea style="border:1px solid darkgrey; margin-top: 5%; width: 50%;" placeholder="Enter the question."></textarea>
      </div>
</div>
<div id="a4" class="tb">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
   <div class="Matching pad">
                  <span>A</span><textarea style="border:1px solid darkgrey; margin-top: 5%; width: 25%;" placeholder="Enter the question."></textarea><span class="pad">1</span><textarea style="border:1px solid darkgrey; margin-top: 5%; width: 25%;" placeholder="Enter the question."></textarea>
                  <br>
                  <span>B</span><textarea style="border:1px solid darkgrey; margin-top: 5%; width: 25%;" placeholder="Enter the question."></textarea><span class="pad">2</span><textarea style="border:1px solid darkgrey; margin-top: 5%; width: 25%;" placeholder="Enter the question."></textarea>
                  <br>
                  <span>C</span><textarea style="border:1px solid darkgrey; margin-top: 5%; width: 25%;" placeholder="Enter the question."></textarea><span class="pad">3</span><textarea style="border:1px solid darkgrey; margin-top: 5%; width: 25%;" placeholder="Enter the question."></textarea>
                  <br>
                </div>
</div>
<div align="center">
 <button style="margin-top: 5%;">Submmit</button>
</div>
                 </div>
                  <div id="Tokyo" class="tabcontent pad">
                    <div><h3>Members</h3>
                    <span style="margin-top: 5%;"><input type="text" name="searchmembers" placeholder="search members"></span>
                    </div>
                    <div class="row">
                                <div class="col-md-10">
                                  <div  style="margin-top: 5%;" class="card">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Student</a></li>
                                        <li class="pad" role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Parents</a></li>
                                        
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                          <div>
                                            <img style="width: 20%; border-radius: 50%; height: 20%;" src="img/avatar-1.jpg">
                                            <span class="pad">Dhruv J Patel</span>
                                            <a href="#"><span style="margin-left: 40%; font-size: 80%;">Progress</span></a>
                                            <a href="manage.html"><span style="margin-left: 80%; font-size: 80%;">Manage</span></a>
                                          </div>
                                          <hr>
										  <a href="#"><button class="button button3">Back</button></a>
                                          <div>
                                            <img style="width: 20%; border-radius: 50%; height: 20%;" src="img/avatar-2.jpg">
                                            <span class="pad">Dhruv J Patel</span>
                                            <a href="#"><span style="margin-left: 40%; font-size: 80%;">Progress</span></a>
                                            <a href="manage.html"><span style="margin-left: 80%; font-size: 80%;">Manage</span></a>
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
          </div>
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