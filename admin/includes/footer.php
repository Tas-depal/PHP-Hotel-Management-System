                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

</div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Datatable    -->
    <script src="vendor/datatables/datatables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- vendor  -->
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

    <!--Confirm Delete -->
    <script>
  function delUser()
  {
    var del = confirm("Are you sure you want to delete this record?");
    if(del)
    {
      return true;
    }
    else
    {
      return false;
    }
  }
</script>

<!--  Datatables   -->

<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable(        
      {     
      "aLengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
        "iDisplayLength": 5
       } 
      );
});

  $(document).ready(function() {

  function toggleSidebar() {
    $(".button").toggleClass("active");
    $("main").toggleClass("move-to-left");
    $(".sidebar-item").toggleClass("active");
  }

  $(".button").on("click tap", function() {
    toggleSidebar();
  });

  $(document).keyup(function(e) {
    if (e.keyCode === 27) {
      toggleSidebar();
    }
  });

});
</script>    
</body>
</html>
<!-- end document-->
