<?php


if (session_id() == '' || !isset($_SESSION)) {session_start();}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include('includes/src/link_href.php'); ?>

    <title>Picka</title>

</head>

<body>
    <?php include'includes/navbar.php';?>
  	<div style="text-align: center">
  		<img src="https://images.marketleader.com/houseimages/NEOHREX/425/f_4126425.jpg" class="img-fluid shadow p-3 mb-5 bg-white rounded" alt="Responsive image" >
		<h2 >Latest News</h2>
		<div style="border-bottom-width: 12px; border-bottom-color: #4A4C49 "></div>
		<p>Blog</p>

	</div>
	<div class="container">
	<h4 style="color:#8A8B8A" >FEATURED POST</h4>

    			<!-- FEATURED POST-->
                <div class="card shadow p-3 mb-5 bg-white rounded col-md-7" style="width: 30rem; float:left; margin-left:10px;">
    			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSw3nGcAYG_ZHyuvABoaqDCfVdtLhHRZY8IX93F_0k4VmepnNnp" class="card-img-top" alt="...">
    			  <div class="card-body">
    			  	<h6 class="card-subtitle mb-2 text-muted">REAL ESTATE</h6>
    			    <h4 class="card-title">Hottest Trends For Living in Tel Aviv: The Old North And Heart Of The City</h4>
    			    <h6 class="card-subtitle mb-2 text-muted">Din Golan | June 2, 2019 <br /> <a href="#" class="card-link"><u>Continue Reading</u></a></h6>
    			  </div>
    			</div>

                <div class="card shadow p-3 mb-5 bg-white rounded col-md-7" style="width: 30rem; float:left; margin-left:10px;">
    			  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSw3nGcAYG_ZHyuvABoaqDCfVdtLhHRZY8IX93F_0k4VmepnNnp" class="card-img-top" alt="...">
    			  <div class="card-body">
    			  	<h6 class="card-subtitle mb-2 text-muted">REAL ESTATE</h6>
    			    <h4 class="card-title">Hottest Trends For Living in Tel Aviv: The Old North And Heart Of The City</h4>
    			    <h6 class="card-subtitle mb-2 text-muted">Din Golan | June 2, 2019 <br /> <a href="#" class="card-link"><u>Continue Reading</u></a></h6>
    			  </div>
    			</div>


    			<h4 style="color:#8A8B8A; float: right; margin-right:440px;">STICKY POST</h4>
    		    <h4 style="color:#8A8B8A; float: right; margin-right: 350px;px;">LATEST POST</h4>
                <div class="card shadow p-3 mb-5 bg-white rounded" style="width: 15rem; float:left">
    			  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSw3nGcAYG_ZHyuvABoaqDCfVdtLhHRZY8IX93F_0k4VmepnNnp" class="card-img-top" alt="...">
    			  <div class="card-body">
    			  	<h6 class="card-subtitle mb-2 text-muted">REAL ESTATE</h6>
    			    <h4 class="card-title" style="font-size: 15px;">Hottest Trends For Living in Tel Aviv: The Old North And Heart Of The City</h4>
    			    <h6 class="card-subtitle mb-2 text-muted" style="font-size: 12px;">Din Golan | June 2, 2019 <br /> <a href="#" class="card-link"><u>Continue Reading</u></a></h6>
    			  </div>
    			 </div>

    			<div class="card shadow p-3 mb-5 bg-white rounded" style="width: 15rem; float:left">
    			  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSw3nGcAYG_ZHyuvABoaqDCfVdtLhHRZY8IX93F_0k4VmepnNnp" class="card-img-top" alt="...">
    			  <div class="card-body">

    			  	<h6 class="card-subtitle mb-2 text-muted">REAL ESTATE</h6>
    			    <h4 class="card-title" style="font-size: 15px;">Hottest Trends For Living in Tel Aviv: The Old North And Heart Of The City</h4>
    			    <h6 class="card-subtitle mb-2 text-muted" style="font-size: 12px;">Din Golan | June 2, 2019 <br /> <a href="#" class="card-link"><u>Continue Reading</u></a></h6>
    			  </div>
    			</div>

    			<div class="card shadow p-3 mb-5 bg-white rounded col-md-4" style="width: 20rem;  float: right; margin-right: 100px;">
    			  <div class="card-body" style="height="100; width=100px;>
    			  	<h6 class="card-subtitle mb-2 text-muted" style="font-size: 8px;">REAL ESTATE</h6>
    			    <h4 class="card-title" style="font-size: 10px;">Hottest Trends For Living in Tel Aviv: The Old North And Heart Of The City</h4>
    			    <h6 class="card-subtitle mb-2 text-muted" style="font-size: 8px;">Din Golan | June 2, 2019 <br /> <a href="#" class="card-link"><u>Continue Reading</u></a></h6>
    			  </div>
    			</div>

    			<div class="card shadow p-3 mb-5 bg-white rounded col-md-4" style="width: 10rem;  float: right;">
    			  <div class="card-body" style="height="100; width=100px;>
    			  	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSw3nGcAYG_ZHyuvABoaqDCfVdtLhHRZY8IX93F_0k4VmepnNnp" class="card-img-top" alt="..." width="67px;" height="67px;">
    			  </div>
    			</div>

    			 <!-- STICKY POST-->
    			<div class="card shadow p-3 mb-5 bg-white rounded col-md-4" style="width: 20rem;  float: right; margin-right: 100px; margin-top: -40px;">
    			  <div class="card-body" style="height="100; width=100px;>
    			  	<h6 class="card-subtitle mb-2 text-muted" style="font-size: 8px;">REAL ESTATE</h6>
    			    <h4 class="card-title" style="font-size: 10px;">Hottest Trends For Living in Tel Aviv: The Old North And Heart Of The City</h4>
    			    <h6 class="card-subtitle mb-2 text-muted" style="font-size: 8px;">Din Golan | June 2, 2019 <br /> <a href="#" class="card-link"><u>Continue Reading</u></a></h6>
    			  </div>
    			</div>

    			<div class="card shadow p-3 mb-5 bg-white rounded col-md-4" style="width: 10rem;  float: right; margin-top: -40px;">
    			  <div class="card-body" style="height="100; width=100px;>
    			  	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSw3nGcAYG_ZHyuvABoaqDCfVdtLhHRZY8IX93F_0k4VmepnNnp" class="card-img-top" alt="..." width="67px;" height="67px;">
    			  </div>
    			</div>
	</div>





<?php include('includes/src/script_src.php'); ?>

 </body>
</html>

