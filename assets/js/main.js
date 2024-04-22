$(document).ready(function() {
    if ($.cookie('phone') == null) {
        $('#cookies').modal('show');
        $('.btn-cookie').on('click', function(){
            $.cookie('phone', 'true', { expires: 1});
        });        
    }    
});

$("#phoneform").submit(function(event) {

    event.preventDefault();
    $.post("/assets/code.php", {
        phone_number: $('#phone_number').val()
    }, function(data) {$("#result").text(data)});
});
