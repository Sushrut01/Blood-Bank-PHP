<?php

include ('user/connection.php') ;

$id = $_GET['Id'];

$q = "DELETE FROM `message` WHERE Id = $id";

mysqli_query($con, $q);

header("location:view_request.php");

?>
