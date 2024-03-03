<?php
  include ('include/header_user.php');
?>
<!--bootstrap css -->
    <link href="admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

            </nav>
        </div>
    </div>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3"></div>
    <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2">
        <div class="contact-agileits">
            <h4 align="center" style="margin-top: 5%">SIGNUP</h4>
            <form  method="post" class="was-validated">
                <div class="control-group form-group">                
                    <label>Full Name:</label>
                    <input type="text" class="form-control" name="name" id="name" required autocomplete="off">
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>  
                <div class="control-group form-group">                
                    <label>Phone Number:</label>
                    <input type="number" class="form-control" name="mob" id="phone" required autocomplete="off">
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="control-group form-group">                        
                    <label>Email Address:</label>
                    <input type="email" class="form-control" name="eid" id="email" required autocomplete="off">
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>                    
                <div class="control-group form-group">                        
                    <label>Password:</label>
                    <input type="password" class="form-control" name="pass" id="pass" required autocomplete="off">
                    <div class="invalid-feedback">Please fill out this field.</div>
                </div>                    
                <center><input type="submit" name="btnSignup" value="Register" class="btn btn-primary" style="margin-bottom: 2%;"></center>
                <p>Already have an Account..<a href="login.php">Login</a> <a href="index.php" style="float: right"><i class="fa fa-arrow-left" aria-hidden="true"></i> Go back to Home</a></p>   
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

