<?php
  include ('include/header_user.php');
  include ('include/sub_menu.php');
?>
            </nav>
        </div>
    </div>
    
<!-- bootstrap css -->
<link href="admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

<!-- rooms & rates -->
       <div class="plans-section" id="rooms">
		<div class="container">
		   <center><h3 style="margin-bottom: 5%;">MY BOOKINGS <span><a href="index.php" style=" margin-left: 5%"><i class="fa fa-arrow-left"></i> Go back to Home</a></span></h3></center>
		   <div class="priceing-table-main">
		       <?php
	           $i = 0;
	           while($bookingDetails = pg_fetch_assoc($q))
	           {
	           ?>
			    <div class="col-md-3 price-grid" style="margin-bottom: 5%;">
					<div class="price-block agile">
						<div class="price-gd-top">
							<img src="<?php echo 'admin/images/'.$bookingDetails['roomImg']?>" class="img-responsive">
							<h4><?php echo $bookingDetails['roomType']?></h4>
						</div>
						<div class="price-gd-bottom">
						   <div class="price-list">
								<h3><span>Rs</span> <?php echo $bookingDetails['price']?></h3>	
								<h6><span>Date of Check In:</span> <?php echo $bookingDetails['check_in']?></h6>	
								<h6><span>Date of Check Out:</span> <?php echo $bookingDetails['check_out']?></h6>	
						    </div>
						</div>
					</div>
			    </div>
			   <?php
               }
			   ?>			   
			</div>
		</div>
	  </div>
</body>
</html> 

<!-- Jquery JS-->
<script src="admin/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="admin/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
