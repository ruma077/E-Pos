<!DOCTYPE html>
<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
            <section class="content-header">
            <div class="container-fluid">
				    

            <div class="row">
                     <div class="col-lg-10 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;"> Sales  <i class="fa fa-angle-right"></i> Sales History</h5>
                     </div>
                     <!-- <div class="col-lg-2 col-sm-6 col-md-3" >
                        <a class="btn btn-success" href="add_product.php" role="button"  style="width:150px;  margin-top: 5px; margin-left:0px; color: white; text-align: center; font-weight: normal;font-size: 16px;  font-family: serif; "><i class="fa fa-plus" style="color: white;"></i>&nbsp; Add Product</a>
                     </div> -->
                     <div class="col-md-2 text-right">
                             <a href="add_sales.php" class="btn btn-outline-primary"> <i class="fa fa-plus-square"></i> Add Sales </a>
                          </div>
               </div> 
               <hr>  
                    <div class="card mb-4">
                     
                         
                                <div class="mt-3 pt-1 card-body">
                                    <div class="table-responsive">
                     
                        <table class="table table-hover table-striped webgrid-table-hidden" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                   <tr>
                                      <!-- <th> Invoice # </th> -->
                                      <!-- <th> Invoice  </th> -->
                                      <th> Invoice </th>
                                      <th> Date </th>
                                      <!-- <th nowrap> Type</th> -->
                                      <th nowrap> User Name</th>
                                      <th nowrap> Customer Name</th>
                                      <th> Mobile</th>
                                      <th> Address</th>
                                      <th> Courier</th>
                                      <th> payable</th>
                                      <th> paid</th>
                                      <th> Due</th>
                                      <th> COD</th>
                                      <th> </th>
                                      <th> Status</th>
                                      <th > </th>
                                      <th > </th>

                                   </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td style="font-size:15px;">  10083</td>
                                      <td style="font-size:15px;">27.02.2023</td>
                                     
                                      <td  style="font-size:15px;">Baki</td>
                                      <td  style="font-size:15px;">Abdullahil Baki</td>
                                      <td style="font-size:15px;" >880123456789</td>
                                      <td style="font-size:15px;"> Banani, Dhaka</td>
                                      <td style="font-size:15px;">Sonargaon</td>
                                     <td style="font-size:15px;"> 2000 </td>
                                     <td style="font-size:15px;"> 2000 </td>
                                     <td style="font-size:15px;"> 00 </td>
                                     <td style="font-size:15px;"> 100 </td>
                                     <td style="font-size:15px;"> <button type="button" class="btn btn-outline-success" style="font-size:10px; font-weight: bold; font-style: italic;">COD</button> </td>
                                     <td style="font-size:15px;"> <a class="btn btn-success" href="#" role="button" style="font-size:10px;">Delivered</a> </td>
                                     <td><a class="dropdown-item" href="view_chalan.php?uniqueid=1677501820"style="color: black;font-weight: normal;" > <i class="fa fa-print text-success" >  </i> Print </a></td>
                                        <td nowrap align="right">
                                          <div class="dropdown">
                                          <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Options					  </button>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="view_sale_invoice_pos.php?uniqueid=1677501820" style="color: black; font-weight: normal;"> <i class="fa fa-file text-primary" >  </i> Invoice  </a>
                                            <a class="dropdown-item" href="view_chalan.php?uniqueid=1677501820"style="color: black;font-weight: normal;" > <i class="fa fa-file text-primary" >  </i> Chalan </a>
                                            
                                            <a class="dropdown-item d-none " href="add_payment_in_invoice.php?uniqueid=1677501820&fullname=&mobile=&due=-200" > <i class="fa fa-check-circle text-primary">  </i> Payment  </a>
                                         <a class="dropdown-item " href="edit_sales_pos.php?uniqueid=1677501820" style="color: black;font-weight: normal;" > <i class="fa fa-edit text-success">  </i> Edit Invoice   </a> 
                                         <a  data-appd="1677501820" class="delete dropdown-item " href="#" style="color: black;font-weight: normal;"><i class="fa fa-trash text-danger"> </i> Delete  </a>
                                          </div>
                                        </div>
                                         
                                      </td>
                                   </tr>
                               
                                  </tbody>
                                <tfoot>
                             </table>
                                </div>
                            </div>
                        </div> 
                     
                    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
            </section>
            
        </div>
        <?php include("script.php") ?>
	  
    <script>
	
	
          $(document).on('click','.delete',function(){
          var element = $(this);
          var del_id = element.attr("data-appd");
          var info = 'delorder=' + del_id;
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
        
        
        
          /// Datatable Filter

          $(document).ready( function() {
            if ( $.fn.DataTable.isDataTable( '#dataTable' ) ) {
            $( '#dataTable' ).DataTable().destroy();
            }
            $( '#dataTable' ).dataTable( {
            "bSort": false,
            "bDestroy": true
            } );
          } );
        
        
          /// Datatable Faster
        
          var GridView = $('#dataTable').DataTable({});
          $('#dataTable').show();
          GridView.columns.adjust().draw();
	
	
	
    </script>
    </body>
</html>