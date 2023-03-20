<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
        <div class="container-fluid">
				   	  
                         <style>
                         
                         .img:hover {
                     transform: scale(5.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
                     z-index:1000;
                     transition: transform .5s ease;
                      
                   }
                   
                   </style> 
                   

                         
                   <div class="m-4 mb-2 page-title">
                   <div class="row">
                     <div class="col-lg-9 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;">Customer <i class="fa fa-angle-right"></i> Customer Entry</h5>
                     </div>
                   
                     <div class="col-lg-3 col-sm-12 col-md-6 ">
                     <a href="preview_customer_report.php" class="btn btn-primary"><i class="fa fa-print"></i>  Print  </a>
                     <a href="add_customer.php" class="btn btn-primary"><i class="fa fa-users"></i>  Customer  </a>
                     </div>
        </div> 
        
        <hr> 
                      <!-- <divll class="row">
                           <div class="col-md-6 my-auto">
                            Customer  <i class="fa fa-angle-right"></i>  Customers List 
                         </div>
                      
                    
                          <div class="col-md-6 text-right">
                    
                         
                            <a href="preview_customer_report.php" class="btn btn-primary"><i class="fa fa-print"></i>  Print  </a>
                            <a href="add_customer.php" class="btn btn-primary"><i class="fa fa-users"></i>  Customer  </a>
                         </div>
                      </divll> -->
                   </div>
                   
                   <div class="card mb-2">
                      <div class="card-body ">
                         <div class="table-responsive">
                           
                            <table class="table table-hover table-striped  " id="dataTable" width="100%" cellspacing="0">
                               <thead>
                                  <tr>
                                     <th>Photo</th>
                                     <th>Customer ID</th>
                                     <th>Fullname</th>
                                     <th>Address</th>
                                     <th>Mobile</th>            
                                     <th>Remark</th>            
                                     <th>Balance</th>            
                                     <th width="12%"></th>
                                  </tr>
                               </thead>
                               <tbody>
                                                 <tr>
                                    <td width="0%" class="bn-font"><img src="assets/images/cat.jpg" class="img" height="54" onError="this.onerror=null;this.src='../assets/img/profile.png';" style="border-radius: 50%;" ></td>
                                     <td> 1 </td>
                                     <td> Md Abdullah Al Mamun </td>
                                     <td> Basurhat, Companygonj, Noakhali</td>
                                     <td> 01777615690 </td>                  
                                     <td>  </td>                  
                                     <td  > 3700 </td>                  
                                     <td  align="right">
                                     <a data-appd="1" class="delete btn btn-primary btn-sm " href="#"><i class="fa fa-id-card-o"></i>  </a>

                                        <a href="edit_customer.php?id=1" class="btn btn-success btn-sm"> <i class="fa fa-edit">  </i>   </a>
                                        <a data-appd="1" class="delete btn btn-danger btn-sm " href="#"><i class="fa fa-trash"> </i>  </a>
                                       
                                        
                                     </td>
                                  </tr>
                                                 <tr>
                                    <td width="0%" class="bn-font"><img src="assets/images/cow-funny-ruminant-cute.jpg" class="img" height="54" onError="this.onerror=null;this.src='../assets/img/profile.png';" style="border-radius: 50%;" ></td>
                                     <td> 2 </td>
                                     <td> Md. Shafiul Ahsan </td>
                                     <td> Nagar Bhavan, Dhaka
                   Dhaka
                   Dhaka</td>
                                     <td> 01780000000 </td>                  
                                     <td>  </td>                  
                                     <td  > 522 </td>                  
                                     <td  align="right">
                                       <a data-appd="1" class="delete btn btn-primary btn-sm " href="#"><i class="fa fa-id-card-o"></i>  </a>
                                       <a href="edit_customer.php?id=2" class="btn btn-success btn-sm"> <i class="fa fa-edit">  </i>   </a>
                                        <a data-appd="2" class="delete btn btn-danger btn-sm " href="#"><i class="fa fa-trash"> </i>  </a>

                                       </td>
                                  </tr>
                                                 <tr>
                                    <td width="0%" class="bn-font"><img src="assets/images/5097068.jpg" class="img" height="54" onError="this.onerror=null;this.src='../assets/img/profile.png';" style="border-radius: 50%;" ></td>
                                     <td> 3 </td>
                                     <td> Tapan Chakma </td>
                                     <td> Rangamti Hill District</td>
                                     <td> 01710000000 </td>                  
                                     <td>  </td>                  
                                     <td  > 511 </td>                  
                                     <td  align="right">
                                     <a data-appd="1" class="delete btn btn-primary btn-sm " href="#"><i class="fa fa-id-card-o"></i>  </a>

                                        <a href="edit_customer.php?id=3" class="btn btn-success btn-sm"> <i class="fa fa-edit">  </i>   </a>
                                        <a data-appd="3" class="delete btn btn-danger btn-sm " href="#"><i class="fa fa-trash"> </i>  </a>

                                       </td>
                                  </tr>
                                                 <tr>
                                    <td width="0%" class="bn-font"><img src="../uploads/photo2023-02-25-12-19-23_63f9a86b36f86.png" class="img" height="54" onError="this.onerror=null;this.src='../assets/img/profile.png';" style="border-radius: 50%;" ></td>
                                     <td> 4 </td>
                                     <td> Md. Shaharul Islam </td>
                                     <td> </td>
                                     <td> 01773130190 </td>                  
                                     <td>  </td>                  
                                     <td  > 22 </td>                  
                                     <td  align="right">
                                     <a data-appd="1" class="delete btn btn-primary btn-sm " href="#"><i class="fa fa-id-card-o"></i>  </a>

                                        <a href="edit_customer.php?id=23" class="btn btn-success btn-sm"> <i class="fa fa-edit">  </i>   </a>
                                        <a data-appd="23" class="delete btn btn-danger btn-sm " href="#"><i class="fa fa-trash"> </i>  </a>

                                       </td>
                                  </tr>
                                              </tbody>
                               <tfoot>
                            </table>
                         </div>
                      </div>
                   </div>
                   
                   <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
                   <script>
                       $(document).on('click','.delete',function(){
                       var element = $(this);
                       var del_id = element.attr("data-appd");
                       var info = 'delcustomer=' + del_id;
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
	  
	
    </body>
</html>