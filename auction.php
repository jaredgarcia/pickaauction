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
            <input type="hidden" id="userLoggedInID" value="<?php echo $_SESSION['userID']; ?>">
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
                            <input type="text" class="form-control" placeholder="Last Name" id="lastname"><br>
                        </div>
                        <div class="col-sm-3">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="First Name" id="firstname"><br>
                        </div>
                        <div class="col-sm-3">
                            <label>Middle Name</label>
                            <input type="text" class="form-control" placeholder="Middle Name" id="middlename"><br>
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
                        <div class="col-sm-3">
                            <label>Contact Number</label>
                            <input type="number" class="form-control" placeholder="Contact Number" id="contact_number"><br>
                        </div>
                        <div class="col-sm-3">
                            <label>Birthday</label>
                            <i class="fa fa-calendar"></i><input type="text" class="form-control" id ="birthday" placeholder="Birthday" />
                        </div>
                        <div class="col-sm-3">
                            <label>Nationality</label>
                            <input type="text" class="form-control" placeholder="Nationality" id="nationality"><br>
                        </div>
                        <div class="col-sm-3">
                            <label>Country</label>
                            <input type="text" class="form-control" placeholder="Country" id="country"><br>
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
                            <input type="email" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id="email"><br>
                        </div>
                    </div>
                    <div class="row" id="password_content">
                        <div class="col-sm-6">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" id="password"><br>
                        </div>
                        <div class="col-sm-6">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password" id="confirm_password"><br>
                        </div>
                    </div>
                    <div class="row" id="pay_content">
                        <div class="col-sm-6 pt-1">
                            <h5> Php 20,000 per property cash deposit</h5>
                        </div>
                        <div class="col-sm-3">
                            <button href="live_auction.php" class="btn btn-outline-primary form-control" id="btn_paymaya" ><img width="22px;" height="22px;" src="https://lh3.googleusercontent.com/-K4C2TuW2ISbRoO88Y9IemE2ELzAKS8WCLCcr_01lhvrWTG1LqSHw4wsfpVufkW2ECG2=s180"> <a href="live_auction.php" >
                                                                                                                                                                                                                                                                                              Paymaya
                                                                                                                                                                                                                                                                                                            </a></button>
                        </div>
                        <div class="col-sm-3">
                        <button   class="btn btn-outline-primary form-control" id="btn_gcash" >
                        <a href="live_auction.php" >
                            GCASH
                            </a>
                        </button>
                        </div>
                    </div>
                    <div class="row form-group row ">
                        <div class="col-md-12">
                             <label class="form-check-label float-right">
                                <input type="checkbox" class="form-check-input" value="">I accept the terms and agreement.
                              </label>
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

