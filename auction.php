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
    <style>
        .nav-link {
        color: white !important;
        }

        .nav-link:hover {
        color: #32CD32 !important;
        }

        .cr_image {
        object-fit: cover;
        width: 100%;
        height: 400px;
        -webkit-filter: grayscale(80%) brightness(70%) contrast(70%)
        }
        .modal-header{
            background-color:#343a40;
        }
        .modal-title{
            color:white;
        }
        #img-bg-index{
            background-image:url("https://si.wsj.net/public/resources/images/B3-DM067_RIGHTS_IM_20190319162958.jpg?fbclid=IwAR1EeOgNf-BSc4hA6KgCUPj7o48qoVezwvnQXlMcRJQuzFfCDtEFT6XZ2ko");
    
        }
        #forgot_pw{
            color:#999;
        }

            .card-width {
        width: 460px;
        }

        .card-house-padding {
            /*background: rebeccapurple;*/
            margin: 5px -17px 0px 0px;
        }

        .card-body-house {
        padding: 10px;
        }

        .card-house {
        -webkit-box-shadow: 3px 0px 16px -6px rgba(66,66,66,1);
        -moz-box-shadow: 3px 0px 16px -6px rgba(66,66,66,1);
        box-shadow: 3px 0px 16px -6px rgba(66,66,66,1);
        border-radius: 10px;
        }

        .house-image {
        width: 100%;
        height: 100%;
        }
        .house-auction-button-1 {
        background: -webkit-linear-gradient(left, rgba(210,255,82,1) 0%, rgba(145,232,66,1) 0%, rgba(145,232,66,1) 100%);
        color: white;
        }

        .house-auction-button-2 {
        background: -webkit-linear-gradient(left, rgba(116,117,111,1) 0%, rgba(51,51,51,1) 100%);
        color: white;
        }

        .view-details-button {
        border-radius: 10px;
        border: none;
        padding: 5px;
        color: white;
        font-weight: bold;
        background: -webkit-linear-gradient(left, rgba(55,207,25,1) 0%, rgba(8,153,0,1) 100%);
        }

        .carousel-control-prev {
        margin-left: -120px;
        }
        .carousel-control-next  {
        margin-right: -60px;
        }

        .carousel-control-prev-icon {
        background-color: black;
        }

        .carousel-control-next-icon {
        background-color: black;
        }

        .carousel-control-prev {
        width: 130px;
        }

        .carousel-control-prev-icon {
        margin-right: -90px;
        }

        .carousel-control-next {
        width: 130px;
        }

        .carousel-control-next-icon {
        margin-left: -90px;
        }

        .card-houses-2 {
        cursor: pointer;
        }

        .card-houses {
        cursor: pointer;
        }


    </style>
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
<?php include('includes/src/script_src.php'); ?>
    <script>
        $( document ).ready(function() {
            $("#nav_login").on('click', function() {
                $("#modal_content").modal('show');
                $(".register_content").hide();
                $(".login_content").show();
                $("#btn_save").hide();
                $("#btn_login").show();
                $("#btn_signup").show();
                $("#btn_cancel").hide();
                $(".modal-title").html('Welcome!');
                document.getElementById("modal_dialog").className = "modal-dialog";
            });
            $("#nav_register").on('click', function() {
                $("#modal_content").modal('show');
                $(".login_content").hide();
                $(".register_content").show();
                $("#btn_login").hide();
                $("#btn_signup").hide();
                $("#btn_save").show();
                $("#btn_cancel").show();
                $(".modal-title").html('Sign Up!');
                document.getElementById("modal_dialog").className = "modal-dialog modal-lg";
            });
            $("#btn_signup").on('click', function() {
                $("#modal_content").modal('show');
                $(".login_content").hide();
                $(".register_content").show();
                $("#btn_login").hide();
                $("#btn_signup").hide();
                $("#btn_save").show();
                $("#btn_cancel").show();
                $(".modal-title").html('Sign Up!');
                document.getElementById("modal_dialog").className = "modal-dialog modal-lg";
            });
            

            $("#btn_login").on('click', function() {
                var email = $("#login_email").val();
                var password = $("#login_password").val();
               
                $.ajax({
                    url: 'includes/sessions/login_session.php',
                    method: 'POST',
                    dataType: 'text',
                    data: {
                        login: 1,
                        email: email,
                        key:'login_btn',
                        password: password
                    },
                    success: function(response) {
                        if (response.indexOf('success') >= 0) {
                            window.location = 'index.php';
                        }
                        if (response.indexOf('invalid') >= 0) {
                            $("#invalid_msg").html('Invalid Email and password!');
                        }
                    },
                
                });
       
              

            });
        });


        function register(key) {
            var firstname = $("#firstname");
            var middlename = $("#middlename");
            var lastname = $("#lastname");
            var birthday = $("#birthday");
            var nationality = $("#nationality");
            var country = $("#country");
            var gender = $("#gender");
            var email = $("#email");
            var city = $("#city");
            var password = $("#password");
            var street = $("#street");
            var zip_code = $("#zip_code");
            var contact_number = $("#contact_number");
            
            if (isNotEmpty(lastname) && isNotEmpty(firstname) && isNotEmpty(middlename) && isNotEmpty(city) && isNotEmpty(zip_code) && isNotEmpty(street) && isNotEmpty(birthday) && isNotEmpty(country) && isNotEmpty(nationality) &&  isNotEmpty(email) && isNotEmpty(contact_number) ) {
                $.ajax({
                    url: 'includes/fetch/users.php',
                    method: 'POST',
                    dataType: 'text',
                    data: {
                        key: key,
                        firstname: firstname.val(),
                        middlename: middlename.val(),
                        lastname: lastname.val(),
                        birthday: birthday.val(),
                        nationality:nationality.val(),
                        country:country.val(),
                        city:city.val(),
                        street:street.val(),
                        zip_code:zip_code.val(),
                        gender: gender.val(),
                        email: email.val(),
                        password:password.val(),
                        contact_number: contact_number.val(),
                    },
                    success: function(response) {
                       if (response == "added") {
                            alert('Successfully Register!');
                            location.reload();
                        } else {
                            firstname.val('');
                            middlename.val('');
                            lastname.val('');
                            birthday.val('');
                            nationality.val('');
                            country.val('');
                            city.val('');
                            street.val('');
                            email.val('');
                            contact_number.val('');
                        }
                    }
                });
            }
        }
        
        function isNotEmpty(caller) {
            if (caller.val() == '') {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
        
        
    </script>

</body>
</html>