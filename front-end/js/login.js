$( document ).ready(function() {
    $("#login").click(function() {
        var _username = $("#username").val()
        var _password = $("#password").val()
        alert(_username, _password)
        $.ajax({
            type: "GET",
            url: 'http://localhost/Marga/back-end/login.php',
            headers: {
                'Access-Control-Allow-Origin': '*',
                'Access-Control-Allow-Headers': '*',
                'Content-Type': 'application/json'
            },
            data: {
                username : _username,
                password : _password
            },
            success: function(data)
            {
                if(data == "success") {
                    document.location.href="home.html"
                }
            },
            error: function(msg){
                console.log(msg)
            }
        });
    });
    $("#register").click(function() {
        document.location.href="register.html"
    });
});