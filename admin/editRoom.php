<?php
  include ('include_all_file.php');
?> 
    <div class="main-content">
      <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            <strong>Manage</strong> Room
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="roomType" class=" form-control-label">Room Type</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                    <input type="hidden" name="txtRoomId" value="<?php echo $edit['room_id']?>">
                                        <select name="selRoomType" id="roomType" class="form-control">
                                            <option>Select Room Type</option>
                                            <option value="Luxury"<?php echo ($edit['roomType']=='Luxury') ? 'selected' :''?>>Luxury</option>
                                            <option value="Delux"<?php echo ($edit['roomType']=='Delux') ? 'selected' :''?>>Delux</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="roomNo" class=" form-control-label">Room Number</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="roomNo" name="txtRoomNo" placeholder="Room Number" class="form-control" value="<?php echo $edit['roomNo']?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="price" class=" form-control-label">Price</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="price" name="txtPrice" placeholder="Price" class="form-control" value="<?php echo $edit['price']?>">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="roomDesc" class=" form-control-label">Room Description</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="txtRoomDesc" id="roomDesc" rows="4" class="form-control" value=""><?php echo $edit['roomDes']?></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="roomStatus" class=" form-control-label">Room Status</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="selRoomStatus" id="roomStatus" class="form-control">
                                            <option>Select Room Status</option>
                                            <option value="Available"<?php echo ($edit['roomStatus']=='Available') ? 'selected' :''?>>Available</option>
                                            <option value="Unavailable"<?php echo ($edit['roomStatus']=='Unavailable') ? 'selected' :''?>>Unavailable</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="roomImg" class=" form-control-label">Room Image</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="roomImg" name="roomImg" class="form-control-file"><br><br>
                                        <img src="<?php echo 'images/'.$edit['roomImg']?>">
                                    </div>
                                </div>                            
                                <div class="card-footer">
                                    <center><input type="submit" class="btn btn-primary btn-sm" name="btnUpdate" value="Update"></center>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
      </div>
    </div>

<?php
    include_once 'includes/footer.php';
?>
    