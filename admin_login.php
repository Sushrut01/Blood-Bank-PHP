<?php
	if(isset($_POST["email"]))
	{
	$email = ($_POST["email"]);
	}
	if(isset($_POST["password"]))
	{
	$password = ($_POST["password"]);
	}
	$error = "";
	if(isset($_POST['submit']))
	{
		if($email=="sushrutkansakar1@gmail.com")
		{
		  if($password=="qwerty@1")
		  {
			header("location:view_request.php");
		  }
		  else
		  {
			$error = "Invalid Password!!!";
		  }
		}
		else
		{
			$error = "Invalid Email!!!";
		}
	}
 ?>
<?php
  include('user/login_css.php');
?>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1 class="text-left">ADMIN LOGIN</h1>
        <p class="text-left">
           The purpose is to meet the challenging requirement of modern day blood during emergency. This system presents
		    an alert system to the donor about requirement of their blood to a person in need and also provides online
			    status of blood group wise availability of blood units in all the licensed blood bank in the states.</p>
       </div>
       <div class="col-md-5">
         <!--make a two column of 6-->
         <div class="row">
           <div class="col-md-6">
             <h3 class="text-left">Login Here</h3>
           </div>
           <div class="col-md-6">
            <button type="button" class="btn btn-primary" onclick="goBack()">BACK</button>
           </div>
         </div>
         <!--close-->
         <hr>


		<p style="color:yellow"><?php echo $error?></p>

<!--form begins-->
		 <form method="post">
         <div class="row">
           <label class="label col-md-2 control-label">E-mail</label>
           <div class="col-md-10">
             <input type="email" class="form-control" name="email" placeholder="E-mail" required>
           </div>
         </div>
         <div class="row">
           <label class="label col-md-2 control-label">Password</label>
           <div class="col-md-10">
             <input type="password" class="form-control" name="password" placeholder="Password" required>
           </div>
         </div>
         <input type="submit" class="btn btn-info" value="Submit" name="submit">
         <input type="button" class="btn btn-warning" value="Forgot" name="forgot">
		 </form>

<!--form ends-->

       </div>
      </div>
    </div>
    <script>
      function goBack()
      {
        window.history.back();
      }
    </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>
</html>
