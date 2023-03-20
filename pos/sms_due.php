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
                        <h5 style="color: #3f5eb5;  text-align: left;"> SMS   <i class="fa fa-angle-right"></i>  Due SMS Notification</h5>
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
                       <!-- <div class="card-header ">SMS <i class="fa fa-angle-right"></i>    Due SMS Notification</div> -->
                   <div class="card-body">
                          <form name="frmUser" method="post" action="sending_dues_sms.php" style="font-size:20px;">
                   
                         
                   *** Will be charge as per regular cost <br>
                   *** Keep Sms lenth in 160 character  
                   <hr>
                   
                   <!-- <label for="terms_and_conditions"> I Agree To Send all of dues customer </label>
                   <input type="checkbox" id="terms_and_conditions" value="1" onclick="terms_changed(this)" />  -->
                   <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" onclick="terms_changed(this)">
  <label class="form-check-label" for="flexCheckDefault">
  I Agree To Send all of dues customer
  </label>
                      </div>
                      <div class="form-check" >
  <!-- <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" onclick="terms_changed(this)">
  <label class="form-check-label" for="flexCheckDefault">
  I Agree To Send all of dues customer
  </label> -->
</div>
                   
                   <div class="card-footer">
                   <button type="submit" id="submit_button" disabled  class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send SMS </button>
                   
                           </div>
                         
                          
                       </form>
                   </div>
            
        </div>
        <?php include("script.php") ?>
        <script>

//JavaScript function that enables or disables a submit button depending
//on whether a checkbox has been ticked or not.
function terms_changed(termsCheckBox){
    //If the checkbox has been checked
    if(termsCheckBox.checked){
        //Set the disabled property to FALSE and enable the button.
        document.getElementById("submit_button").disabled = false;
    } else{
        //Otherwise, disable the submit button.
        document.getElementById("submit_button").disabled = true;
    }
}
</script>
	
    </body>
</html>