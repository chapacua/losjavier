$(document).ready(function() {
    //Login
    $("#loginForm").submit(function(e){
        e.preventDefault();
        e.stopPropagation();
        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            dataType: "json",
            data: $(this).serialize(),
            success: function(response)
            {
                if (response)
                {
                    window.location.href = base_url+'votacion/';
                }else{
                    window.location.href = base_url;
                }
            }
        });
    });
});