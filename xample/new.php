<?php>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nepal Kick Boxing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css"/>
</head>
<style>
.jumbotron { 
    background-color: #f4511e; /* Orange */
    color: #ffffff;
}
</style>

<body>
  <div class="jumbotron text-center">
  <h1>Company</h1> 
  <p>Wako organization in Nepal</p> 
  <form class="form-inline">
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>
</div> 
<div id="container">
<img class="slides" src="slider/1.jpg"/>
<img class="slides" src="slider/2.jpg"/>
<img class="slides" src="slider/3.jpg"/>
<img class="slides" src="slider/4.jpg"/>
<button class="btn" onclick ="plusIndex(-1)" id="btn1">&#10094;</button>
<button class="btn" onclick ="plusIndex(1)" id="btn2">&#10095;</button>

 </div>
</body>
	<script>
	var index = 1;
	
	function plusIndex(n){
		index= index + n;
		showImage(index);
	}
	showImage(1);
	function showImage(n){
		var i;
		var x = document.getElementsByClassName("slides");
		if( n > x.length){ index = 1 };
		if( n < 1 ){ index = x.length };
		for(i=0;i<x.length;i++)
			{
				x[i].style.display = "none";
			}
		x[index - 1].style.display = "block";
	}
	autoSlide();
	function autoSlide(){
		var i;
		var x = document.getElementsByClassName("slides");
		for(i=0;i<x.length;i++)
			{
				x[i].style.display = "none";
			}
			if( index > x.length){ index = 1}
			x[index - 1].style.display = "block";
			index++;
			setTimeout(autoSlide,2000);
	 } 
		
		
		

	</script>
</html>
<?>