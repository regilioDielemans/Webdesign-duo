var x = document.getElementsByClassName('red').length;
document.getElementById('countRedH1').innerHTML = x;

var y = document.getElementsByTagName('h1')

for( i = 0; i < y.length; i++){
	y[i].style.color = "blue";
}

var isRed = document.getElementsByClassName('red');
for(i = 0; i < isRed.length; i++){
	isRed[i].style.color="red";
}


function MakeGreen() {
	while(document.getElementsByTagName('h1')){
		var x = document.getElementsByClassName('red');
		for (i = 0; i < x.length; i++) {
		    x[i].style.color = "green";
		}
		break;
	}
}
