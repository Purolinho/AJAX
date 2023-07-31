$(function(){
    $("#botao").on("click", function(){
        
        $.ajax({
            url: "info.php",
            success: function(result) {
                $("#info").html(result);
            },
            error: function() {
                $("#info").html("Error");
            }
        })

    }) 
});