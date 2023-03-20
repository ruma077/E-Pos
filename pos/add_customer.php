<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
        <div class="container-fluid">

        <div class=" row ">
                     <div class="col-lg-10 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;">Customer <i class="fa fa-angle-right"></i> Customer Entry</h5>
                     </div>
                   
                     <div class="col-lg-2 col-sm-12 col-md-6 ">
                     <a href="list_customer.php" class="btn btn-primary "> <i class="fa fa-folder-open"></i> Customers List </a> 
                     </div>
        </div> 
        
        <hr> 



                   <div class="card mt-4">
                       
                       <!-- <divtt class="card-header">
                     <divo class="row">
                       <div class="col-lg-6 col-6 my-auto"> Customer <i class="fa fa-angle-right"></i> Customer Entry </div>
                       <div class="col-lg-6 col-6 text-right"> <a href="list_customer.php" class="btn btn-primary "> <i class="fa fa-folder-open"></i> Customers List </a> </div>
                     </divo>
                   </divtt> -->
                   
                     <form name="frmUser" method="post" action="" enctype="multipart/form-data">
                    
                           <div class="mt-3 card-body">
                             <div class="form-row">
                                
                               <div class="form-group col-md-3">
                                 <label for="inputEmail4">Customer ID</label>
                                 <input type="text" class="form-control" id="customer_id" required autofocus name="customer_id" value="5">
                                       <span id="availability"></span> 
                                </div>
                         
                               <div class="form-group col-md-3">
                                 <label for="inputEmail4">Fullname</label>
                                 <input type="text" class="form-control"  name="fullname" required>
                               </div>
                   
                               <div class="form-group col-md-3">
                                 <label for="inputCity">NID</label>
                                 <input type="text" class="form-control" name="nid" placeholder="Optional">
                               </div>
                               <div class="form-group col-md-3">
                                 <label for="inputCity">Mobile</label>
                                 <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Optional">
                               
                               </div>
                               <div class="form-group col-md-3">
                                 <label for="inputCity">Email</label>
                                 <input type="email" class="form-control" name="email" placeholder="Optional">
                               </div>
                               <div class="form-group col-md-3">
                                 <label for="inputCity">Opening Balance</label>
                                 <input type="number" class="form-control"  name="opening" placeholder="Optional">
                               </div>
                              
                               <div class="form-group col-md-6">
                                 <label for="inputEmail4">Photo</label>
                                 <input type="file" class="form-control" name="photo" accept="image/*" onchange="validateForSize(this,10,100);">
                               </div>
                               
                               <div class="form-group col-md-6">
                                 <label for="inputEmail4">Address</label>
                                 <textarea type="text" class="form-control" name="address" placeholder="Optional" rows="3" cols="50"></textarea>
                               </div>
                                <div class="form-group col-md-6">
                                 <label for="inputCity"> Remark</label>
                    
                                   <textarea type="text" class="form-control" name="remark" placeholder="Optional" rows="3" cols="50"></textarea>
                               </div>
                               
                               
                             </div>
                           </div>
                       
                       <div class="card-footer">
                       <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-save" style="font-size:15px"></i> Save</button>
                       <button type="reset"  class="btn btn-secondary"> <i class="fa fa-refresh" style="font-size:15px"></i>  Reset</button>
                         </form>
                     </form>
                   </div>
                   </div>
                   
            
        </div>
        <?php include("script.php") ?>
	  
	
    </body>
    <script>
 
 
 $(document).ready(function(){  
   $('#customer_id').blur(function(){
     var customer_id = $(this).val();
     $.ajax({
      url:'ajax_check.php',
      method:"POST",
      data:{customer_id:customer_id},
      success:function(data)
      {
       if(data != '0')
       {
        $('#availability').html('<span class="text-danger"> Already Exsist</span>');
        $('#register').attr("disabled", true);
       }
       else
       {
        $('#availability').html('<span class="text-success"></span>');
        $('#register').attr("disabled", false);
       }
      }
     })
  });
 }); 
</script>
</html>