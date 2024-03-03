<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Datatable -->
    <link rel="stylesheet" type="text/css" href="vendor/datatables/dataTables.min.css">
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body>
<!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">                                
                                <div class="content">
                                   <a class="js-acc-btn" style="color: black;background-color: transparent;" href="#"><?php echo "Welcome " . $username;?></a>
                                </div>
                            </div>
                            <nav class="navbar navbar-expand-md bg-dark navbar-dark mobile-header"  style="display: none">
                              <!-- Brand -->
                              <!-- Toggler/collapsibe Button -->
                              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                <span class="navbar-toggler-icon"></span>
                              </button>

                              <!-- Navbar links -->
                              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                <ul class="navbar-nav">
                                  <li class="nav-item">
                                    <a class="nav-link" href="admin-dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="addRooms.php"><i class="fas fa-plus"></i> Add Room</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="manageRooms.php"><i class="fas fa-edit"></i> Manage Room</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="viewBooking.php"><i class="fas fa-eye"></i> View Booking</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                                  </li>
                                </ul>
                              </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
