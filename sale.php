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
</div>
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

<div>
    <h3 style="text-align: left; font-weight: bold; color: #32CD32" class="ml-5 mt-3 mb-4">Most Viewed Properties</h3>
</div>
<div class="justify-content-center w-100 ml-4">
    <div id="forecoseproperties" class="carousel slide w-100 p-3" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="form-group row">
                    <div class="col-md-4 card-house-padding">
                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://assets.site-static.com/userFiles/657/image/Camelot_Development_Northbridge.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1"> For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 card-house-padding">

                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://www.richmondamerican.com/content/plans/media-21638.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 card-house-padding">
                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://www.richmondamerican.com/content/plans/media-20390.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="form-group row">
                    <div class="col-md-4 card-house-padding">
                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://www.richmondamerican.com/content/plans/media-23644.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 card-house-padding">

                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://d2kcmk0r62r1qk.cloudfront.net/imageSponsors/xlarge/2012_07_24_03_14_40_hopewell_heights.png"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 card-house-padding">
                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://www.richmondamerican.com/content/plans/media-21670.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="form-group row">
                    <div class="col-md-4 card-house-padding">
                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://www.richmondamerican.com/content/plans/media-23711.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 card-house-padding">

                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://www.richmondamerican.com/content/plans/media-23711.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 card-house-padding">
                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://www.richmondamerican.com/content/plans/media-23711.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#forecoseproperties" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#forecoseproperties" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div>
    <h3 style="text-align: left; font-weight: bold; color: #32CD32" class="ml-5 mt-3 mb-4">Foreclosed Properties</h3>
</div>
<div class="justify-content-center w-100 ml-4">
    <div id="forecosepropertiess" class="carousel slide w-100 p-3" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="form-group row">
                    <div class="col-md-4 card-house-padding">
                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://assets.site-static.com/userFiles/657/image/Camelot_Development_Northbridge.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 card-house-padding">

                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://www.richmondamerican.com/content/plans/media-21638.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 card-house-padding">
                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://www.richmondamerican.com/content/plans/media-20390.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="form-group row">
                    <div class="col-md-4 card-house-padding">
                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://www.richmondamerican.com/content/plans/media-23644.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 card-house-padding">

                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://d2kcmk0r62r1qk.cloudfront.net/imageSponsors/xlarge/2012_07_24_03_14_40_hopewell_heights.png"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 card-house-padding">
                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://www.richmondamerican.com/content/plans/media-21670.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="form-group row">
                    <div class="col-md-4 card-house-padding">
                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://www.richmondamerican.com/content/plans/media-23711.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 card-house-padding">

                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://www.richmondamerican.com/content/plans/media-23711.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 card-house-padding">
                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://www.richmondamerican.com/content/plans/media-23711.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#forecosepropertiess" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#forecosepropertiess" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<br>
<div class="justify-content-center w-100 ml-4">
    <div id="forecosepropertiesss" class="carousel slide w-100 p-3" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="form-group row">
                    <div class="col-md-4 card-house-padding">
                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://assets.site-static.com/userFiles/657/image/Camelot_Development_Northbridge.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 card-house-padding">

                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://www.richmondamerican.com/content/plans/media-21638.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 card-house-padding">
                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://www.richmondamerican.com/content/plans/media-20390.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="form-group row">
                    <div class="col-md-4 card-house-padding">
                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://www.richmondamerican.com/content/plans/media-23644.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 card-house-padding">

                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://d2kcmk0r62r1qk.cloudfront.net/imageSponsors/xlarge/2012_07_24_03_14_40_hopewell_heights.png"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 card-house-padding">
                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://www.richmondamerican.com/content/plans/media-21670.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="form-group row">
                    <div class="col-md-4 card-house-padding">
                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://www.richmondamerican.com/content/plans/media-23711.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 card-house-padding">

                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://www.richmondamerican.com/content/plans/media-23711.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 card-house-padding">
                        <div class="card-width">
                            <div class="card card-house">
                                <div class="card-body card-body-house">
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <img src="https://www.richmondamerican.com/content/plans/media-23711.jpg"
                                                 class="img-fluid house-image" alt="Responsive image">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <h3>09 : 09 : 09</h3>
                                                    <small>Days Hours Mins</small>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6 style="margin-bottom: -2px;"><strong>Auction Date:</strong></h6>
                                                    <h6>September 31, 2019</h6>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6><strong class="mr-1">Bid Place:</strong>26</h6>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <a href="auction.php"  class="btn col-md-12 view-details-button btn-sm">View
                                                        Details
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row" style="padding: 0px 10px 0px 10px;">
                                        <div class="col-md-7">
                                            <h6><strong style="font-size: 14px;">2 Storey House, Calamba Laguna</strong>
                                            </h6>
                                            <h6><i style="color: #32CD32;"
                                                   class="fas fa-map-marker-alt mr-2"></i><small>La Marea Subd, Brgy,
                                                San Antonio</small></h6>
                                            <h6><small>3 Alumni lives near you</small></h6>
                                            <h6><small>35 views</small></h6>
                                        </div>
                                        <div class="col-md-5">
                                            <h6><strong style="font-size: 14px;" class="mr-1">Type:</strong><small>House
                                                and Lot</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Land Area:</strong><small>387
                                                sqft</small></h6>
                                            <h6><strong style="font-size: 14px;" class="mr-1">Floor
                                                Area:</strong><small>234 sqft</small></h6>
                                            <h6><strong style="font-size: 14px;"
                                                        class="mr-1">Bedrooms:</strong><small>4</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer form-row" style="padding: 0; background: none; ">
                                    <div class="btn-group col-md-12">
                                        <button type="button" class="btn house-auction-button-1">For Sale</button>
                                        <button type="button" class="btn house-auction-button-2">Starting Bid: Php
                                            2,000,223
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#forecosepropertiesss" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#forecosepropertiesss" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<?php include('includes/footer.php');?>
<?php include('includes/src/script_src.php'); ?>

</body>
</html>