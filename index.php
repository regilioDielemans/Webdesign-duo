<?php include 'includes/header.php'; ?>
<div class="container">
	<div class="jumbotron">

	    <h1 id="welkom">Les 4 Websdesign</h1>      
	    <p>met HTML, CSS en JavaScript</p>
<form name="myForm" onsubmit="validateForm()" method="post">
Name: <input type="text" name="fname">
<input type="submit" value="Submit">
</form>
	</p>
  	</div>  
</div>
<div class="container">
	<div class="col-lg-6">
		<H1 class="red">tekst1</H1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem praesentium iste, atque adipisci natus pariatur dicta, inventore ratione sequi animi sed at qui, facere libero ducimus nesciunt. Libero, reprehenderit, expedita!</p>
	</div>
	<div class="col-lg-6">
		<H1>tekst2</H1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit hic dolor aliquam minus sapiente, sint reiciendis vel et quam neque consequatur fugiat saepe placeat accusantium pariatur, in excepturi. Est, a.</p>
	</div>
	<div class="col-lg-6">
		<H1 class="red">tekst3</H1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci optio cupiditate dolorum animi, nesciunt facere, modi, aperiam a deserunt minus atque ea eius labore impedit reiciendis qui ipsum id facilis.</p>
	</div>
	<div class="col-lg-6">
		<H1>tekst4</H1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et quis, cumque aperiam rem nam veniam enim assumenda officiis minima quia mollitia alias minus, velit accusantium ipsam inventore possimus. Aperiam, tenetur!</p>
	</div>
	<div class="col-lg-6">
		<H1 class="red">tekst5</H1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic laboriosam, consequuntur iure blanditiis magnam odit, quia reprehenderit rem totam. Praesentium vero, harum aperiam veritatis, soluta repellat commodi error impedit! Illo.</p>
	</div>
	<div class="col-lg-6">
		<H1>tekst6</H1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic laboriosam, consequuntur iure blanditiis magnam odit, quia reprehenderit rem totam. Praesentium vero, harum aperiam veritatis, soluta repellat commodi error impedit! Illo.</p>
	</div>
	
	<p>het aantal rode h1's: <span id="countRedH1"></span></p>

	<button onclick="MakeGreen()" style="button">maak de tekst groen</button>
</div>

<div class="container">
	<img src="images/foto1.jpg" width="500px" class="img-circle">
</div>

<div class="container">
	
	<div class="col-lg-3 col-lg-offset-4">
	<ul class="pagination">
	  <li><a href="#">1</a></li>
	  <li><a href="#">2</a></li>
	  <li><a href="#">3</a></li>
	  <li><a href="#">4</a></li>
	  <li><a href="#">5</a></li>
	</ul>
	</div>
</div>

<div class="container">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/foto2.jpg" alt="Los Angeles">
    </div>

    <div class="item">
      <img src="images/foto3.jpg" alt="Chicago">
    </div>

    <div class="item">
      <img src="images/foto4.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Vorige</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Volgende</span>
  </a>
</div>
</div>



<?php include 'includes/footer.php'; ?>