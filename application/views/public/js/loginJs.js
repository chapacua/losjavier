$(document).ready(function() {
    //Login
    $("#loginForm").submit(function () {
        event.preventDefault();
        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            data: $(this).serialize(),
            success: function(data)
            {
                if (data== 1)
                {
                    alert('pailas');
                }else{
                    alert('pasó');
                }
            }
        });
    });
});