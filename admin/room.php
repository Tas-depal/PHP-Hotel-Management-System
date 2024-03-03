<?php
include 'config.php';

  if(!empty($_POST["btnLogin"]))
  {
    $email    = mysqli_escape_string($conn, $_POST["email"]);
    $password = mysqli_escape_string($conn, $_POST["password"]);
    $query = mysqli_query($conn, "SELECT * FROM goldenstone_adminlogin WHERE eid = '$email' AND password = '$password'");    
    if(mysqli_num_rows($query) > 0)
    {
      $data = mysqli_fetch_array($query);
      $_SESSION['sunm'] = $data["name"];
      $_SESSION['sid']  = $data["room_id"];
      header("location: admin-dashboard.php");
    }
    else
    {
      echo "<script>alert('Invalid User'); window.location = 'index.html';</script>";
    }
    
  }

/*....................insert query....................................*/


if(!empty($_POST['btnAddRoom']))
{
	$roomType = $_POST['selRoomType'];
	$roomNo  =  $_POST['txtRoomNo'];
	$price    = $_POST['txtPrice'];
	$roomDes  = mysqli_real_escape_string($conn,$_POST['txtRoomDesc']);
  $roomImg  = $_FILES["roomImg"]["name"];
  $temp     = $_FILES["roomImg"]["tmp_name"];
  move_uploaded_file($temp, "images/".$roomImg);
      
	$insert = mysqli_query($conn,"INSERT INTO goldenstone_addroom(roomType, roomNo, price, roomDes,	roomImg,roomStatus) VALUES('$roomType', '$roomNo' ,'$price','$roomDes','$roomImg','Available')") or die(mysqli_error($conn));
	if($insert==1) 
    {
    ?>
      <script>
        alert("Room added successfully")
        window.location="addRooms.php"
      </script>
    <?php
    }
  else
    {
    ?>
      <script>
        alert("Please check your database connectivity")
      </script>
    <?php
    }
}


/*.....................................select query.............................*/

  $select = mysqli_query($conn, "SELECT * FROM goldenstone_addroom");


/*.....................................update query.............................*/

if(!empty($_GET["editId"]))
{
    $editId  = $_GET["editId"];
    $arr     = explode("/",$editId);
    $edit_id = base64_decode($arr[0]);  
    $query   = mysqli_query($conn, "SELECT * FROM goldenstone_addroom WHERE room_id = '$edit_id'");
    $edit    = mysqli_fetch_assoc($query);
}
if(!empty($_POST['btnUpdate']))
{
  $roomId     = $_POST['txtRoomId'];
  $roomType   = $_POST['selRoomType'];
  $roomNo     = $_POST['txtRoomNo'];
  $price      = $_POST['txtPrice'];
  $roomDes    = $_POST['txtRoomDesc'];
  $roomStatus = $_POST['selRoomStatus'];
  $roomImg    = $_FILES["roomImg"]["name"];
  $temp       = $_FILES["roomImg"]["tmp_name"];
  $imdData  = move_uploaded_file($temp, "images/".$roomImg);
if(!empty($imgData))
{
  $update = mysqli_query($conn,"UPDATE goldenstone_addroom SET roomType='$roomType', roomNo='$roomNo', price='$price', roomDes='$roomDes', roomStatus='$roomStatus', roomImg='$roomImg' WHERE room_id='$roomId'");  
}
else
{
  $update = mysqli_query($conn,"UPDATE goldenstone_addroom SET roomType='$roomType', roomNo='$roomNo', price='$price', roomDes='$roomDes', roomStatus='$roomStatus' WHERE room_id='$roomId'");    
}
  if($update==1) 
    {
    ?>
      <script>
        alert("Room updated successfully")
        window.location="manageRooms.php"
      </script>
    <?php
    }
  else
    {
    ?>
      <script>
        alert("Please check your database connectivity")
      </script>
    <?php
    }
}

/*.....................................delete query.............................*/

if(!empty($_GET["delId"]))
{
    $delId = $_GET["delId"];
    $arr = explode("/",$delId);
    $del_id = base64_decode($arr[0]);  
    $q1 = mysqli_query($conn, "DELETE FROM goldenstone_addroom WHERE room_id = '$del_id'");
    if($q1 > 0) {
      //header("location: manageRooms.php");
    ?>
    <script type="text/javascript">window.location="manageRooms.php"</script>
    <?php
    }
}

  if(!empty($_POST["btnLogin"]))
  {
session_start();
    $email    = mysqli_escape_string($conn, $_POST["email"]);
    $password = mysqli_escape_string($conn, $_POST["password"]);
    $query = mysqli_query($conn, "SELECT * FROM goldenstone_adminlogin WHERE eid = '$email' AND password = '$password'");    
    if(mysqli_num_rows($query) > 0)
    {
      $data = mysqli_fetch_array($query);
      $_SESSION['sunm'] = $data["name"];
      $_SESSION['sid']  = $data["room_id"];
      header("location: admin-dashboard.php");
    }
    else
    {
      echo "<script>alert('Invalid User'); window.location = 'index.html';</script>";
    }
    
  }

//...............................Manage Bookings..................................


  $roomBooking = mysqli_query($conn,"SELECT * FROM goldenstone_addroom RIGHT JOIN goldenstone_roombooking ON goldenstone_roombooking.roomId=goldenstone_addroom.room_id LEFT JOIN goldenstone_userdetails ON goldenstone_roombooking.user_id=goldenstone_userdetails.userId");


//............................Count no of user registration...................... 

$registration       = mysqli_query($conn,"SELECT COUNT(*) FROM goldenstone_userdetails");
$registration_count = mysqli_fetch_assoc($registration);

//........................Count no of bookings....................................

$bookings       = mysqli_query($conn,"SELECT COUNT(*) FROM goldenstone_roombooking");
$booking_count  = mysqli_fetch_assoc($bookings);

//..........................Total earnings.........................................

$earnings       = mysqli_query($conn,"SELECT SUM(price) FROM goldenstone_addroom RIGHT JOIN goldenstone_roombooking ON goldenstone_roombooking.roomId=goldenstone_addroom.room_id");
$earning_count  = mysqli_fetch_assoc($earnings);      
?>



