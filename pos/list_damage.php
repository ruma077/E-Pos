<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
        <div class="container-fluid">
				    
                    <div class="mt-4 mb-2 page-title">
                       <div class="row">
                          <div class="col-md-9 my-auto">
                          Product <i class="fa fa-angle-right"></i> Damage History	  </div>
                          <div class="col-md-3">
                             <a href="add_damage.php" class="btn btn-primary float-right">  <i class="fa fa-plus-square "></i>  Add Damage Parts</a>
                          </div>
                       </div>
                    </div>
                     
                        <div class="card">
                             <div class="card-body" >
                               <table class="table table-hover " id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                   <tr>
                                    <th> Barcode </th>
                                    <th> Product Name  </th>
                                    <th> Damaged Qty. </th>
                                    <th> Date </th>
                                    <th> Reason </th>
                                    <th width="10%"> </th>
                                   </tr>
                                </thead>
                                <tbody>
                                                 <tr>
                                      <td>1665670813748 </td>
                                      <td> Teer Fortified Soyabean Oil  </td>
                                      <td> 375  </td>
                                      <td> 14.02.2023 </td>
                                      <td> damage  </td>
                                      <td nowrap align="right">
                                        <a class="btn btn-success btn-sm" href="edit_damage.php?id=1"> <i class="fa fa-edit">  </i></a>
                                        <a class="delete btn btn-danger btn-sm " data-appd="1"  href="#"><i class="fa fa-trash"> </i> </a>
                                    </td>
                                   </tr>
                                                  <tr>
                                      <td>1665670813748 </td>
                                      <td> Teer Fortified Soyabean Oil  </td>
                                      <td> 6  </td>
                                      <td> 14.02.2023 </td>
                                      <td> damage  </td>
                                      <td nowrap align="right">
                                        <a class="btn btn-success btn-sm" href="edit_damage.php?id=2"> <i class="fa fa-edit">  </i></a>
                                        <a class="delete btn btn-danger btn-sm " data-appd="2"  href="#"><i class="fa fa-trash"> </i> </a>
                                    </td>
                                   </tr>
                                               </tbody>
                                <tfoot>
                             </table>
                    
                      </div>
                    </div>
                     
                    
                    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
                    <script>
                       $(document).on('click','.delete',function(){
                       var element = $(this);
                       var del_id = element.attr("data-appd");
                       var info = 'deldamage=' + del_id;
                       if(confirm("Are you sure you want to delete this?"))
                       {
                        $.ajax({
                          type: "POST",
                          url: "ajax_delete.php",
                          data: info,
                          success: function(){
                        }
                       });
                         $(this).parents("tr").animate({ backgroundColor: "#003" }, "slow")
                         .animate({ opacity: "hide" }, "slow");
                        }
                       return false;
                       });
                    </script>
            
        </div>
        <?php include("script.php") ?>
        <script>
	var GridView = $('#dataTable').DataTable({});
	$('#dataTable').show();
	GridView.columns.adjust().draw();
</script>
	
    </body>
</html>