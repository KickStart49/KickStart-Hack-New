@extends('layouts.adminlayout')
@section('content')
    <div style="margin-left: 20%;" class="row">

            <div class="col-lg-8">
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
                   <div id="disqus_thread"s></div>
<br>

<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = "{{ route('disqus')}}";  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = "1"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://pandyaprahar-blogspot-com.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<script id="dsq-count-scr" src="//pandyaprahar-blogspot-com.disqus.com/count.js" async></script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                  </div>
<section>

                  <div id="Paris" class="tabcontent">
                    <div> 
                      <div align="center" class="jumbotron">
                      <h3>Assignments</h3>
                    </div>
                    <form href={{route('assignment.add')}} method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                      <input class="pad" style="margin-top: 2%;" type="text" name="Assignment title" placeholder="Assignment title"><br><br> 
                      <input class="pad" style="margin-top: 2%;" type="date" name="duedate">
                      <form>
                        <input class="pad" style="margin-top: 3%;" type="checkbox" name="list1" value="lock">Lock this assignment after its due date<br>
                        <input class="pad" style="margin-top: 3%;" type="checkbox" name="list2" value="gradebook">Add to Gradebook<br>
                        <input class="pad" style="margin-top: 3%;" type="text" name="Assignment Discription" placeholder="assignment Discription">
                        <select  style="width: 10%; padding-top: 0.75%; padding-bottom: 0.75%; margin-left: 5%;">
                          <option value="item1">item1</option>
                          <option value="item2">item2</option>
                        </select> 
                        <input class="pad" style="margin-top: 2%;" type="file" name="attach a file"><br>
                        <button class="pad" style="margin-top: 2%; margin-bottom: 5%;">Submit</button>
                      </form>
                  </div>
                  <div align="center">
                    <div class="jumbotron">
                      <h3>Add your question to start creating a quiz...</h3>
                    </div>
                    <button style="margin-bottom: 5%;">+ADD Question</button>
                  </div>


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
                                            <a href="#"><span style="margin-left: 80%; font-size: 80%;">Manage</span></a>
                                          </div>
                                          <hr>
                                          <div>
                                            <img style="width: 20%; border-radius: 50%; height: 20%;" src="img/avatar-2.jpg">
                                            <span class="pad">Dhruv J Patel</span>
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