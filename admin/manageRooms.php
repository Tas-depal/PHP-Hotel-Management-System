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
                                    <th>Room Id</th>
                                    <th>Room Type</th>
                                    <th>Room No</th>
                                    <th>Price</th>
                                    <th>Room Description</th>
                                    <th>Room Status</th>
                                    <th>Action</th>                                                
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                               $i = 0;
                               while($data = pg_fetch_assoc($select))
                               {
                                ?>
                                  <tr>
                                    <td><?php echo ++$i?></td>
                                    <td><?php echo $data['roomType']?></td>
                                    <td><?php echo $data['roomNo']?></td>
                                    <td><?php echo $data['price']?></td>
                                    <td><?php echo $data['roomDes']?></td>
                                    <td><?php echo $data['roomStatus']?></td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="editRoom.php?editId=<?php $enId = base64_encode($data['room_id']);echo $encryt_id = $enId."/".rand(0,99999);?>"class="item" data-toggle="tooltip"data-placement="top" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="manageRooms.php?delId=<?php $enId =base64_encode($data['room_id']);echo $encryt_id = $enId."/".rand(0,99999); ?>" class="item del" data-toggle="tooltip" data-placement="top" title="Delete" onclick="return delUser()">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </td>
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
