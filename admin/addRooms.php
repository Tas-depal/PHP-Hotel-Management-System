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
                            <strong>Add</strong> Rooms
                        </div>
                        <div class="card-body card-block">
                            <form action="room.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="roomType" class=" form-control-label">Room Type</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="selRoomType" id="roomType" class="form-control">
                                            <option>Select Room Type</option>
                                            <option value="Luxury">Luxury</option>
                                            <option value="Delux">Delux</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="roomNo" class=" form-control-label">Room Number</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="roomNo" name="txtRoomNo" placeholder="Room Number" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="price" class=" form-control-label">Price</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="price" name="txtPrice" placeholder="Price" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="roomDesc" class=" form-control-label">Room Description</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="txtRoomDesc" id="roomDesc" rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="roomImg" class=" form-control-label">Room Image</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="roomImg" name="roomImg" class="form-control-file">
                                    </div>
                                </div>                            
                                <div class="card-footer">
                                    <center><input type="submit" class="btn btn-primary btn-sm" name="btnAddRoom"></center>
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
    