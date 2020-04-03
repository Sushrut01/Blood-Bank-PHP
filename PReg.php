<html>
<head>
<?php
$email=$password=$cpassword=$name=$phoneno="";
$count=0;
if($_SERVER['REQUEST_METHOD']=="POST")
{
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$phoneno=$_POST['pno'];
if (empty($name)) {
   echo '<script> alert("Name is required") </script>';
   $count++;
  } else {
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      echo '<script> alert("Only letters and white space allowed")</script>';
      $count++;
    }
  }

  if (empty($email)) {
    echo '<script> alert ("Email is required")</script>';
    $count++;
  } else {
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo '<script> alert("Invalid email format")</script>';
      $count++;
    }
  }
  if (empty($password)) {
    echo '<script> alert ("Password  is required")</script>';
    $count++;
  }
  else
  {
	  if($password!=$cpassword)
	  {
		  echo '<script> alert("password and Confirm Password not matches")</script>';
      $count++;
	  }
	  else if(! preg_match('/^[0-9]+$/', $password))
		  {
			 echo '<script> alert("Password Should have atleast length 8 and contain atleast one Lower Case and upper case and a special character")</script>';
       $count++;
		  }

  }
  if(empty($phoneno)){
	  echo '<script> alert("Phone number wont be empty")</script>';
    $count++;
  }
  else
  {
	  if(!preg_match("/^[0-9]+$/",$phoneno)){
		 echo  '<script> alert("Phone number must contain 10 digits")</script>';
     $count++;
	  }
  }
session_start();
// connection to database
$db=mysqli_connect('localhost','root','','bloodbank') or die("Not connect to DB");
if(isset($_POST['register']))
{
  if($count==0)
  {
    mysqli_fetch();
    $password=md5($password);
  $sql="INSERT INTO register(Name,Email,Password,PhoneNumber) VALUES('$name','$email','$password','$phoneno')";
  mysqli_query($db,$sql);
  header("location:login.php");
  }
}
}
?>
</head>
<body>
<link href="Styles.css" rel="stylesheet" type="text/css"/>
<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class= "alert alert-error"></div>
      <input type="text" placeholder="User Name" name="name" />
      <input type="text" placeholder="Email" name="email"  />
      <input type="text" placeholder="Password" name="password" autocomplete="new-password" />
      <input type="text" placeholder="Confirm Password" name="cpassword" autocomplete="new-password"  />
	  <input type="text" placeholder="Phone Number" name="pno" >
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>
</body>
</html>
