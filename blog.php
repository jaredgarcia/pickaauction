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
    <div id="modal_content" class="modal fade">
        <div class="modal-dialog" id="modal_dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title"></h2>
                </div>
                <div class="modal-body">
                    <div id="filter_settings_content">
                        <?php include'includes/filter_settings.php'; ?>
                    </div>
                    <div class="login_content">
                        <div class="row">
                            <div class="col-md-12">
                                <p id="invalid_msg" style="color:red;text-align:center;"></p> <!-- Validation Message -->
                            </div>
                            <div class="pt-sm-1 col-md-12">
                                <label>Email</label>
                                <input type="text" class="form-control" placeholder="Email" id="login_email" required="required"/>
                            </div>
                            <div class="pt-sm-1 col-md-12">
                                <label>Password</label>
                                <input type="password" class="form-control" id="login_password"  placeholder="Password" required="required"/>
                            </div>
                            <div class="pt-sm-2 col-md-12 text-center" >
                                <a href="#" id="forgot_pw">forgot your password?</a>
                            </div>
                        </div>
                    </div>
                    <div class="register_content">
                        <div class="row">
                            <input type="hidden" id="editRowID" value="0">
                            <div class="col-sm-3">
                                <label>Last Name</label>
                                <input type="text" class="form-control"  id="lastname"><br>
                            </div>
                            <div class="col-sm-3">
                                <label>First Name</label>
                                <input type="text" class="form-control"  id="firstname"><br>
                            </div>
                            <div class="col-sm-3">
                                <label>Middle Name</label>
                                <input type="text" class="form-control"  id="middlename"><br>
                            </div>
                            <div class="col-sm-3">
                                <label>Gender</label>
                                <select class="form-control" name="" id="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                              <div class="col-sm-12">
                                <label>School</label>
                                <input type="text" class="form-control"  id="school"><br>
                              </div>
                            </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label>Contact Number</label>
                                <input type="number" class="form-control"  id="contact_number"><br>
                            </div>
                            <div class="col-sm-3">
                                <label>Birthday</label>
                                <input type="text" class="form-control" id ="birthday" />
                            </div>

                            <div class="col-sm-3">
                                <label>Nationality</label>
                                <input type="text" class="form-control" id="nationality"><br>
                            </div>
                            <div class="col-sm-3">
                                <label>Country</label>
                                <input type="text" class="form-control"  id="country"><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <label>Address</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="City / State Address" id="city"><br>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" placeholder="Street / Blk / Lot" id="street"><br>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" placeholder="Zip Code" id="zip_code"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="youremail@" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id="email"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Password</label>
                                <input type="password" class="form-control"  id="password"><br>
                            </div>
                            <div class="col-sm-6">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control"  id="confirm_password"><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                   <button id="btn_login" class="btn btn-outline-success">
                    Login
                   </button>
                   <button id="btn_save"  onclick="register('save')" class="btn btn-outline-success ">
                    Save
                    </button>
                    <button id="btn_cancel"  data-dismiss="modal" class="btn btn-outline-success ">
                    Cancel
                    </button>
                    <button id="btn_signup" class="btn btn-outline-success">
                    Sign Up
                    </button>
                </div>
            </div>
        </div>
    </div>

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

