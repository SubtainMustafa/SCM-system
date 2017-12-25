$(document).ready(function(){
    $("#loginForm").submit(function(event){
        event.preventDefault();
        var user = $("#Name").val();
        var pass = $("#Password").val();

        if(user == "")
        {

            $("#Name").focus();
            $(".error").html("Please Enter Name");
        }
        else if(pass == "")
        {
            $(".error").html("Please Enter Pass");
            $("#Password").focus();
        }

      else if(user != "" && pass != "")
        {
            $.ajax({
                type: "POST",
                url: "classes/login.php",
                data: {
                    user:user,
                    pass:pass
                },
                success: function(data){
                    if(data == "Done")
                    {
                        window.location.replace("home.php");
                    }
                    else
                    {
                        $(".error").html(data);
                    }


                }

            });
        }
    });


});



