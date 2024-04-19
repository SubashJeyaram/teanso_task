<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet"  href="style.css">
  </head>
  <body>
    <form id="myform" action="user_information_insert.php" method="post">

<div class="main">


<center><p class="h3">User Registration</p></center><br>

  <div class="name_css">
    <div class="mb-3 name_first">
      <label class="form-label">First Name</label>
      <input type="text" class="form-control" name="fname" id="fname">
    </div>
    <div class="mb-3 name_last">
      <label class="form-label">Last Name</label>
      <input type="text" class="form-control" name="lname" id="lname">
    </div>
  </div>

  <div class="email_css">
    <div class="alert alert-success hidden" id="valid_email"  role="alert">
      Perfect
    </div>
    <input type="text" name="email_msg" id="email_msg" hidden>
    <div class="alert alert-danger hidden" id="invalid_email" role="alert">
     This Email is already Registered Plz enter new email...
    </div>
  </div>

  <div class="email_css">
    <div class="mb-3">
      <label class="form-label">Email Address</label>
      <input type="email" class="form-control"  name="email" id="email">
    </div>
  </div>

  <div class="email_css">
    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="text" class="form-control" name="password" id="password">
    </div>
  </div>

  <div class="email_css">
    <div class="alert alert-success hidden" id="pass_valid"  role="alert">
      Password Matched
    </div>
    <input type="text" name="pass_msg" id="pass_msg" hidden>    
    <div class="alert alert-danger hidden" id="pass_not_valid" role="alert">
    Password Mismatched Plz Enter Password Correctly..
    </div>
  </div>

  <div class="email_css">
    <div class="mb-3">
      <label class="form-label">Confirm Password</label>
      <input type="text" class="form-control" name="c_password" id="c_password">
    </div>
  </div>

  <div class="email_css">
    <div class="alert alert-success hidden" id="valid"  role="alert">
      Valid Mobile Number
    </div>
    <div class="alert alert-danger hidden" id="not_valid" role="alert">
     Invalid Mobile Number Plz enter Number's Only...
    </div>
  </div>

  <div class="email_css">
    <div class="mb-3">
      <label class="form-label">Mobile Number</label>
      <input type="text" maxlength="10" class="form-control"  name="number" id="number">
    </div>
  </div>

  <div class="email_css">
    <label class="form-check-label">Gender :</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="gender" id="male" value="male">
      <label class="form-check-label">Male</label>
    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="form-check form-check-inline">
     <input class="form-check-input" type="radio" name="gender" id="female" value="female">
     <label class="form-check-label" >Female</label>
    </div><br><br>
  </div>

  <div class="email_css">
    <label class="form-label">Select Country :</label>
  <select class="form-select" id="select_country" name="country" aria-label="Default select example">
  <option selected>Open this to select country</option>
  </select>
  </div><br>

  <div class="email_css">
    <label class="form-label">Select State :</label>
  <select class="form-select" id="select_state" name="state" aria-label="Default select example">
  <option selected>Open this to select state</option>
  </select>
  </div><br><br>


<center><button type="submit" id="btn" class="btn btn_reg btn-success">Submit</button></center>


</div><br><br>
</form>

</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){

    // Email id Validatiion
    $("#email").on('blur',function(){
      var email=$(this).val();

      $.ajax({
        url:"email_is_there.php?email="+email,
        method:'get',
        success:function(response){
        response = JSON.parse(response);
        for($i=0; $i<response.data.length; $i++){
          if(response.data[$i].email == email){
             $("#invalid_email").removeClass("hidden");
             $("#valid_email").addClass("hidden");
             $("#email_msg").val('invalid');
          }else{
            $("#valid_email").removeClass("hidden");
            $("#invalid_email").addClass("hidden");
             $("#email_msg").val('valid');            
          }
        }
        }
      });
    });
    // Email id Validatiion end




  // Password Validatiion

  $("#c_password").on('input',function(){

    var password=$("#password").val();
    var c_password=$("#c_password").val();

    if(password == c_password){
      $("#pass_valid").removeClass("hidden");
      $("#pass_not_valid").addClass("hidden");
             $("#pass_msg").val('Matched');
    }else{
      $("#pass_not_valid").removeClass("hidden");
      $("#pass_valid").addClass("hidden");
             $("#pass_msg").val('invalid'); 
    }
  });

  // Password Validatiion end



  // Mobile Number Validatiion
  $("#number").on("input", function(){
        var mobNum = $(this).val();
        var filter =  /^\d{10}$/;

          if (filter.test(mobNum)) {
            if(mobNum.length==10){
              $("#valid").removeClass("hidden");
              $("#not_valid").addClass("hidden");
             } else {
               $("#not_valid").removeClass("hidden");
               $("#valid").addClass("hidden");
              }
            }
            else {
              $("#not_valid").removeClass("hidden");
              $("#valid").addClass("hidden");
           }
  });
  // Mobile Number Validatiion end


  // Selection for country and state

  $("#select_country").one('click',function(){
    $.ajax({
      url:"select_country.php",
      method:"get",
      success:function(response){
        response = JSON.parse(response);
        for($i=0; $i<response.data.length; $i++){
          var select_country_option="<option value='" + response.data[$i].country + "'>" + response.data[$i].country + "</option>";
          $("#select_country").append(select_country_option);
        }
      }
    });
  });


  $("#select_country").on('change',function(){
    var country_name=$(this).val();
    $.ajax({
      url:"select_state.php?country_name="+country_name,
      method:"get",
      success:function(response){
        response = JSON.parse(response);        
        for($i=0; $i<response.data.length; $i++){
          var select_state_option="<option value='" + response.data[$i].state + "'>" + response.data[$i].state + "</option>";
          $("#select_state").append(select_state_option);
        }
      }
    });
  });

  // Selection for country and state end

  // form submit event

  $("#myform").on('submit',function(event){

    event.preventDefault();

    var fname=$("#fname").val();
    var email=$("#email").val();
    var password=$("#password").val();
    var c_password=$("#c_password").val();
    var number=$("#number").val();
    var gender = $("input[name='gender']:checked").val();
    var country=$("#select_country").val();
    var state=$("#select_state").val();

    if(fname == ""){
      alert("Plz Enter Your First Name");
      return false;
    }
    if(email == ""){
      alert("Plz Enter Your Email");
    }
    if(password == ""){
      alert("Plz Enter Valid Password");
      return false;
    }
    if(c_password == ""){
      alert("Plz Enter Valid Password");
      return false;
    }
    if(number == ""){
      alert("Plz Enter Your Mobile Number");
      return false;
    }
    if(gender == ""){
      alert("Plz Select  Gender");
      return false;
    }
    if(country == ""){
      alert("Plz Select Country");
      return false;
    }
    if(state == ""){
      alert("Plz Select State");
      return false;
    }  

    var email_msg=$("#email_msg").val();
    // console.log(email_msg);
    if(email_msg != "valid"){
      alert("This Email is already Registered Plz try with another email");
      return false;
    }

    var pass_msg=$("#pass_msg").val();
    // console.log(email_msg);
    if(pass_msg != "Matched"){
      alert("Plz Check Password");
      return false;
    }

    $(this).unbind('submit').submit(); 
    alert("Registered Successfully"); 

  });

  // form submit event end

});

</script>

</html>