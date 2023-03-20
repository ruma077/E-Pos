<!Doctype html>
<html>
<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
        <div class="container-fluid">
        <div class="row">
                     <div class="col-lg-8 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;"> SMS   <i class="fa fa-angle-right"></i> Send Bulk SMS to All Customer</h5>
                     </div>
                     <!-- <div class="col-lg-4 col-sm-6 col-md-3" >
                        <a class="btn btn-success" href="add_product_bulk.php" role="button"  style="auto;  margin-top: 5px; margin-left:0px; color: white; text-align: center; font-weight: normal;font-size: 16px;  font-family: serif; "><i class="fa fa-folder" style="color: white;"></i>&nbsp; Multiple Entry</a>
                        <a class="btn btn-primary" href="list_product.php" role="button"  style="auto;  margin-top: 5px; margin-left:0px; text-align: center; color: white; font-weight: normal; font-size: 16px; font-family: serif;"><i class="fa fa-folder" style="color: white;"></i>&nbsp; Product List</a>
                     </div> -->
                     <!-- <div class="col-lg-2 col-sm-6 col-md-3" >
                        <a class="btn btn-primary" href="list_product.php" role="button"  style="auto;  margin-top: 5px; margin-left:0px; text-align: center; color: white; font-weight: normal; font-size: 16px; font-family: serif;"><i class="fa fa-folder" style="color: white;"></i>&nbsp; Product List</a>
                     </div> -->
                  </div> <hr> 
				   
                   <div class="card mt-4">
                   <!-- <div class="card-header ">   
                       SMS <i class="fa fa-angle-right"></i>    Send Bulk SMS to All Customer</div> -->
                   
                       <div class="card-body">
                   <form  method="get" action="sms_bulk_sending.php" >
                           <div class="row" >
                           <div class="col-md-7" style="font-size: 20px;">
                           <label>SMS Text </label>	
                           <textarea name="message" rows="3" id="field" onkeyup="countChar(this)" required class="form-control" maxlength="160"></textarea> 
                           <div id="charNum"> </div>
                           </div>
                           </div>
                       </div>
                   
                       <div class="card-footer">
                           <button type="submit" name="submit" class="btn btn-success" style="font-size: 20px;"><i class="fa fa-paper-plane "> </i>  Send SMS</button>
                       </div>
                   </form>
                   
                   
                   </div>
            
        </div>
        <?php include("script.php") ?>
	  
	
    </body>
</html>