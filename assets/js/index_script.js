$(document).ready(function () {
    var x_timer;
    $('#login-form-link').click(function (e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function (e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $("#username").keyup(function () {
        // get text username text field value
        clearTimeout(x_timer);
        var username = $("#username").val();

        x_timer = setTimeout(function () {
            // check username name only if length is greater than or equal to 3
            if (username.length >= 4) {
                $("#status").html('<img src="assets/img/loader.gif"/>');
                // check username
                $.post("forms/username_check.php", {
                    username: username
                }, function (data, status) {
                    $("#status> img").remove();
                    $("#status").removeClass();
                    $("#status").addClass(data);
                });
            } else {
                $("#status> img").remove();
                $("#status").removeClass();
            }
        }, 1000);
    });
});
