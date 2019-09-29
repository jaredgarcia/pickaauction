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

<div class="card text-center">
    <div class="card-body">
        <h4 class="float-left mb-3">Foreclosure Auction Calendar</h4>
        <table class="table table-hover table-striped col-md-12" style="border: #222222 !important;">
            <thead>
            <tr style="background-color: #000000; color:#FFFFFF;">
                <th scope="col">EventDate</th>
                <th scope="col">Location</th>
                <th scope="col">Asset To Be Sold</th>
                <th scope="col">Auction Type</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row" class="font-weight-normal"> October 26, 2019 <br/>
                    <button type="button" class="btn btn-success btn-sm">View Details</button>
                </th>
                <td class="text-break">Sky Lounge 47th Floor of UnionBank Plaza, Meralco Avenue, Ortigas Center, Pasig
                    City
                </td>
                <td>55</td>
                <td>Bid Live and Online Auction</td>
            </tr>
            <tr>
                <th scope="row" class="font-weight-normal"> October 26, 2019 <br/>
                    <button type="button" class="btn btn-success btn-sm">View Details</button>
                </th>
                <td class="text-break">Sky Lounge 47th Floor of UnionBank Plaza, Meralco Avenue, Ortigas Center, Pasig
                    City
                </td>
                <td>55</td>
                <td>Bid Live and Online Auction</td>
            </tr>
            <tr>
                <th scope="row" class="font-weight-normal"> October 26, 2019 <br/>
                    <button type="button" class="btn btn-success btn-sm">View Details</button>
                </th>
                <td class="text-break">Sky Lounge 47th Floor of UnionBank Plaza, Meralco Avenue, Ortigas Center, Pasig
                    City
                </td>
                <td>55</td>
                <td>Bid Live and Online Auction</td>
            </tr>
            <tr>
                <th scope="row" class="font-weight-normal"> October 26, 2019 <br/>
                    <button type="button" class="btn btn-success btn-sm">View Details</button>
                </th>
                <td class="text-break">Sky Lounge 47th Floor of UnionBank Plaza, Meralco Avenue, Ortigas Center, Pasig
                    City
                </td>
                <td>55</td>
                <td>Bid Live and Online Auction</td>
            </tr>


            </tbody>
        </table>
    </div>
</div>


<div>
    <h3 style="text-align: left; font-weight: bold; color: #32CD32" class="ml-5 mt-3 mb-4">Foreclosed Properties</h3>
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
                                                    <a href="../ViewDetails/product-features.html"  class="btn col-md-12 view-details-button btn-sm">View
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
                                        <button type="button" class="btn house-auction-button-1">Auction Ended</button>
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
                                                    <a href="../ViewDetails/product-features.html"  class="btn col-md-12 view-details-button btn-sm">View
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
                                        <button type="button" class="btn house-auction-button-1">Auction Ended</button>
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
                                                    <a href="../ViewDetails/product-features.html"  class="btn col-md-12 view-details-button btn-sm">View
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
                                        <button type="button" class="btn house-auction-button-1">Auction Ended</button>
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
                                                    <a href="../ViewDetails/product-features.html"  class="btn col-md-12 view-details-button btn-sm">View
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
                                        <button type="button" class="btn house-auction-button-1">Auction Ended</button>
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
                                                    <a href="../ViewDetails/product-features.html"  class="btn col-md-12 view-details-button btn-sm">View
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
                                        <button type="button" class="btn house-auction-button-1">Auction Ended</button>
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
                                                    <a href="../ViewDetails/product-features.html"  class="btn col-md-12 view-details-button btn-sm">View
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
                                        <button type="button" class="btn house-auction-button-1">Auction Ended</button>
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
                                                    <a href="../ViewDetails/product-features.html"  class="btn col-md-12 view-details-button btn-sm">View
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
                                        <button type="button" class="btn house-auction-button-1">Auction Ended</button>
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
                                                    <a href="../ViewDetails/product-features.html"  class="btn col-md-12 view-details-button btn-sm">View
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
                                        <button type="button" class="btn house-auction-button-1">Auction Ended</button>
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
                                                    <a href="../ViewDetails/product-features.html"  class="btn col-md-12 view-details-button btn-sm">View
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
                                        <button type="button" class="btn house-auction-button-1">Auction Ended</button>
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




<?php include('includes/footer.php');?>



<?php include('includes/src/script_src.php'); ?>

</body>
</html>