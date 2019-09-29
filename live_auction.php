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
                <h2 class="modal-title">hhh</h2>
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
                          <div class="col-sm-12">
                            <label>School</label>
                            <input type="text" class="form-control" placeholder="Name of school" id="school"><br>
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
                    <div class="row">
                        <div class="col-sm-6">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" id="password"><br>
                        </div>
                        <div class="col-sm-6">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password" id="confirm_password"><br>
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
  <div class="container" style="margin-top: 15px;">
        <div class="card"  style="border: none; border-radius: 5px;">
          <div class="card-title">
            <div class="card card-live-auction">
              <div class="card-body" style="padding: 10px; background-color: #222222;">
                <h4><strong>Live Auction</strong></h4>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="form-group row">
              <div class="col-md-4">
                <div style="border-radius: 5px;" class="card">
                  <div class="card-body" style="padding: 0;">
                    <img
                      src="images/h1.jpg"
                      class="img-fluid" alt="Responsive image">
                    <br>
                    <div class="card">
                      <div class="card-body live-auction-assist-history">
                        <div class="row">
                          <div class="col-md-5" style="color: white">
                            <h6 class="mt-1 ml-2">Live Auction</h6>
                          </div>
                          <div class="col-md-7">
                            <button type="button" class="btn btn-live-auction float-right btn-light btn-sm">History</button>
                            <button type="button" class="btn btn-live-auction float-right btn-light btn-sm mr-2">Assist
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card card-bidding-prices">
                      <div class="card-body" style="padding: 7px;">
                        <div class="form-group row bidding-prices">
                          <div class="col-md-6">
                            <small>Bidder 1: Php <span id="bid_1">5000050</span></small>
                            <br>
                            <small>Bidder 2: Php <span id="bid_2">5000050</span></small>
                            <br>
                            <small>Bidder 3: Php <span id="bid_3">5000050</span></small>
                          </div>
                          <div class="col-md-6">
                            <small>Bidder 4: Php <span id="bid_4">5000050</span></small>
                            <br>
                            <small>Bidder 5: Php <span id="bid_5">5000050</span></small>
                            <br>
                            <small>Bidder 6: Php <span id="bid_6">5000050</span></small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card text-center time-bidding">
                      <div class="card-body">
                        <div class="form-group row">
                          <div class="col-md-6">
                            <h6 class="float-right"><span id="label1">Time Left</span></h6>
                          </div>
                          <div class="col-md-6">
                            <h6 class="float-left"><span id="label2">Round 1</span></h6>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-5">
                            <h2 class="float-right"><span id="A1_minute">0</span></h2>
                          </div>
                          <div class="col-md-2">
                            <h2>:</h2>
                          </div>
                          <div class="col-md-5">
                            <h2 class="float-left"><span id="A1_second">0</span></h2>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-6">
                            <small class="float-right"><strong>Mins</strong></small>
                          </div>
                          <div class="col-md-6">
                            <small class="float-left"> <strong>Secs</strong></small>
                          </div>
                        </div>
                      </div>
                      <h4 style="color: coral;"><span id="msg"></span></h4>
                    </div>

                    <div class="card text-center">
                      <div class="card-body">
                        <h3 style="color: rgb(43, 151, 15)">Php 5,000,050</h3>
                        <small>Current Bid</small>
                        <br>
                        <small>Bid Increment: Php 20,000</small>
                        <br>
                        <small>On-market Price: Php 20,000</small>
                        <br>
                        <br>
                          <div class="input-group" style="border: 1px solid rgb(146, 200, 25);">
                            <span class="input-group-btn">
                          <button style="background-color: #fff; box-shadow: none;" type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                            <i class="fas fa-minus-circle" style="color: rgb(146, 200, 25);"></i>
                            </button>
                            </span>
                            <span style="margin-top: 6px;">Php</span>
                            <input style="border: none; box-shadow: none; background-color: #fff;" disabled="disabled" type="text" name="quant[1]" class="form-control input-number" value="5000050" min="5000050">
                            <span class="input-group-btn">
                          <button style="background-color: #fff; box-shadow: none;" type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                            <i class="fas fa-plus-circle" style="color: rgb(146, 200, 25);"></i>
                            </button>
                            </span>
                        </div>
                        <button type="button" class="btn bid-now-button mt-2">Bid Now</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div style="border-radius: 5px;" class="card">
                  <div class="card-body" style="padding: 0;">
                    <img
                      src="images/h2.jpg"
                      class="img-fluid" alt="Responsive image">
                    <br>
                    <div class="card">
                      <div class="card-body live-auction-assist-history">
                        <div class="row">
                          <div class="col-md-5" style="color: white">
                            <h6 class="mt-1 ml-2">Live Auction</h6>
                          </div>
                          <div class="col-md-7">
                            <button type="button" class="btn btn-live-auction float-right btn-light btn-sm">History</button>
                            <button type="button" class="btn btn-live-auction float-right btn-light btn-sm mr-2">Assist
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card card-bidding-prices">
                      <div class="card-body" style="padding: 7px;">
                        <div class="form-group row bidding-prices">
                          <div class="col-md-6">
                            <small>Bidder 1: Php 5,040,000</small>
                            <br>
                            <small>Bidder 1: Php 5,040,000</small>
                            <br>
                            <small>Bidder 1: Php 5,040,000</small>
                          </div>
                          <div class="col-md-6">
                            <small>Bidder 1: Php 5,040,000</small>
                            <br>
                            <small>Bidder 1: Php 5,040,000</small>
                            <br>
                            <small>Bidder 1: Php 5,040,000</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card text-center time-bidding">
                      <div class="card-body">
                        <div class="form-group row">
                          <div class="col-md-6">
                            <h6 class="float-right"> Time Left</h6>
                          </div>
                          <div class="col-md-6">
                            <h6 class="float-left">Round 2</h6>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-5">
                            <h2 class="float-right"><span id="A2_minute">0</span></h2>
                          </div>
                          <div class="col-md-2">
                            <h2>:</h2>
                          </div>
                          <div class="col-md-5">
                            <h2 class="float-left"><span id="A2_second">0</span></h2>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-6">
                            <small class="float-right"><strong>Mins</strong></small>
                          </div>
                          <div class="col-md-6">
                            <small class="float-left"> <strong>Secs</strong></small>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="card text-center">
                      <div class="card-body">
                        <h3 style="color: rgb(43, 151, 15)">Php 5,000,050</h3>
                        <small>Current Bid</small>
                        <br>
                        <small>Bid Increment: Php 20,000</small>
                        <br>
                        <small>On-market Price: Php 20,000</small>
                        <br>
                        <button type="button" class="btn bid-now-button mt-2">Bid Now</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div style="border-radius: 5px;" class="card">
                  <div class="card-body" style="padding: 0;">
                    <img
                      src="images/h3.jpg"
                      class="img-fluid" alt="Responsive image">
                    <br>
                    <div class="card">
                      <div class="card-body live-auction-assist-history">
                        <div class="row">
                          <div class="col-md-5" style="color: white">
                            <h6 class="mt-1 ml-2">Live Auction</h6>
                          </div>
                          <div class="col-md-7">
                            <button type="button" class="btn btn-live-auction float-right btn-light btn-sm">History</button>
                            <button type="button" class="btn btn-live-auction float-right btn-light btn-sm mr-2">Assist
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card card-bidding-prices">
                      <div class="card-body" style="padding: 7px;">
                        <div class="form-group row bidding-prices">
                          <div class="col-md-6">
                            <small>Bidder 1: Php 5,040,000</small>
                            <br>
                            <small>Bidder 1: Php 5,040,000</small>
                            <br>
                            <small>Bidder 1: Php 5,040,000</small>
                          </div>
                          <div class="col-md-6">
                            <small>Bidder 1: Php 5,040,000</small>
                            <br>
                            <small>Bidder 1: Php 5,040,000</small>
                            <br>
                            <small>Bidder 1: Php 5,040,000</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card text-center time-bidding">
                      <div class="card-body">
                        <div class="form-group row">
                          <div class="col-md-6">
                            <h6 class="float-right"> Time Left</h6>
                          </div>
                          <div class="col-md-6">
                            <h6 class="float-left">Round 2</h6>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-5">
                            <h2 class="float-right">0</h2>
                          </div>
                          <div class="col-md-2">
                            <h2>:</h2>
                          </div>
                          <div class="col-md-5">
                            <h2 class="float-left">0</h2>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-6">
                            <small class="float-right"><strong>Mins</strong></small>
                          </div>
                          <div class="col-md-6">
                            <small class="float-left"> <strong>Secs</strong></small>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="card text-center">
                      <div class="card-body">
                        <h3 style="color: rgb(43, 151, 15)">Php 5,000,050</h3>
                        <small>Current Bid</small>
                        <br>
                        <small>Bid Increment: Php 20,000</small>
                        <br>
                        <small>On-market Price: Php 20,000</small>
                        <br>
                        <button type="button" class="btn bid-now-button mt-2">Bid Now</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card" style="border: none;">
            <div class="card-body">
              <div class="form-group row">
                <div class="col-md-7">
                  <div class="card" style="border-radius: 5px;">
                    <div class="card-title properties-fees-changes">
                      <h5></h5>
                    </div>
                    <div class="card-body">
                      <h6>Due alligance simply means that the buyes finds out as much about the  property as should be necessary before making a decision to buy.</h6>
                      <br>
                      <small><strong>(1) At tge opening bid price,if there are two or more bidders for a property, the bid price will be subsequently increased by P20,000.00 per round of biddding, for the
                      next five rounds</strong></small>
                      <br>
                      <small><strong>(2) By the sixth round of biidding, if there are still two or  more bidders for a property, the bid price will be increased by P50,000.00 PER ROUND OF BIDDING</strong></small>
                      <br>
                      <small><strong>(3) By th elevent round of bidding if there are  still towo or more bidders for a properties the bid price will then be increased bt P100,000.00
                      per round of bidding, until the fifteenth round</strong></small>
                      <br>
                      <small><strong>(4) beyond the fifteenth round of the bidding , the auctioner is given sole discreation to increase the bid price by any amount</strong></small>
                      <br>
                      <small><strong>(5) bidding continues until such time that there is only one bidder  for the property  being  bid out After a winning/highest bidder emerges, the property being bid out is declared sold,An award certificate is then issued in the name of the winning bidder.</strong></small>
                    </div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="card" style="border-radius: 5px;">
                    <div class="card-title properties-fees-changes">
                      <h5>Property Fees and Changes</h5>
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          <h6>On the basis of this award certificate, the winning bidder will then be required:</h6>
                        </li>
                        <li class="list-group-item">
                          <h6>Within five working days after the auction</h6>
                          <small class="mb-1"><strong>For cash purchases</strong></small>
                          <br>
                          <small>To pay the 10% down payment in full</small>
                          <br>
                          <small class="mb-1"><strong>For installment purchases</strong></small>
                          <br>
                          <small>To pay the first installment of the required 10% down payment.</small>
                          <br>
                          <small>To sign the Contract to Sell.</small>
                          <br>
                          <small>To submit such number of post dated Checks Corresponding to the installment payments for the down payment
                          , as well as the first two years monthly amortizations</small>
                          <br>
                          <small>Whether the winning bidder pays in cash or installments, the P20,000.00 show money deposited upon registration will credited as part of the down payment. ACCORDINGLY, THIS SHOW MONEY MAY NO LONGER BE WITHDRAWAN</small>
                          <br>
                          <br>
                          <small><strong>1. Only the show money of non-winning bidders will be returned to auction participants right after the auction.</strong></small>
                          <br>
                          <small><strong>2. In contrast in the event the winning bidders fails to pay the full downpayment or installment on down payment within the timeframe specified, the P20, 000.00 show money will be forfetited.</strong></small>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

<?php include('includes/footer.php');?>



<?php include('includes/src/script_src.php'); ?>

</body>
</html>