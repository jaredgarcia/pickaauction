$(document).ready(function() {
    getUserDetails();
    $("#nav_login").on('click', function() {
        $("#modal_content").modal('show');
        $(".register_content").hide();
        $("#filter_settings_content").hide();
        $(".login_content").show();
        $("#btn_save").hide();
        $("#btn_login").show();
        $("#btn_signup").show();
        $("#btn_paymaya").hide();
        $("#btn_gcash").hide();
        $("#btn_cancel").hide();
        $(".modal-title").html('Welcome!');
        document.getElementById("modal_dialog").className = "modal-dialog";
    });
    $("#nav_register").on('click', function() {
        $("#modal_content").modal('show');
        $(".login_content").hide();
        $("#filter_settings_content").hide();
        $(".register_content").show();
        $("#btn_login").hide();
        $("#btn_signup").hide();
        $("#btn_paymaya").hide();
        $("#btn_gcash").hide();
        $("#btn_save").show();
        $("#btn_cancel").show();
        $(".modal-title").html('Sign Up!');
        document.getElementById("modal_dialog").className = "modal-dialog modal-lg";
    });
    $("#btn_signup").on('click', function() {
        $("#modal_content").modal('show');
        $(".login_content").hide();
        $("#filter_settings_content").hide();
        $(".register_content").show();
        $("#btn_login").hide();
        $("#btn_signup").hide();
        $("#pay_content").hide();
        $("#btn_save").show();
        $("#btn_cancel").show();
        $(".modal-title").html('Sign Up!');
        document.getElementById("modal_dialog").className = "modal-dialog modal-lg";
    });
    $("#btn_filter").on('click', function() {
        $("#modal_content").modal('show');
        $(".login_content").hide();
        $(".register_content").hide();
        $("#filter_settings_content").show();
        $("#btn_login").hide();
        $("#btn_signup").hide();
        $("#pay_content").hide();
        $("#btn_save").hide();
        $("#btn_cancel").hide();
        $(".modal-title").html('Filter Settings');
        document.getElementById("modal_dialog").className = "modal-dialog modal-lg";
    });
    $("#btn_reg_auction").on('click', function() {
        $("#modal_content").modal('show');
        $("#filter_settings_content").hide();
        $(".login_content").hide();
        $(".register_content").show();

        $("#btn_login").hide();
        $("#btn_signup").hide();
        $("#password_content").hide();
        $("#pay_content").show();
        $("#btn_save").show();
        $("#btn_cancel").show();
        $(".modal-title").html('Register for Auction!');
        document.getElementById("modal_dialog").className = "modal-dialog modal-lg";

    });

    $("#login_auction").on('click', function() {
        $("#modal_content").modal('show');
        $(".register_content").hide();
        $("#filter_settings_content").hide();
        $(".login_content").show();
        $("#btn_login").show();
        $("#btn_signup").hide();
        $("#pay_content").hide();
        $("#btn_save").hide();
        $("#btn_cancel").show();
        $(".modal-title").html('Login for Auction!');
        document.getElementById("modal_dialog").className = "modal-dialog ";
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
                key: 'login_btn',
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

function getUserDetails(){
    var userID = $('#userLoggedInID'); 
  
    $.ajax({
        url: 'includes/fetch/getUser.php',
        method: 'POST',
        dataType: 'JSON',
        data: {
            key: 'getUser',
            userID : userID.val()
        },
        success: function(response) {
            $("#lastname").val(response.lastname).prop('disabled', true);
            $("#firstname").val(response.firstname).prop('disabled', true);
            $("#middlename").val(response.middlename).prop('disabled', true);
            $("#contact_number").val(response.contact_number).prop('disabled', true);
            $("#birthday").val(response.birthday).prop('disabled', true);
            $("#nationality").val(response.nationality).prop('disabled', true);
            $("#country").val(response.country).prop('disabled', true);
            $("#city").val(response.city).prop('disabled', true);
            $("#street").val(response.street).prop('disabled', true);
            $("#zip_code").val(response.zip_code).prop('disabled', true);
            $("#email").val(response.email).prop('disabled', true);

        }
    });
}
function register(key) {
    var lastname = $("#lastname");
    var firstname = $("#firstname");
    var middlename = $("#middlename");

    var birthday = $("#birthday");
    var nationality = $("#nationality");
    var school = $("#school");
    var country = $("#country");
    var gender = $("#gender");
    var email = $("#email");
    var city = $("#city");
    var password = $("#password");
    var street = $("#street");
    var zip_code = $("#zip_code");
    var contact_number = $("#contact_number");

    if (isNotEmpty(lastname) && isNotEmpty(firstname) && isNotEmpty(middlename) && isNotEmpty(school) && isNotEmpty(city) && isNotEmpty(zip_code) && isNotEmpty(street) && isNotEmpty(birthday) && isNotEmpty(country) && isNotEmpty(nationality) && isNotEmpty(email) && isNotEmpty(contact_number)) {
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
                school: school.val(),
                nationality: nationality.val(),
                country: country.val(),
                city: city.val(),
                street: street.val(),
                zip_code: zip_code.val(),
                gender: gender.val(),
                email: email.val(),
                password: password.val(),
                contact_number: contact_number.val(),
            },
            success: function(response) {
                if (response == "added") {
                    alert('Successfully Register!');
                    location.reload();
                } else {
                    console.log(response);
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


//auction side   
$('.btn-number').click(function(e) {
    e.preventDefault();

    fieldName = $(this).attr('data-field');
    type = $(this).attr('data-type');
    var input = $("input[name='" + fieldName + "']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if (type == 'minus') {

            if (currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            }
            if (parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if (type == 'plus') {

            if (currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if (parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function() {
    $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {

    minValue = parseInt($(this).attr('min'));
    maxValue = parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());

    name = $(this).attr('name');
    if (valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if (valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }


});
$(".input-number").keydown(function(e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
        // Allow: Ctrl+A
        (e.keyCode == 65 && e.ctrlKey === true) ||
        // Allow: home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        // let it happen, don't do anything
        return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});



var roundNum = 1;
var b1 = b2 = b3 = b4 = b5 = b6 = 5000050;

ReadyTimer();

function Auction1Timer(){
    var m = new Date();
    m.setMinutes(m.getMinutes() + 5);

    var deadline = m.getTime();

    var x = setInterval(function() {

        var now = new Date().getTime();
        var t = deadline - now;
        var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((t % (1000 * 60)) / 1000);
        document.getElementById("A1_minute").innerHTML = minutes;
        document.getElementById("A1_second").innerHTML = seconds;
        R1BidDummy();
        if (t < 0) {
            clearInterval(x);
            document.getElementById("A1_minute").innerHTML = '0';
            document.getElementById("A1_second").innerHTML = '0';
            ReadyTimer();
        }
    }, 1000);
}

function ReadyTimer(){

    var m = new Date();
    m.setSeconds(m.getSeconds() + 5);

    var deadline = m.getTime();

    var x = setInterval(function() {

        var now = new Date().getTime();
        var t = deadline - now;
        var seconds = Math.floor((t % (1000 * 60)) / 1000);

        document.getElementById("msg").innerHTML = "Round "+roundNum+" starts in "+seconds+"...";
        if (t < 0) {
            clearInterval(x);
            document.getElementById("msg").innerHTML = "";
            document.getElementById("label2").innerHTML = "Round " + roundNum;
            roundNum+=1;
            Auction1Timer();
        }
    }, 1000);
}

function R1BidDummy(){
    var bider = Math.floor(Math.random() * 6);
    var bidChance = Math.floor(Math.random() * 10);

    if (bidChance <= 4){
        switch(bider){
            case 0:
                b1 += 10000;
                document.getElementById("bid_1").innerHTML = b1;
                break;
            case 1:
                b2 += 10000;
                document.getElementById("bid_2").innerHTML = b2;
                break;
            case 2:
                b3 += 10000;
                document.getElementById("bid_3").innerHTML = b3;
                break;
            case 3:
                b4 += 10000;
                document.getElementById("bid_4").innerHTML = b4;
                break;
            case 4:
                b5 += 10000;
                document.getElementById("bid_5").innerHTML = b5;
                break;
            case 5:
                b6 += 10000;
                document.getElementById("bid_6").innerHTML = b6;
                break;
        }
    }
}

$('.btn-number').click(function(e){
    e.preventDefault();

    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {

            if(currentVal > input.attr('min')) {
                input.val(currentVal - 10000).change();
            }
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            //if(currentVal < input.attr('max')) {
            input.val(currentVal + 10000).change();
            //}
            /*
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }
            */
        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
    $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {

    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());

    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }/*
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }*/


});
$(".input-number").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
        // Allow: Ctrl+A
        (e.keyCode == 65 && e.ctrlKey === true) ||
        // Allow: home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)) {
        // let it happen, don't do anything
        return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});