$( document ).ready(function() {
    console.log( "ready!" );
    $("#login").click(function() {
        document.location.href="login.html"
    });
    $("#register").click(function() {
        var _username = $("#username").val();
        var _password = $("#pass").val();
        $.ajax({
            type: "GET",
            url: 'http://localhost/Marga/back-end/register.php',
            headers: {
                'Access-Control-Allow-Origin': '*',
                'Access-Control-Allow-Headers': '*',
                'Content-Type': 'application/json'
            },
            data: {
                username : _username,
                password : _password
            },
            success: function(result)
            {
                alert(result)
            },
            error: function(msg){
                console.log(msg);
            }
        });
    });
});