<?php 
  include ('admin/config.php');
    if (!empty($_GET["page"])) 
      { 
        $page  = $_GET["page"]; } else { $page=1; 
      }; 
    $start_from = ($page-1) * $results_per_page;
    $select = mysqli_query($conn, "SELECT * FROM goldenstone_addroom ORDER BY room_id ASC LIMIT $start_from,".$results_per_page);
     
    
if(!empty($_POST["vid"]))
{
    $room_Id  = $_POST["vid"];
    $query    = mysqli_query($conn, "SELECT * FROM goldenstone_addroom WHERE room_id = $room_Id");
    $arr      = array();
    if(mysqli_num_rows($query) > 0)
    {
	    $room    = mysqli_fetch_assoc($query);
	    array_push($arr, $room);
    }
    echo json_encode($arr);
}


//......................User signup..............................

if(!empty($_POST["btnSignup"]))
{
$name = $_POST["name"];
$mob  = $_POST["mob"];
$eid  = $_POST["eid"];
$pass = $_POST["pass"];

$query = mysqli_query($conn, "SELECT * FROM goldenstone_userdetails WHERE eid = '$eid'");    
    if(mysqli_num_rows($query) > 0)
    {
      echo "<script>alert('The emailid you have entered is already registered!!'); window.location = 'signup.php';</script>";
    }
    else
    {
    $signup = mysqli_query($conn,"INSERT INTO goldenstone_userdetails(name, mobNo, eid, pass) VALUES('$name','$mob','$eid','$pass')");
    ?>
    <script type="text/javascript"> alert('You have been successfully registered!!'); window.location="login.php"</script>
    <?php 
    }
}

//.......................User login....................................

if(!empty($_POST["btnLogin"]))
  {
session_start();
    $email    = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $query    = mysqli_query($conn, "SELECT * FROM goldenstone_userdetails WHERE eid = '$email' AND pass = '$password'");    
    if(mysqli_num_rows($query) > 0)
    {
      $data = mysqli_fetch_array($query);
      $_SESSION['username'] = $data["name"];
      $_SESSION['userId']   = $data["userId"];
      header("location: index.php");
    }
    else
    {
      echo "<script>alert('Invalid User'); window.location = 'login.php';</script>";
    }    
  }

//...................................Room Booking Details.......................................

if(!empty($_GET['room_id']))
{
  $roomId      = $_GET["room_id"];
  $arr         = explode("/",$roomId);
  $room_id     = base64_decode($arr[0]);  
  $query       = mysqli_query($conn,"SELECT * FROM goldenstone_addroom WHERE room_id='$room_id'");
  $roomData    = mysqli_fetch_assoc($query);
}
if(!empty($_POST["btnBookRoom"]))
{
  $userId   = $_POST["userId"];
  $roomId   = $_POST["room_id"];
  $chkIn    = $_POST["chkIn"];
  $chkOut   = $_POST["chkOut"];

  echo $bookRoom = mysqli_query($conn,"INSERT INTO goldenstone_roombooking(check_in, check_out, user_id, roomId) VALUES('$chkIn', '$chkOut', '$userId', '$roomId')");
  if($bookRoom > 0)
  {
    echo "<script>alert('Your room has been successfully booked!!'); window.location = 'index.php';</script>";
  }
}

//.................................Edit User Profile........................

if(!empty($_GET['user_id']))
{
  $userId      = $_GET["user_id"];
  $arr         = explode("/",$userId);
  $user_id     = base64_decode($arr[0]);  
  $query       = mysqli_query($conn,"SELECT * FROM goldenstone_userdetails WHERE userId='$user_id'");
  $userProfile = mysqli_fetch_assoc($query);
  $q = mysqli_query($conn,"SELECT * FROM goldenstone_addroom RIGHT JOIN goldenstone_roombooking ON goldenstone_roombooking.roomId=goldenstone_addroom.room_id WHERE user_id='$user_id'");
}

if(!empty($_POST["btnUpdateProfile"]))
{
  $name   = $_POST["name"];
  $mob    = $_POST["mob"];
  $eid    = $_POST["eid"];
  $pass   = $_POST["pass"];
  $userId = $_POST["userId"];

  $update = mysqli_query($conn,"UPDATE goldenstone_userdetails SET name ='$name', mobNo='$mob', eid='$eid', pass='$pass' WHERE userId='$userId'");
  ?>
  <script type="text/javascript">window.location="index.php"</script>
  <?php  
}

//....................................View Bookings................................


?>