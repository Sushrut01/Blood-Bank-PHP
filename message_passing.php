

























</*?php
/*if(isset($_POST["name"]))
{
$firstname = ($_POST["name"]);
}
if(isset($_POST["surname"]))
{
$lastname = ($_POST["surname"]);
}
if(isset($_POST["email"]))
{
$email = ($_POST["email"]);
}
if(isset($_POST["need"]))
{
$need = ($_POST["need"]);
}
if(isset($_POST["mail"]))
{
$mail = ($_POST["mail"]);
}

 if(!empty($firstname) || !empty($lastname) || !empty($email) || !empty($need) || !empty($mail))
 {
   $host = "localhost";
   $user = "root";
   $password = "";
   $db = "bloodbank";
   $conn = new mysqli($host,$user,$password,$db);
   if(mysqli_connect_error())
   {
     die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
   }
  else
    {
        $select = "SELECT email FROM message WHERE email = ?";
        $query = "INSERT INTO message (FirstName,LastName,Email,Reason,Message) VALUES (?,?,?,?,?)";
        $stmt = $conn->prepare($select);
        $stmt->bind_param('s',$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows();
        if($rnum==0)
        {
          $stmt->close();
          $stmt = $conn->prepare($query);
          $stmt->bind_param('sssss',$firstname,$lastname,$email,$need,$mail);
          $stmt->execute();
        }
        $stmt->close();
        $conn->close();
     }
   }
 else
 {
   echo "All field are required!!!";
   die();
 }*/

 $conn = new mysqli("localhost","root","","bloodbank") OR die("Error: ".mysqli_error($conn));
session_start();
 if(isset($_POST['save']))
 {
   if(!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email']) && !empty($_POST['need']) && !empty($_POST['mail']))
   {
     $fname = $_POST['name'];
     $lname = $_POST['surname'];
     $email = $_POST['email'];
     $need = $_POST['need'];
     $mail = $_POST['mail'];

     $query = "INSERT INTO message(firstname,lastname,email,reason,message) values(?,?,?,?,?)";

     $stmt = $conn->prepare($query);
     $stmt->bind_param("sssss",$fname,$lname,$email,$need,$mail);
     if($stmt->execute())
     {
       #alert msg;
     }
     $stmt->close();
     $conn->close();
   }
   else {
     #alert msg
   }
   header("location:message.php");
 }
?*/>
