<?php
include 'config.php';

if (!empty($_POST["btnLogin"])) {
    session_start();
    $email    = pg_escape_string($conn, $_POST["email"]);
    $password = pg_escape_string($conn, $_POST["password"]);
    $query    = pg_query($conn, "SELECT * FROM goldenstone_adminlogin WHERE eid = '$email' AND password = '$password'");    
    if (pg_num_rows($query) > 0) {
        $data = pg_fetch_array($query);
        $_SESSION['sunm'] = $data["name"];
        $_SESSION['sid']  = $data["room_id"];
        header("location: admin-dashboard.php");
    } else {
        echo "<script>alert('Invalid User'); window.location = 'index.html';</script>";
    }
}

/*....................insert query....................................*/

if (!empty($_POST['btnAddRoom'])) {
    $roomType = $_POST['selRoomType'];
    $roomNo   = $_POST['txtRoomNo'];
    $price    = $_POST['txtPrice'];
    $roomDes  = pg_escape_string($conn, $_POST['txtRoomDesc']);
    $roomImg  = $_FILES["roomImg"]["name"];
    $temp     = $_FILES["roomImg"]["tmp_name"];
    move_uploaded_file($temp, "images/".$roomImg);
      
    $insert = pg_query($conn, "INSERT INTO goldenstone_addroom(roomType, roomNo, price, roomDes, roomImg, roomStatus) VALUES('$roomType', '$roomNo' ,'$price','$roomDes','$roomImg','Available')");
    
    if ($insert) {
        ?>
        <script>
            alert("Room added successfully")
            window.location="addRooms.php"
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Please check your database connectivity")
        </script>
        <?php
    }
}

/*.....................................select query.............................*/

$select = pg_query($conn, "SELECT * FROM goldenstone_addroom");

/*.....................................update query.............................*/

if (!empty($_GET["editId"])) {
    $editId  = $_GET["editId"];
    $arr     = explode("/", $editId);
    $edit_id = base64_decode($arr[0]);  
    $query   = pg_query($conn, "SELECT * FROM goldenstone_addroom WHERE room_id = '$edit_id'");
    $edit    = pg_fetch_assoc($query);
}

if (!empty($_POST['btnUpdate'])) {
    $roomId     = $_POST['txtRoomId'];
    $roomType   = $_POST['selRoomType'];
    $roomNo     = $_POST['txtRoomNo'];
    $price      = $_POST['txtPrice'];
    $roomDes    = $_POST['txtRoomDesc'];
    $roomStatus = $_POST['selRoomStatus'];
    $roomImg    = $_FILES["roomImg"]["name"];
    $temp       = $_FILES["roomImg"]["tmp_name"];
    $imgData    = move_uploaded_file($temp, "images/".$roomImg);
    
    if (!empty($imgData)) {
        $update = pg_query($conn, "UPDATE goldenstone_addroom SET roomType='$roomType', roomNo='$roomNo', price='$price', roomDes='$roomDes', roomStatus='$roomStatus', roomImg='$roomImg' WHERE room_id='$roomId'");  
    } else {
        $update = pg_query($conn, "UPDATE goldenstone_addroom SET roomType='$roomType', roomNo='$roomNo', price='$price', roomDes='$roomDes', roomStatus='$roomStatus' WHERE room_id='$roomId'");    
    }

    if ($update) {
        ?>
        <script>
            alert("Room updated successfully")
            window.location="manageRooms.php"
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Please check your database connectivity")
        </script>
        <?php
    }
}

/*.....................................delete query.............................*/

if (!empty($_GET["delId"])) {
    $delId  = $_GET["delId"];
    $arr    = explode("/", $delId);
    $del_id = base64_decode($arr[0]);  
    $q1     = pg_query($conn, "DELETE FROM goldenstone_addroom WHERE room_id = '$del_id'");
    if ($q1) {
        ?>
        <script type="text/javascript">window.location="manageRooms.php"</script>
        <?php
    }
}

/*...............................Manage Bookings.................................*/

$roomBooking = pg_query($conn, "SELECT * FROM goldenstone_addroom RIGHT JOIN goldenstone_roombooking ON goldenstone_roombooking.roomId=goldenstone_addroom.room_id LEFT JOIN goldenstone_userdetails ON goldenstone_roombooking.user_id=goldenstone_userdetails.userId");

/*............................Count no of user registration......................*/

$registration       = pg_query($conn, "SELECT COUNT(*) FROM goldenstone_userdetails");
$registration_count = pg_fetch_assoc($registration);

/*........................Count no of bookings....................................*/

$bookings       = pg_query($conn, "SELECT COUNT(*) FROM goldenstone_roombooking");
$booking_count  = pg_fetch_assoc($bookings);

/*..........................Total earnings.........................................*/

$earnings       = pg_query($conn, "SELECT SUM(price) FROM goldenstone_addroom RIGHT JOIN goldenstone_roombooking ON goldenstone_roombooking.roomId=goldenstone_addroom.room_id");
$earning_count  = pg_fetch_assoc($earnings);

?>
