<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet"  href="style.css">
</head>
<body>

<div class="main">
	<form id="myform" action="login_insert.php" method="Post">

<center><p class="h3">Login Page</p></center><br>

<div class="email_css">
    <div class="mb-3">
      <label class="form-label">Email Address</label>
      <input type="text" class="form-control"  name="check_msg" id="check_msg" hidden>      
      <input type="email" class="form-control"  name="email" id="email">
    </div>
</div>

<div class="email_css">
    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="text" class="form-control" name="password" id="password">
    </div><br><br>
</div>

<center><button type="submit" id="btn_login" class="btn btn_reg btn-primary">Login</button></center>
</form>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){

	$("#password").on("input",function() {

    var email = $("#email").val();
    var password = $("#password").val();

    $.ajax({
        url: "check_email_password.php",
        method: "get",
        data: { email:email, password:password },
        success: function(response) {
            response = JSON.parse(response);
            // console.log(response);
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].email === email) {
                $("#check_msg").val('login');
                    break;
                }else{
                $("#check_msg").val('invalid_login');
                }
            }
        }
    });
   });

	$("#email").on("input",function() {

    var email = $("#email").val();
    var password = $("#password").val();

    $.ajax({
        url: "check_email_password.php",
        method: "get",
        data: { email:email, password:password },
        success: function(response) {
            response = JSON.parse(response);
            // console.log(response);
            for (var i = 0; i < response.data.length; i++) {
                if (response.data[i].email === email) {
                $("#check_msg").val('login');
                    break;
                }else{
                $("#check_msg").val('invalid_login');
                }
            }
        }
    });
   });

	$("#myform").on("submit",function(event){

    event.preventDefault();

    var check_msg=$("#check_msg").val();
    // console.log(check_msg);

    if(check_msg != 'login'){
    	alert("Incorrect Password Or Email Address");
    	return false;
    }
    $(this).unbind('submit').submit(); 
    alert("Login Successfully");


    


	});
});

</script>
</html>