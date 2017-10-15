
//function voor invullen naam en eventueel tekst font naar comic sans maken
function WelkomFunction() {
    var Name = document.getElementById("Name").value;
    
    if(Name == "frank tempelman" || Name == "Frank tempelman" || Name == "frank Tempelman" || Name == "Frank Tempelman"){
    	document.getElementById("welkom").innerHTML = "Welkom " + Name;
    	document.getElementById("welkom").style.fontFamily = "Comic Sans MS";
    	document.getElementById('WekomName').innerHTML = "";

    }else{
    	document.getElementById("welkom").innerHTML = "Welkom " + Name;
    	document.getElementById("welkom").style.fontFamily = ""; 
    	document.getElementById('WekomName').innerHTML = "";	
    }
}


// Jquery om burger knop lijnen zwart te maken wanneer er op geklikt is. CSS inline was de enige manier waarmee het werkte.
// .addClass werkte niet
$(document).ready(function() {

    $('#navbarButton').click(function() {
        $('.navbar-default .navbar-toggle .icon-bar').css({
            'background-color': 'rgb(0,0,0)'
        });   
    });
});

