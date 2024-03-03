<?php
  include ('include/header_user.php');  
?>

<!-- bootstrap css -->
<link href="admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

            </nav>
        </div>
    </div>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3"></div>
    <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2">
        <div class="contact-agileits">
            <h4 align="center" style="margin-top: 5%">LOGIN</h4>
            <form method="post" class="was-validated">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input class="form-control" type="email" name="email" placeholder="Email" id="email" required autocomplete="off">
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Password" required>
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <center><input type="submit" name="btnLogin" value="Login" class="btn btn-primary" style="margin-bottom: 2%;"></center>
                <p>Don't have an Account..<a href="signup.php">Signup</a> <a href="index.php" style="float: right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Go back to Home</a></p>
            </form> 
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3"></div>
</div>
</body>
</html>

<!-- Jquery JS-->
<script src="admin/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="admin/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
