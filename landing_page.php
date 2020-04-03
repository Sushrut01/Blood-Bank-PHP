<!DOCTYPE html>
<head lang="en">
  <title>Landing Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/custom.css">
</head>
<body>
	<header>
		<?php
	    include('user/lp_navbar.php');
	  ?>
	</header>
<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center" style="color:black;">Donate the blood, save the life</h1>
						<p class="text-center" style="color:black;">Donate the blood to help the others.</p>
						</div><br><br><br><br><br><br><br><br><br><br><br><br>

					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
							This organization is run by three of the Computer Science Engineer;
							our aim is to provide blood to the needy ones. If you are in search of blood,
							then feel free to contact us because your one call can save someone's life.
						</p>
						<a href="login.php" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->


			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Sushrut Kansakar</h3>
								<img src="Images/sush.jpg" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									This organization is run by three of the Computer Science Engineer; our aim is to provide blood to the needy ones. If you are in search of blood, then feel free to contact us because your one call can save someone's life.
								</p>
						</div>
    				</div>

    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Debasish Das</h3>
								<img src="Images/dev.jpeg" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									This organization is run by three of the Computer Science Engineer; our aim is to provide blood to the needy ones. If you are in search of blood, then feel free to contact us because your one call can save someone's life.
								</p>
						</div>
    				</div>

    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Tarun Lunia</h3>
								<img src="Images/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
									This organization is run by three of the Computer Science Engineer; our aim is to provide blood to the needy ones. If you are in search of blood, then feel free to contact us because your one call can save someone's life.
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>
</body>
			<!-- end aboutus section -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
			<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

<?php
//include footer file
include ('user/footer.php');
 ?>
