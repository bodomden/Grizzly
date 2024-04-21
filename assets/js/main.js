$(document).ready(function() {
    if ($.cookie('phone') == null) {
        $('#cookies').modal('show');
        $('.btn-cookie').on('click', function(){
            $.cookie('phone', 'true', { expires: 1});
        });        
    }    
});

