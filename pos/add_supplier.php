<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
        <div class="container-fluid">
        <div class=" row mx-3">
                     <div class="col-lg-10 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;">Supplier <i class="fa fa-angle-right"></i>  Supplier Entry </h5>
                     </div>
                   
                     <div class="col-lg-2 col-sm-12 col-md-6 text-right">
 
         <a href="list_supplier.php" class="btn btn-outline-primary text-black" > <i class="fa fa-folder-open"></i> Supplier List</a>
      </div>
        </div> 
        
        <hr> 
				   
                   <div class="card mt-4">
                       <!-- <div class="card-header">
                      <div class="row">
                      <div class="col-lg-10 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;">Customer <i class="fa fa-angle-right"></i> Customer Entry</h5>
                     </div>
                     <div class="col-lg-2 col-sm-12 col-md-6 ">
                     <a href="list_customer.php" class="btn btn-primary "> <i class="fa fa-folder-open"></i> Customers List </a> 
                     </div>
                      </div>
                   </div> -->
                   
                      <div class="mt-3 card-body">
                    <form name="frmUser" method="post" action="" enctype="multipart/form-data" >
                            <div class="form-row">
                             
                               <div class="form-group col-md-3">
                                  <label for="inputEmail4">Supplier</label>
                                  <input type="text" class="form-control" required  name="supplier" autofocus>
                               </div>
                               <div class="form-group col-md-3">
                                  <label for="inputEmail4">Contact Person</label>
                                  <input type="text" class="form-control" required  name="fullname" >
                               </div>
                           
                               <div class="form-group col-md-6">
                                  <label for="inputAddress2">Address</label>
                                  <input type="text" class="form-control" name="address" >
                               </div>
                            
                               <div class="form-group col-md-3">
                                  <label for="inputCity">Mobile</label>
                                  <input type="number" class="form-control"  name="mobile" >
                               </div>            
                               
                               <div class="form-group col-md-3">
                                  <label for="inputCity">Opening Balance</label>
                                  <input type="number" class="form-control"  name="opening" >
                               </div>
                              
                            </div>
                            </div>
                       <div class="card-footer">
                            <input type="submit" name="submit" value="Save" class="btn btn-success">
                            <button type="reset" class="btn btn-secondary">Reset</button>
                         </form>
                      </div>
                   </div>
            
        </div>
        <?php include("script.php") ?>
	  
	
    </body>
</html>