
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