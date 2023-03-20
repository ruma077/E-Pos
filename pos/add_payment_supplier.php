<!DOCTYPE html>
<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
        <div class="container-fluid">
				   
 

        <div class="row">
                     <div class="col-lg-9 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;"> Supplier Payment <i class="fa fa-angle-right"></i>  Add Supplier Payment</h5>
                     </div>
                     <!-- <div class="col-lg-2 col-sm-6 col-md-3" >
                        <a class="btn btn-success" href="add_product.php" role="button"  style="width:150px;  margin-top: 5px; margin-left:0px; color: white; text-align: center; font-weight: normal;font-size: 16px;  font-family: serif; "><i class="fa fa-plus" style="color: white;"></i>&nbsp; Add Product</a>
                     </div> -->
                     <div class="col-lg-3 col-sm-12 col-md-6 ">
                     <a href="list_payment_supplier.php" class="btn btn-primary"><i class="fa fa-folder-open"></i>  All Supplier Payments</a>
                          </div>
               </div> 
               <hr> 

                   
               
                   
               <div class="card-body p-4">
                    
                         <form name="frmUser" method="post">
                   
                            <div class="form-group row">
                               <label for="inputPassword" class=" col-lg-2 col-sm-2 col-form-label"> Supplier  </label>
                               <div class=" col-lg-5 col-sm-12">
                                  <select ID="name" class="form-select" onchange="myFunction()"  name="supplier_id" required>
                           <option value=""> Select Supplier  </option>
                          
                              <option data-balance='10740' value='1'> Teer / 01580000000 </option><option data-balance='1735' value='2'> Fresh / 01780000000 </option><option data-balance='17120' value='3'> Pran / 01671000000 </option><option data-balance='0' value='4'> Square / 01790000000 </option><option data-balance='475' value='22'> Almarai  / 0534244500 </option>      </select>
                               </div>
                   
                               <label for="inputPassword" class="col-lg-2 col-sm-12 col-form-label text-danger" style=" text-align: center;">Balance </label>
                               <div class=" col-lg-3 col-sm-12">
                                  <input readonly id="balance" name="balance" class="form-control text-danger" />
                               </div>
                   
                            </div>
                   
                            <div class="form-group row">
                               <label for="inputPassword" class="col-sm-2 col-form-label"> Cash Payment  </label></label>
                               <div class="col-sm-2">
                                  <input type="number" name="paid" class="form-control" required />
                               </div>
                               <label for="inputPassword" class="col-sm-1 col-form-label"> Less  </label></label>
                               <div class="col-sm-2">
                                  <input type="number" name="less" class="form-control" />
                               </div>
                            </div>
                   
                            <div class="form-group row">
                               <label for="inputPassword" class="col-sm-2 col-form-label"> Date  </label></label>
                               <div class="col-sm-5">
                                  <input type="date" name="date_trns" value="2023-03-04" class="form-control" required />
                               </div>
                            </div>         
                   
                   
                   <div class="form-group row">
                               <label for="inputPassword" class="col-sm-2 col-form-label"> Account  </label></label>
                               <div class="col-sm-5">
                                   <select type="text" class="form-select"  name="account" requaid>
                                  <option>----</option>
                                           <option value="1">Cash</option>
                                           <option value="2">Islami Bank Ltd. Bangladesh</option>
                                           <option value="3">Nagad</option>
                                           <option value="4">Bkash</option>
                                           <option value="246">ebl</option>
                                       </select>
                               </div>
                            </div>
                   
                        
                               
                               
                            <div class="form-group row">
                               <label for="inputPassword" class="col-sm-2 col-form-label"> Remark  </label></label>
                               <div class="col-sm-5">
                                  <input type="text" name="remark" class="form-control" />
                               </div>
                            </div>
                   
                      </div>
                   
                      <div class="card-footer p-4">
                      <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-save" style="font-size:15px"></i> Save</button>
<button type="reset"  class="btn btn-secondary"> <i class="fa fa-refresh" style="font-size:15px"></i>  Reset</button>
                         </form>
                      </div>
                   </div>
                   </div>
                   </div>
            
        </div>
        <?php include("script.php") ?>
        <script>
   function myFunction() {
 
      var balance = $('#name').find(':selected').data('balance');
      $('#balance').val(balance);
   }
</script>
	  
	
    </body>
</html>