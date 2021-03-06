$(function () {

    $('#contact-form').submit(function(e) {
        e.preventDefault();
        $('.comments').empty();
        var postdata = $('#contact-form').serialize();

        $.ajax({
            type: 'POST',
            url: '../contact.php',
            data: postdata,
            dataType: 'json',
            success: function(json) {
                if (json.isSuccess) {
                    $('#contact-form').append("<p class='thank-you'>Data !!!! Even more data !!!! Full of data !!!!! Mouhaha !!!</p>");
                    $('#contact-form')[0].reset();
                } else {
                    $('#firstname + .comments').html(json.firstnameError);
                    $('#name + .comments').html(json.nameError);
                    $('#email + .comments').html(json.emailError);
                    $('#phone + .comments').html(json.phoneError);
                    $('#subject + .comments').html(json.subjectError);
                    $('#message + .comments').html(json.messageError);
                }
            }
        });
    });
})