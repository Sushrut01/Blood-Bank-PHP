<!DOCTYPE html>
<html>
<head lang="en">
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <style>
  #jq,#jq1,#jq2
  {
    text-align: center;
    background-color: #e5eecc;
    border: solid 1px #c3c3c3;
    padding: 50px;
    display: none;
  }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
      $("#btn1").click(function(){
        $("#jq").slideToggle();
      });
    });
    $(document).ready(function(){
        $("#btn2").click(function(){
          $("#jq1").slideToggle();
        });
      });
    $(document).ready(function(){
        $("#btn3").click(function(){
          $("#jq2").slideToggle();
        });
      });
  </script>
</head>
 <body>
   <?php
    include('user/navigation.php');
   ?>
   <!--Title Section Start-->
  <section>
    <div class="jumbotron jumbotron-fluid text-center py-4 my-0">
    <div class="container-fluid">
      <h1 class="display-4 text-color-pink">BLOOD MANAGEMENT SYSTEM</h1>
      <p class="lead">Welcome admin, hope you are having a good day!!!</p>
    </div>
  </div>
</section>
<!--Places Cards Start-->
  <section>
    <div class="container-fluid py-5">
      <hr class="w-50 mx-auto">
      <h1 class="text-center text-capitalize pt-2">FIND REQUEST BELOW</h1>
      <hr class="w-50 mx-auto pt-5">
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 pl-5">
        <div class="card h-100">
          <img class="card-img-top" src="Images/registered.png" alt="Card image cap" width="300" height="256">
            <div class="card-body">
              <h5 class="card-title">Registered Users</h5>
              <hr w-25 mx-auto pt-3>
              <p class="card-text">Here, you can see the information of all the registered users.</p>
              <button class="btn btn-primary" id="btn1">Read More</button>
            </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-4 col-12 pl-5">
         <div class="card h-100">
           <img class="card-img-top" src="Images/contact.jpg" alt="Card image cap" width="300" height="256">
             <div class="card-body">
               <h5 class="card-title">Contact Us Messages</h5>
               <hr w-25 mx-auto pt-1>
               <p class="card-text">Here, you can see the messages send by your users, their doubts and requests.</p>
               <button class="btn btn-primary" id="btn3">Read More</button>
             </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12 pl-5">
          <div class="card h-100">
            <img class="card-img-top" src="Images/contact.png" alt="Card image cap" width="300" height="256">
              <div class="card-body">
                <h5 class="card-title">FeedBacks</h5>
                <hr w-25 mx-auto pt-1>
                <p class="card-text">Here, you can see the feedbacks send by your users.</p>
                <button class="btn btn-primary" id="btn2">Read More</button>
              </div>
           </div>
         </div>
    </div>
</div>
<!--Places Cards Ends-->
  </section>
  <!--View Request table starts-->
  <section>
    <div class="container-fluid py-5">

      <div class="container" id="jq">
        <hr class="w-25 mx-auto">
        <h1 class="text-center text-capitalize pt-2">BLOOD REQUESTS</h1>
        <hr class="w-25 mx-auto pt-5">
   <table  id="tabledata" class=" table table-striped table-hover table-bordered">

 <tr class="bg-dark text-white text-center">
 <th> Id </th>
 <th> Name </th>
 <th> Email </th>
 <th> Age </th>
 <th> Roll_No </th>
 <th> Action </th>
 </tr >

 <?php

 include ('user/connection.php');
 $q = "select * from blood ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['Id'];  ?> </td>
 <td> <?php echo $res['Name'];  ?> </td>
 <td> <?php echo $res['Email'];  ?> </td>
 <td> <?php echo $res['Age'];  ?> </td>
 <td> <?php echo $res['Roll_No'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="delete_blood.php?Id=<?php echo $res['Id']; ?>" class="text-white"> Delete </a>  </button> </td>

 </tr>

 <?php
 }
  ?>

 </table>
 </div>
</div>
 </section>
 <!--View Request table ends-->
 <!--Message table starts-->
 <section>
   <div class="container-fluid py-5">

     <div class="container" id="jq1">
       <hr class="w-25 mx-auto">
       <h1 class="text-center text-capitalize pt-2">FEEDBACKS</h1>
       <hr class="w-25 mx-auto pt-5">
  <table  id="tabledata" class=" table table-striped table-hover table-bordered">

<tr class="bg-dark text-white text-center">
<th> Id </th>
<th> FirstName </th>
<th> LastName </th>
<th> Email </th>
<th> Reason </th>
<th> Message </th>
<th> Action </th>
</tr >

<?php

include ('user/connection.php');
$q = "SELECT * FROM message";

$query = mysqli_query($con,$q);

while($res = mysqli_fetch_array($query)){
?>
<tr class="text-center">
<td> <?php echo $res['Id'];  ?> </td>
<td> <?php echo $res['FirstName'];  ?> </td>
<td> <?php echo $res['LastName'];  ?> </td>
<td> <?php echo $res['Email'];  ?> </td>
<td> <?php echo $res['Reason'];  ?> </td>
<td> <?php echo $res['Message'];  ?> </td>
<td> <button class="btn-danger btn"> <a href="delete_message.php?Id=<?php echo $res['Id']; ?>" class="text-white"> Delete </a>  </button> </td>

</tr>

<?php
}
 ?>

</table>
</div>
</div>
</section>
<!--Message table ends-->
<!--Contact Us table starts-->
<section>
  <div class="container-fluid py-5">

    <div class="container" id="jq2">
      <hr class="w-25 mx-auto">
      <h1 class="text-center text-capitalize pt-2">CONTACT US</h1>
      <hr class="w-25 mx-auto pt-5">
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">

<tr class="bg-dark text-white text-center">
<th> Id </th>
<th> Name </th>
<th> Email </th>
<th> Subject </th>
<th> Content </th>
<th> Action </th>
</tr >

<?php

include ('user/connection.php');
$q = "SELECT * FROM contact";

$query = mysqli_query($con,$q);

while($res = mysqli_fetch_array($query)){
?>
<tr class="text-center">
<td> <?php echo $res['Id'];  ?> </td>
<td> <?php echo $res['Name'];  ?> </td>
<td> <?php echo $res['Email'];  ?> </td>
<td> <?php echo $res['Subject'];  ?> </td>
<td> <?php echo $res['Content'];  ?> </td>
<td> <button class="btn-danger btn"> <a href="delete_contact.php?Id=<?php echo $res['Id']; ?>" class="text-white"> Delete </a>  </button> </td>

</tr>

<?php
}
?>

</table>
</div>
</div>
</section>
<!--COntact Us table ends-->
<?php
  include('user/footer.php');
?>
 </body>
 </html>
