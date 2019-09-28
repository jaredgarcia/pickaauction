$(document).ready(function() {
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


function register(key) {
    var firstname = $("#firstname");
    var middlename = $("#middlename");
    var lastname = $("#lastname");
    var birthday = $("#birthday");
    var nationality = $("#nationality");
    var school = $('#school');
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