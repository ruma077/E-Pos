<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
        <div class="container-fluid">
				   
 

                   <div class="container">
                   <div class="row">
                     <div class="col-lg-8 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;"> Courier 
  <i class="fa fa-angle-right"></i>  VD Receipt</h5>
                     </div>
                     <!-- <div class="col-lg-4 col-sm-6 col-md-3" >
                        <a class="btn btn-success" href="list_transaction.php" role="button"  style="auto;  margin-top: 5px; margin-left:0px; color: white; text-align: center; font-weight: normal;font-size: 16px;  font-family: serif; "><i class="fa fa-folder" style="color: white;"></i>&nbsp; All Transaction</a>
                        <a class="btn btn-primary" href="add_category.php" role="button"  style="auto;  margin-top: 5px; margin-left:0px; text-align: center; color: white; font-weight: normal; font-size: 16px; font-family: serif;"><i class="fa fa-list" style="color: white;"></i>&nbsp; Add Category</a>
                     </div> -->
                  </div> <hr>
                   <div class="card mt-4">

                      <div class="card-body pt-4 ">
                    
                         <form name="frmUser" method="post" action="" enctype="multipart/form-data" >
                      <div class="form-row">
                               <div class="form-group col-lg-4 col-sm-12">
                                  <label for="inputEmail4">Date</label>
                                  <input type="date" class="form-control"   name="date_trans" value="2023-03-04"  required>
                               </div>
                               <div class="form-group col-lg-4 col-sm-12">
                                  <label for="inputEmail4">Courier Name</label>
                   
                           <select type="text" class="js-select2 form-control"  name="category" requaid>
                                  <option>----------</option>
                                           <option value="1">Sundarban Courier Service (Pvt.) Ltd.</option>
                                           <option value="2"> SA Paribahan</option>
                                           <option value="3">Janani Express Parcel Service</option>
                                           <option value="4">USB Express</option>
                                           <option value="5"> DHL Bangladesh</option>
                                           <option value="6"> FedEX Bangladesh</option>
                                           <option value="7">  United Express Bangladesh</option>
                                           <option value="8">Karatoa Courier Service (KCS)</option>
                                           <option value="9">United Parcel Service (UPS)</option>
                                           <option value="10">  Fox Parcel</option>
                                       </select>
                               </div>
                               
                               <div class="form-group col-lg-4 col-sm-12">
                                  <label for="inputEmail4" style="color:#ff0000;">Condition Amount*</label>
                                  <input type="text" class="form-control" name="condition_amount" placeholder="৳টাকা" required>
                                </div>
                               
                                           <!-- <div class="form-group col-lg-4 col-sm-12">
                                  <label for="inputEmail4"> Account </label>
                   
                           <select type="text" class="js-select2 form-control"  name="head" requaid>
                                  <option>----</option>
                                           <option value="1">Cash</option>
                                           <option value="2">Islami Bank Ltd. Bangladesh</option>
                                           <option value="3">Nagad</option>
                                           <option value="4">Bkash</option>
                                           <option value="246">ebl</option>
                                       </select>
                               </div> -->
                               <div class="form-group col-lg-4 col-sm-12">
                                  <label for="inputEmail4"  style="color:#ff0000;">CN Number*</label>
                                  <input type="text" class="form-control" name="invoice_id" placeholder="CN-1678700639589" required>
                                </div>
                               
                               
                               
                               
                               <!-- <div class="form-group col-lg-4 col-sm-12">
                                  <label for="inputEmail4">Due </label>
                                  <input type="text" class="form-control" name="due" placeholder="৳টাকা" requaid>
                               </div> -->
                               

                               
                               
                               <div class="form-group col-lg-4 col-sm-12">
                                  <label for="inputEmail4" style="color:#800080;">Transaction Type</label>
                                   <select id="transtype" class="form-control" requaid>
                                     <option value=""> --- </option>
                                     <option value="1">Cash Received</option>
                                     <option value="2">Cash Payment</option>
                                   </select>
                               </div>
                              
                                     <div id="1" class="form-group col-lg-4 col-sm-12 report" style="display:none">
                                  <label for="inputEmail4"  style="color:#008000;">Received Amount</label>
                                  <input type="number" class="form-control" name="receive" required >
                               </div>
                          
                        
                                    <div id="2"  class="form-group col-lg-4 col-sm-12 report" style="display:none">
                                  <label for="inputEmail4" style="color:#008000;">Paid Amount</label>
                                  <input type="number" class="form-control" name="pay" required>
                               </div>
                            
                            </div>
                         </div>
                         <div class="card-footer">
                         <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-save" style="font-size:15px"></i> Save</button>
<button type="reset"  class="btn btn-secondary"> <i class="fa fa-refresh" style="font-size:15px"></i>  Reset</button>
                              </form> 
                      </div>
                   </div>
                   </div>
            
        </div>
        <?php include("script.php") ?>
        <script>
$(document).ready(function(){
    $('#purpose').on('change', function() {
      if ( this.value == '4')
      {
        $("#business").show();
      }
      else
      {
        $("#business").hide();
      }
    });
});



    $(function() {
        $('#transtype').change(function(){
            $('.report').hide();
            $('#' + $(this).val()).show();
        });
    });
</script>
	  
	
    </body>
</html>