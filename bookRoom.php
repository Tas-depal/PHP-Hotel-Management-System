<?php 
  include ('include/header_user.php');
  include ('include/sub_menu.php');
?>

<!-- bootstrap css -->
<link href="admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
            </nav>
        </div>
    </div>

    <div class="row" style="margin-top: 5%">
		    <div class="col-md-3 col-sm-3"></div>
        <div class="col-md-6 col-sm-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    RESERVATION INFORMATION
                </div>
                <div class="panel-body">
                    <form method="post" class="was-validated">
                      <div class="form-group">
                        <label>Check-In</label>
                        <input type="hidden" class="form-control" name="userId" value="<?php echo $uid?>">
                        <input type="hidden" class="form-control" name="room_id" value="<?php echo $roomData['room_id']?>">
                        <input name="chkIn" type ="datetime-local" class="form-control" required>
                        <div class="invalid-feedback">Please fill out this field.</div>                  
                      </div>
                      <div class="form-group">
                        <label>Check-Out</label>
                        <input name="chkOut" type ="datetime-local" class="form-control" required>
                        <div class="invalid-feedback">Please fill out this field.</div>             
                      </div>
                      <center><input type="submit" name="btnBookRoom" value="Book Room" class="btn btn-primary" style="margin-bottom: 2%;"></center>
                      <p> <a href="index.php" style="float: right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Go back to Home</a></p>
                    </form>
               </div>                
            </div>
        </div>        
    </div>
</body>
</html>

<!-- Jquery JS-->
<script src="admin/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>