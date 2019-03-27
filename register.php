<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <style>

  .body-cont{
      margin-right : 30px;
      margin-left : 30px;
  }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
 

  
  </style>
</head>
<body>

    <div class="my-nav"></div>
    <script>
               $(function(){
               $(".my-nav").load("nav.html");
           });
        </script>
  
<div class="container-fluid text-center body-cont">    
    <div class="container">

        <form class="well form-horizontal" action="" method="post">
    <fieldset>
    
    <!-- Form Name -->
    <legend><center><h2><b>Registration Form</b></h2></center></legend><br>
    
    <!-- Text input-->
    
    <div class="form-group">
      <label class="col-md-4 control-label">First Name</label>  
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input  placeholder="First Name" class="form-control"  type="text" name = "fname" required>
        </div>
      </div>
    </div>
    
    <!-- Text input-->
    
    <div class="form-group">
      <label class="col-md-4 control-label" >Last Name</label> 
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input placeholder="Last Name" class="form-control"  type="text" name = "lname">
        </div>
      </div>
    </div>
    
      
    <!-- Text input-->
    
    <div class="form-group">
      <label class="col-md-4 control-label">Username</label>  
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
      <span class="input-group-addon"><i class="fas fa-user-alt"></i></span>
      <input placeholder="Username" class="form-control"  type="text" name = "username" required>
        </div>
      </div>
    </div>
    
    <!-- Text input-->
    
    <div class="form-group">
      <label class="col-md-4 control-label" >Password</label> 
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input  placeholder="Password" class="form-control"  type="password" id ="pwd" name = "pwd" required>
        </div>
      </div>
    </div>
    <div class="form-group">
        <label class="col-md-4 control-label" >Confirm Password</label> 
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        <input  placeholder="Confirm Password" class="form-control" id = "c_pwd" type="password" name = "c_pwd" required>
        <span id='message'></span>
          </div>
        </div>
      </div>

    
   
    <!-- Text input-->
           <div class="form-group">
      <label class="col-md-4 control-label">E-Mail</label>  
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input  placeholder="E-Mail Address" class="form-control"  type="text" onblur="validateEmail(this);" name = "email" required>
        </div>
      </div>
    </div>
    
    
    <!-- Text input-->
           
    <div class="form-group">
      <label class="col-md-4 control-label">Contact No.</label>  
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <input placeholder="(639)" class="form-control" type="text" onblur="phonenumber(this);" name = "contact" required>
        </div>
      </div>
    </div>
    

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label"></label>
      <div class="col-md-4"><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <button type="submit" class="btn btn-warning" name= "register" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
      </div>
    </div>
    
    </fieldset>
    </form>
    </div>
        </div><!-- /.container -->
</div>


</body>
<script>
  function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if (reg.test(emailField.value) == false) 
        {
            alert('Invalid Email Address');
            return false;
        }
        return true;
}
function phonenumber(inputtxt)
{
  var phoneno = /^\d{10}$/;
  if(inputtxt.value.match(phoneno))
        {
      return true;
        }
      else
        {
        alert("Invalid Phone Number");
        return false;
        }
}

$('#pwd, #c_pwd').on('keyup', function () {
  if ($('#pwd').val() == $('#c_pwd').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
</script>
</html>
<?php

    include_once 'include/sqlConnect.php';

    if(isset($_POST['register'])){
        $uFname = $_POST['fname'];
        $uLname = $_POST['lname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $upwd = $_POST['pwd'];

        if ((mysqli_num_rows(mysqli_query($db,"SELECT * FROM `users` WHERE uEmail = '$email'"))>0 || mysqli_num_rows(mysqli_query($db,"SELECT * FROM `users` WHERE username = '$username'"))>0)){
          $message = 'User Already Exists';
          echo "<script type='text/javascript'>alert('$message');</script>";
      }else{
       
        $insertUserSql= "INSERT INTO `users`(`username`, `uFname`, `uLname`, `uEmail`, `uContact`, `uPwd`) VALUES 
        
        ('$username','$uFname','$uLname','$email','$contact','$upwd')";

        $result = mysqli_query($db, $insertUserSql);
         if($result)
            echo "<script type='text/javascript'>alert('Success!plz login to enter ');window.location.href = 'userlogin.php';</script>";

          }

       
    }
    
    ?>