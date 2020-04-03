<?php
  include('user/header.php');
?>
<body>
  <header>
  <!--Navigation Bar Start-->
  <?php
    include('user/navigation.php');
  ?>
  <!--Navigation Bar Ends-->
  <!--Carousel Start-->
  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <div class="carousel-inner">
    <div class="carousel-item">
      <img src="Images/blood-carousel-1.jpg" alt="Jaipur" width="1400" height="580">
    </div>

    <div class="carousel-item active">
      <img src="Images/blood1.jpg" alt="Jodhpur" width="1400" height="580">
    </div>

    <div class="carousel-item">
      <img src="Images/blood-carousel-2.png" alt="shimla" width="1400" height="580">
    </div>
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
  <!--Carousel Ends-->
</header>
<!--Places Cards Start-->
 <?php
   include('user/placecards.php');
  ?>
<!--Places Cards Ends-->
<!--Contact Section Starts-->
<?php
  include('user/contact.php');
?>
<!--Contact Section Ends-->
<!--Connect Section Starts-->
<?php
  include('user/connect.php');
?>
<!--Connect Section Ends-->
<!--footer starts-->
<?php
  include('user/footer.php');
?>
<!--footer ends-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</body>
</html>
