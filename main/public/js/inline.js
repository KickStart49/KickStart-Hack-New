 function openCity(evt, cityName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

function openCity1(evt, cityName) {
    var i, tb, ta;
    tb = document.getElementsByClassName("tb");
    for (i = 0; i < tb.length; i++) {
       tb[i].style.display = "none";
    }
    ta = document.getElementsByClassName("ta");
    for (i = 0; i < ta.length; i++) {
        ta[i].className = ta[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
$(document).ready(function(){
    $("#defaultOpen").show();
});
document.getElementById("defaultOpen").click();