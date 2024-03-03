 <?php
  include ('include_all_file.php');
?>

 <div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                      <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Booking Id</th>
                                    <th>Username</th>
                                    <th>User Mob No</th>
                                    <th>User Email</th>
                                    <th>Room Type</th>
                                    <th>Room No</th>
                                    <th>Check In</th>                                              
                                    <th>Check Out</th>                                              
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                               $i = 0;
                               while($data = mysqli_fetch_assoc($roomBooking))
                               {
                                ?>
                                  <tr>
                                    <td><?php echo ++$i?></td>
                                    <td><?php echo $data['name']?></td>
                                    <td><?php echo $data['mobNo']?></td>
                                    <td><?php echo $data['eid']?></td>
                                    <td><?php echo $data['roomType']?></td>
                                    <td><?php echo $data['roomNo']?></td>
                                    <td><?php echo $data['check_in']?></td>
                                    <td><?php echo $data['check_out']?></td>
                                  </tr>
                                <?php
                               }
                               ?>
                            </tbody>
                        </table>
                    </div>
                <!-- END DATA TABLE-->
            </div>
        </div>
    </div>
 </div>
<?php
    include_once 'includes/footer.php';
?>