<div class="section">
            <div class="row">
                <div class="col-md form-inline">
                    <p id="section-selected">For Rent</p>
                    <p id="section-location">
                        <img id="location-icon" src="images/location-icon.png" alt="">La Marea Subd. Brgy. San Antnio
                    </p>
                </div>
            </div>

            <div class="row">
                    <div class="col-md-4">
                        <p class="section-details">2 Storey House, Calamba Laguna</p>
                    </div>

                    <div class="col-md-5 form-inline" style="background-color: #f6f6f6; padding: 0;">
                        <div class="col-md extra-details">
                            <img src="images/circle-icon.png" alt="" style="width: 40px; height: 40px;">
                            <div class="section-extra-details">
                                <p class="digits">663</p>
                                <p>PROPERTY ID</p>
                            </div>
                        </div>

                        <div class="col-md extra-details">
                            <img src="images/circle-icon.png" alt="" style="width: 40px; height: 40px;">
                            <div class="section-extra-details">
                                <p class="digits">200 Sqft</p>
                                <p>SIZE</p>
                            </div>
                        </div>

                        <div class="col-md extra-details">
                            <img src="images/circle-icon.png" alt="" style="width: 40px; height: 40px;">
                            <div class="section-extra-details">
                                <p class="digits">4</p>
                                <p>BEDROOMS</p>
                            </div>
                        </div>

                        <div class="col-md extra-details">
                            <img src="images/circle-icon.png" alt="" style="width: 40px; height: 40px;">
                            <div class="section-extra-details">
                                <p class="digits">3</p>
                                <p>BATHROOMS</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                            <p class="section-details" style="text-align: center;"></p>
                    </div>
            </div>
        </div>

        <div class="section">
                <div class="row">
                       <div class="col-md-8">
                              <div class="card display-card">
                                <div class="card-header head-of-card">
                                    <button type="button" class="btn card-btn">Gallery</button>
                                    <button type="button" class="btn card-btn">View Tour</button>
                                    <button type="button" class="btn card-btn">Video</button>
                                    <button type="button" class="btn card-btn" style="width: 200px;">Street View</button>
                                </div>

                                <div class="card-body content-of-card">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <img src="images/sample-house-image.jpg" class="img-fluid selected-image" alt="">
                                        </div>
                                        <div class="col-md-3">
                                            <img src="images/t1.jpg" class="img-fluid other-image" alt="">
                                            <img src="images/t2.jpg" class="img-fluid other-image" alt="">
                                            <img src="images/t3.jpg" class="img-fluid other-image" alt="">
                                        </div>
                                    </div>

                                </div>
                          </div>

                    <div class="card details-card">
                        <div class="card-header head-of-card">
                            <button type="button" class="btn card-btn">Overview</button>
                            <button type="button" class="btn card-btn">Desciption</button>
                            <button type="button" class="btn card-btn">Features</button>
                            <button type="button" class="btn card-btn">Address</button>
                            <button type="button" class="btn card-btn" style="padding:5px;">Nearby places</button>
                        </div>
    
                        <div class="card-body content-of-card">
                            <div class="row">
                                <div class="col-md-4 lightGray-bg"><p class="tblfrmt newDefaultFontBold">Property ID<span class="detailsValue">663</span></div>
                                <div class="col-md-4"><p class="tblfrmt newDefaultFontBold">Property Status<span class="detailsValue">For sale</span></p></div>
                                <div class="col-md-4 lightGray-bg"><p class="tblfrmt newDefaultFontBold">Year Built ID<span class="detailsValue">2017</span></div>
                                <div class="col-md-4"><p class="tblfrmt newDefaultFontBold">Price<span class="detailsValue">Php 10,000,000</span></div>
                                <div class="col-md-4 lightGray-bg"><p class="tblfrmt newDefaultFontBold">Bedrooms<span class="detailsValue">4</span></p></div>
                                <div class="col-md-4"><p class="tblfrmt newDefaultFontBold">Floor Area<span class="detailsValue">200 SqFt</span></div>
                                <div class="col-md-4 lightGray-bg"><p class="tblfrmt newDefaultFontBold">Property type<span class="detailsValue">Town House</span></div>
                                <div class="col-md-4"><p class="tblfrmt newDefaultFontBold">Bathrooms<span class="detailsValue">4</span></p></div>
                                <div class="col-md-4 lightGray-bg"><p class="tblfrmt newDefaultFontBold">Lot Area<span class="detailsValue">400 SqFt</span></div>
                                <div class="col-md-4"><p class="tblfrmt newDefaultFontBold"> <span class="detailsValue"> </span></div>
                                <div class="col-md-4 lightGray-bg"><p class="tblfrmt newDefaultFontBold"> <span class="detailsValue"> </span></p></div>
                                <div class="col-md-4"><p class="tblfrmt newDefaultFontBold">Garages<span class="detailsValue">2</span></div>
                        </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card auction-scard">
                        <div class="card-header head-of-scard">Live Auction</div>
                        <div class="card-body content-of-scard">
                            <p class="newDefaultFont">Auction starts in<span><button type="button" class="btn greenButton">Add to watchlist</button></span></p>
                            <h3 class="timer">02 &nbsp; : &nbsp; 12 &nbsp; : &nbsp; 16</h2>
                            <pre><p class="newDefaultFontSmall timerLabel">Days         Hours       Mins</p></pre>
                            <hr>
                            <p class="newDefaultFontSmall">Date: October 21, 2019, 12:00 AM PHT</p>
                            <h3 class="price">Php 5,020,000</h3>
                            <p class="center-pos newDefaultFont">Opening Bid</p>
                            <br>
                            <p class="newDefaultFontSmall">On-market Price: Php 10,000,000</p>
                            <hr>
                            <?php
                            if(isset($_SESSION['loggedIn'])){
                            echo' <button class="btn greenButton" id="btn_reg_auction">
                            Register Auction
                            </button>';
                            } else {
                                echo'<button class="btn greenButton" id="login_auction">
                            Register Auction
                            </button>';
                            }
                            ?>
                            <button type="button" class="btn greenButton">compare</button>
                        </div>
                    </div>

                    <div class="card schedSiteVisit-scard">
                        <div class="card-header head-of-scard">Schedule For Site Visit</div>
                        <div class="card-body content-of-scard">
                            <form action="" method="POST">
                                <input class="card-textbox" type="text" name="input_name" placeholder="Name">
                                <input class="card-textbox" type="text" name="input_email" placeholder="E-mail">
                                <input class="card-textbox" type="text" name="input_contactNum" placeholder="Contact Number">
                                <input class="card-textbox" type="text" name="input_targetVisitDate" placeholder="Target Visit Date">
                                
                                <button type="submit" class="btn greenButton sbtn"><span class="sendButton">Send</span></button>
                            </form>
                        </div>
                    </div>  

                    <div class="card propertyFees-scard">
                        <div class="card-header head-of-scard">Property Fees</div>
                        <div class="card-body content-of-scard">
                            <p class="newDefaultFontSmall">There is no Buyer's Premium or technology
                                fee for this propery. Seller has elected to pay the auction fees.
                            </p>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>


<?php include('includes/src/script_src.php'); ?>

   

</body>
</html>