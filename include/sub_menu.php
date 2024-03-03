<?php
    session_start();
    if(!empty($_SESSION['username']))
    {
        $uname     =  $_SESSION['username'];
        $uid       =  $_SESSION['userId'];
?>
    <div class="dropdown user">
      <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <a class="js-acc-btn" style="" href="#"><?php echo "Welcome " . $uname;?></a>
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <div class="account-dropdown__item">
            <a href="editProfile.php?user_id=<?php echo $enId = base64_encode($uid);echo $encryt_id = $enId."/".rand(0,99999);?>">
               <i class="fa fa-edit"></i> Edit Profile
            </a>
        </div>
        <div class="account-dropdown__item">
            <a href="viewBookings.php?user_id=<?php echo $enId = base64_encode($uid);echo $encryt_id = $enId."/".rand(0,99999);?>">
               <i class="fa fa-eye"></i> View Room Bookings
            </a>
        </div>
        <div class="account-dropdown__item">
            <a href="./logout.php">
               <i class="fa fa-sign-out"></i> Logout
            </a>
        </div>
      </div>
    </div>
    <?php
    }
    else
    {
    ?>
	<div class="banner-top">
		<div class="contact-bnr-w3-agile">
			<ul>
				<li><i class="fa fa-user-plus" aria-hidden="true"></i><a href="./signup.php">SIGNUP</a></li>
				<li><i class="fa fa-sign-in" aria-hidden="true"></i><a href="./login.php">LOGIN</a></li>	
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
    <?php
    }
	?>