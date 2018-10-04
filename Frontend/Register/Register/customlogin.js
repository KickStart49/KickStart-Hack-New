$(document).ready(function () {
  $('#email').focusout(function() {
      $('.emaillabel').css({
          'top': '58%',
          'color': '#000000',
          'cursor': 'auto',
           'font-size':'100%',
      });
  });
  $('#email').change(function(){
    $('#email').focusout(function() {
      if($("#email").val()){
      $('.emaillabel').css({
          'color': '#000000',
          'top': '47%',
           'font-size':'100%',
      });}
    });
  });
    $('#email').focus(function() {
      $('.emaillabel').css({
          'color': '#4285F4',
          'top': '54%',
          'cursor': 'default',
            'font-size':'80%',
      });
    });
    $(".emaillabel").click(function(){
      $("#email").trigger("focus");
    });
    $("#email").trigger("focus");
});

$(document).ready(function () {
  $('#pwd').focusout(function() {
      $('.passwordlabel').css({
          'top': '68%',
          'color': '#000000',
          'cursor': 'auto',
          'font-size':'100%',
      });
  });
  $('#pwd').change(function(){
    $('#pwd').focusout(function() {
      if($("#pwd").val()){
      $('.passwordlabel').css({
          'color': '#000000',
          'top': '54%',
          'font-size':'100%',
      });}
    });
  });
    $('#pwd').focus(function() {
      $('.passwordlabel').css({
          'color': '#4285F4',
          'top': '64%',
          'cursor': 'default',
          'font-size':'80%',
      });
    });
    $(".passwordlabel").click(function(){
      $("#pwd").trigger("focus");
    });
    $("#pwd").trigger("focus");
});
$(document).ready(function() {
    $(".btn").click(function() {
        /*$(".wait").css("cursor", "default");*/
        $(".wait").prop("disabled",true);
         setTimeout(goto,2000);
       

    });
});
function goto(){
       $(".wait").prop("disabled",false);    
}
function loginsubmit(){
  
  var email = $("#email").val();

  // Check Null

  if(!email){

    $(".loginmessage").html("Please provide email");

  }else{
   
    // Check Valid Syntax

    ValidateEmail(email);

  }

}

function ValidateEmail(email) 
{

	var mailFormat = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  	if(mailFormat.test(email))
  	{
    
    // Check Database
    $(".login").addClass("loading");
  	$(".loadingline").removeClass("hidden");
    setTimeout(VerifyEmail, 2000);

    function VerifyEmail(){

    var data = {
      'email': email,
    };
    var ajaxurl = "loginadmin.php";
    jQuery.post(ajaxurl, data, function(response) {
      alert(response);
      if(response == "true"){
        $(".login").addClass("hidden");
        $(".password").removeClass("hidden");
        $(".new2").html(email);
        var x=email.toUpperCase();
        $(".new3").html(x.charAt(0));
      }else{  
        $(".password").addClass("loading");
        $(".loadingline").removeClass("hidden");
        $(".login").removeClass("loading");
        $(".loadingline").addClass("hidden");
        $(".loginmessage").html("Couldn't find your email");
      }
    });
	}
  

  }else{

    $(".loginmessage").html("Invalid Email Format");
	
  }

}
function emailSection() {
        $(".loadingline").addClass("hidden");
     $(".password").addClass("hidden");
      $(".login").removeClass("hidden");
       $(".loginmessage").addClass("hidden");
       

  }  

function passwordsubmit()
{
      var pwd = $("#pwd").val();

  // Check Null

  if(!pwd){

    $(".passwordmessage").html("Please provide password");

  }else{
          Validate(pwd)
        }
}
function Validate(pwd)
{
    if(pwd == "123"){

        $(".password").addClass("hidden");
        $(".bot").addClass("hidden");

    }
   
    else
    {
    $(".passwordmessage").html("Wrong Password");
  }
}

$(document).ready(function() {
	$('#password').keyup(function() {
		$('#result').html(checkStrength($('#password').val()))
		})
	function checkStrength(password) {
		var strength = 0
		if (password.length < 6) {
			$('#result').removeClass()
			$('#result').addClass('short')
			return 'Too short'
		}
		if (password.length > 7) strength += 1
		// If password contains both lower and uppercase characters, increase strength value.
		if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) strength += 1
		// If it has numbers and characters, increase strength value.
		if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) strength += 1
		// If it has one special character, increase strength value.
		if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
		// If it has two special characters, increase strength value.
		if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1
		// Calculated strength value, we can return messages
		// If value is less than 2
		if (strength < 2) {
			$('#result').removeClass()
			$('#result').addClass('weak')
			return 'Weak'
		} 
		else if (strength == 2) {
			$('#result').removeClass()
			$('#result').addClass('good')
			return 'Good'
		} 
		else {
			$('#result').removeClass()
			$('#result').addClass('strong')
			return 'Strong'
		}
	}
	});
/*$(document).keypress(function(e) {
    var keycode = (e.keyCode ? e.keyCode : e.which);
    if (keycode == '13') {
        loginsubmit();
    }
});*/