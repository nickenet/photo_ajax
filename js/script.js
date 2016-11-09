$(document).ready(function () {
    $('#photo').submit(function () {
        
        var fd = new FormData($(this));
        $.ajax({
            url: "addphoto.php",
            type: "post",
            data:fd,
            processData: false,
            contentType: false,
            success: function (data) {                
                $('.gallery').empty();
                $.each(data, function(i,photo){
                    $('.gallery').append('<img src="'+photo.src+'"/>');
                });                
            }
        });
        return false;
    });
});