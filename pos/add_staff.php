<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
        <div class="container-fluid">
        <div class=" row mx-3">
                     <div class="col-lg-10 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;">Staff Profile   <i class="fa fa-angle-right"></i>  Add Staff </h5>
                     </div>
                   
                     <div class="col-lg-2 col-sm-12 col-md-6 text-right">
 
                     <a href="list_staff.php" class="btn btn-primary"> <i class="fa fa-list"></i> Staff's List</a>
      </div>
        </div> 
        
        <hr> 


                    <div class="card mt-4 mb-2">
                    <!-- <div class="card-header">
                       <div class="row">
                          <div class="col-md-9 my-auto">
                          Staff Profile <i class="fa fa-angle-right"></i>    Add Staff      </div>
                          <div class="col-md-3 text-right">
                      
                             <a href="list_staff.php" class="btn btn-primary"> <i class="fa fa-list"></i> Staff's List</a>
                          </div>
                       </div>
                    </div> -->
                       <div class="mt-3 card-body">
                     <form name="frmUser" method="post" action="" enctype="multipart/form-data" >
                             <div class="form-row">
                                <div class="form-group col-md-3">
                                   <label for="inputEmail4">Name</label>
                                   <input type="text" class="form-control" required  name="name" >
                                </div>
                                
                                <div class="form-group col-md-3">
                                   <label for="inputEmail4">Designation</label>
                                   <input type="text" class="form-control" required  name="designation" >
                                </div>
                                
                                <div class="form-group col-md-2">
                                   <label for="inputEmail4">NID</label>
                                   <input type="number" class="form-control" name="nid" >
                                </div>
                                
                                <div class="form-group col-md-4">
                                   <label for="inputEmail4">Photo </label>
                                   <input type="file" class="form-control" name="photo" id="photo" accept="image/*" onchange="validateForSize(this,10,100);">
                                </div>
                                
                             </div>
                             <div class="form-row">
                                <div class="form-group col-md-3">
                                   <label for="inputAddress2">Father's Name</label>
                                   <input type="text" class="form-control"    name="father_name" >
                                </div>
                                <div class="form-group col-md-3">
                                   <label for="inputAddress2">Mother's Name</label>
                                   <input type="text" class="form-control" name="mother_name" >
                                </div>
                                 <div class="form-group col-md-2">
                                   <label for="inputCity">Mobile</label>
                                   <input type="number" class="form-control"  name="mobile">
                                </div>
                                <div class="form-group col-md-4">
                                   <label for="inputCity">Email</label>
                                   <input type="email" class="form-control"  id="email"  name="email">
                                </div>
                             
                                   <div class="form-group col-md-6">
                                   <label for="inputCity">Address</label>
                                   <input type="text" class="form-control" name="address">
                                </div>
                                
                                   <div class="form-group col-md-2">
                                   <label for="inputCity">Salary</label>
                                   <input type="text" class="form-control" name="salary">
                                </div>
                                
                                <div class="form-group col-md-4">
                                   <label for="inputCity">Joining Date</label>
                                   <input type="date" class="form-control" name="joining">
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