<!DOCTYPE html>
<html>
<head>
	<title>About</title> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
		.image{
			float: left;
		}
	
	.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
</style>
}
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php include 'header.php'; ?>
	<div>
		<h1 style="text-align: center; ">About</h1>
		<p style="text-align: center; ">It uses utility classes for typography and spacing to space content out within the larger container.</p>
	</div>
	<div class="jumbotron" style="margin-left: 65px ; margin-right: 65px;  padding-left:30px; padding-right: 40px ">
		<h3 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style display-4" style="text-align: center">MEET OUR TEAM</h3>
		<p class="mbr-text align-center pb-3 mbr-fonts-style display-5" style="text-align: center ; font-size: 25px;">
                    We are all very different. We were born in different cities, at different times, we love different music, food, movies. But we have something that unites us all. It is our company. We are its heart. We are not just a team, we are a family.
          </p>

<div class="container" style="margin-top: 15px">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
      	<div>
        <img src="avatar.png" class="center" alt="Avatar" style="width: 150px; max-height: 150px; border-radius: 50%;">
   	 </div>
        <div style="text-align: center;">
          <h3 >Los Angeles1</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="avatar.png" class="center" alt="Avatar" style="width: 150px; max-height: 150px; border-radius: 50%;">
         <div style="text-align: center;">
          <h3 >Los Angeles2</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="avatar.png" class="center" alt="Avatar" style="width: 150px; max-height: 150px; border-radius: 50%;">
         <div style="text-align: center;">
          <h3 >Los Angeles3</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="avatar.png" class="center" alt="Avatar" style="width: 150px; max-height: 150px; border-radius: 50%;">
         <div style="text-align: center;">
          <h3 >Los Angeles4</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>

 		
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>