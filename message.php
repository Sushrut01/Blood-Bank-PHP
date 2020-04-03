<?php
  include('user/connection.php');
  if(isset($_POST['save'])){

 $name = $_POST['name'];
 $surname = $_POST['surname'];
 $email = $_POST['email'];
 $reason = $_POST['need'];
 $message = $_POST['mail'];
 $q = " INSERT INTO `message`(`firstname`, `lastname`,`email`,`reason`,`message`) VALUES ( '$name', '$surname','$email','$reason','$message')";

 $query = mysqli_query($con,$q);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Message Us</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="hmt.css">
    </head>
    <body style="background-image:url('Images/message.jpg')">
      <!--Navigation Bar Start-->
      <?php
        include('user/navigation.php');
      ?>
      <!--Navigation Bar Ends-->


      <!--Contact Form Starts-->
      <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 py-4">
                    <h1 style="text-align:center; text-decoration:underline"><pre>MESSAGE US</pre></h1>
                    <p class="lead" style="text-align:center" >Please share your valuable message to us through this form.</p>
                    <!-- We're going to place the form here in the next step -->
                    <form id="contact-form" method="post" role="form" onsubmit="alert('Thank You for your valuable feedback, we will get back to you soon!!! Have a nice day!!!');">
                      <div class="messages"></div>
                      <div class="controls">
                        <div class="row">
                          <div class="col-md-6">
                  <div class="form-group">
                      <label for="form_name">Firstname *</label>
                      <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="form_lastname">Lastname *</label>
                      <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="form_email">Email *</label>
                      <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label for="form_need">Please specify your need *</label>
                      <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                          <option selected hidden value="select">--Select--</option>
                          <option value="Request quotation">Request blood</option>
                          <option value="Request copy of an invoice">Donate Blood</option>
                          <option value="Other">Other</option>
                      </select>
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                      <label for="form_message">Message *</label>
                      <textarea id="form_message" name="mail" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                      <div class="help-block with-errors"></div>
                  </div>
              </div>
              <div class="col-md-12">
                  <input type="submit" name="save" class="btn btn-success btn-send" value="Send message">
              </div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-muted">
                          <strong>*</strong> These fields are required.
                    </div>
                </div>
              </div>
            </form>
              </div>
            </div>
              <h4 class="text-center text-capitalize">OR</h4>
              <h5 class="text-center text-capitalize pt-2"><u>Connect Us via:</u></h5>
              <div class="col-12 social pl-5 text-center pt-2" style="font-size:3rem; padding:4rem" id="contact">
                <a href="www.facebook.com"><i class="fab fa-facebook"></i></a>
                <a href="www.twitter.com"><i class="fab fa-twitter"></i></a>
                <a href="GooglePlus.com"><i class="fab fa-google-plus-g"></i></a>
                <a href="www.Instagram.com"><i class="fab fa-instagram"></i></a>
                <a href="www.youtube.com"><i class="fab fa-youtube"></i></a>
              </div>
        </div>
        </section>
        <!--Contact form ends-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    </body>
</html>
