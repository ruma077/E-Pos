<!DOCTYPE html>
<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
            <section class="content-header">
            <div class="container-fluid">
				   <form class="calculate" name="frmProduct" name="frmProduct" method="post" oncChange="add_calcualte ()"  id="form-id">
	<!-- <div class="mt-4 page-title mb-2"> 
	<div class="row"> 
            <div class="col-md-9 my-auto">
               Purchase <i class="fa fa-angle-right"></i> Purchase Invoice</div> 
		
		<div class="col-md-3 text-right">
               <a href="list_buy.php" class="btn btn-primary"> <i class="fa fa-folder-open"></i>  Invoice List</a>
            </div>
            </div>
		
		</div>  -->

      <div class="row">
                     <div class="col-lg-10 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;"> Purchase  <i class="fa fa-angle-right"></i> Purchase Invoice</h5>
                     </div>
                     <div class="col-lg-2 col-sm-6 col-md-3" >
                        <!-- <a class="btn btn-success" href="add_product_bulk.php" role="button"  style="auto;  margin-top: 5px; margin-left:0px; color: white; text-align: center; font-weight: normal;font-size: 16px;  font-family: serif; "><i class="fa fa-folder" style="color: white;"></i>&nbsp; Multiple Entry</a> -->
                        <a class="btn btn-light" href="list_buy.php" role="button"  style="auto;  margin-top: 5px; margin-left:0px; text-align: center; color: black; font-weight: normal; font-size: 16px; font-family: serif;"><i class="fa fa-folder" style="color: black;"></i>&nbsp; Invoice List</a>
                     </div>
                     <!-- <div class="col-lg-2 col-sm-6 col-md-3" >
                        <a class="btn btn-primary" href="list_product.php" role="button"  style="auto;  margin-top: 5px; margin-left:0px; text-align: center; color: white; font-weight: normal; font-size: 16px; font-family: serif;"><i class="fa fa-folder" style="color: white;"></i>&nbsp; Product List</a>
                     </div> -->
                  </div> <hr>  


   <div class="card pb-0 pb-0">  
   
      <div class="card-body pb-0  ">
         <div class="row">
            <div class="form-group col-md-2">
               <input type="date" name='d_ate' required class="form-control form-control-sm" value="2023-02-28" required>
            </div>
            <div class="form-group col-md-2">
               <input type="number" name='invoice' required id="invoice" class="form-control form-control-sm" placeholder="Invoice# 00-0000">
               <span id="availability"></span>
            </div>
            <div class="form-group col-md-5">
               <select class="form-select" name="supplier" required style="height:50px;">
                                    <option> Supplier </option>
                                    <option>Teer</option>
                                    <option>Fresh</option>
                                    <option>Pran</option>
                                    <option>Square</option>
                                    <option>Almarai </option>
                                 </select>
            </div>    
			
			<div class="form-group col-md-3">
            
                  <select type="text" class="form-select"  name="account" required style="height:50px;">
              
                     <option value="1">Cash</option>
                     <option value="2">Islami Bank Ltd. Bangladesh</option>
                     <option value="3">Nagad</option>   
                     <option value="4">Bkash</option>
                     <option value="246">ebl</option>
			        </select>
            </div>
            </div>
         </div>
     
         <div class="mt-2 bsection" style="padding: 10px;">
      <div class="product-read">
         <div class="outer">
            <div class="row">
               <div class="col-md-7">
                  <div class="ui-widget">
                     <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input type="text" autofocus="" class="searchcode add form-control ui-autocomplete-input" style="background: lavenderblush;" name="searchcode" id="searchcode" placeholder="Search the Product" autocomplete="off">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- <div class="mt-2 bsection" style="padding: 10px;">
      <div class="product-read">
         <div class="outer">
            <div class="row" style="background: #bbdefb; height:70px;">
               <div class="col-lg-8 col-md-12 col-sm-12">
                  <div class="ui-widget" >
                     <input type="text" autofocus class="searchcode add form-control" style="background: lavenderblush; margin-top:10px;" name="searchcode" id = "searchcode" placeholder="Search the Product" >
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> -->
 
   <!-- <divdd class="card mt-2 mb-2" style="min-height: 150px;">
      <div class="p-2 card-body">
         <table  cellpadding="0" cellspacing="0" class="RFtable" >
            <thead>
               <tr >
                <th ><button type="button" class="delete-row text-dark" style="padding: 0;font-size: 25px;margin: 0; background: none; border: none;" > <i class="fa fa-trash"></i> </button></th>
                  <th colspan="2" style="font-size: 20px; "> Barcode</th>
                  <th  style="font-size: 20px;"> Product Name</th>
                  <th  style="font-size: 20px;"> Qty.</th>
                  <th  style="font-size: 20px;"> Buy Rate</th>
                  <th  style="font-size: 20px;"> Retail Price</th>
                  <th  style="font-size: 20px;"> Wholesale Price</th>
                  <th style="font-size: 20px;"> S. Total</th>
               </tr>
            </thead>
            <tbody>
            </tbody>
         </table>
      </div>
   </divdd> -->

   <!-- <div class="p-2 card-body" style="min-height: 150px; ">
         <table width="100%" cellpadding="0" cellspacing="0" class="RFtable table-responsive">
            <thead>
               <tr >
                  <th width="3%"><button type="button" class="delete-row text-dark" style="padding: 5px;font-size: 15px;margin: 0;  background: none; border: none; color: #0d47a1;"> <i class="fa fa-trash"></i> </button></th>
                  <th width="12%" style=" font-weight: bold; font-size: 13px; color:#0d47a1; text-transform: uppercase;"> Barcode</th>
                  <th width="25%" style=" font-weight: bold; font-size: 13px; color:#0d47a1; text-transform: uppercase;"> Product Name</th>
                  <th width="11%" style=" font-weight: bold; font-size: 13px; color:#0d47a1; text-transform: uppercase;"> Batch</th>
                  <th width="11%" style=" font-weight: bold; font-size: 13px; color:#0d47a1; text-transform: uppercase;"> Expiry Date</th>
                  <th width="8%" style=" font-weight: bold; font-size: 13px; color:#0d47a1; text-transform: uppercase;"> Qty.</th>
                  <th width="10%" style=" font-weight: bold; font-size: 13px; color:#0d47a1; text-transform: uppercase;"> Buy Rate</th>
                  <th width="10%" nowrap="" style=" font-weight: bold; font-size: 13px; color:#0d47a1; text-transform: uppercase;"> Retail Price</th>
                  <th width="10%" style=" font-weight: bold; font-size: 13px; color:#0d47a1; text-transform: uppercase;"> S. Total</th>
               </tr>
            </thead>
            <tbody>
            </tbody>
         </table>
   </div> -->  
   <br>
   <div class="table-responsive">
    <table class=" RFtable table table-bordered" style="background-color: #bbdefb; padding:10px;">
      <thead>
        <tr>
         <th><button type="button" class="delete-row text-dark" style="padding: 0px;font-size: 13px;margin: 0;  background: none; border: none; color: #0d47a1;"> <i class="fa fa-trash"></i> </button></th>
         <th  style=" font-weight: bold; font-size: 13px; color:#0d47a1; text-transform: uppercase;"> Barcode</th>
         <th  style=" font-weight: bold; font-size: 13px; color:#0d47a1; text-transform: uppercase;"> Product Name</th>
         <th  style=" font-weight: bold; font-size: 13px; color:#0d47a1; text-transform: uppercase;"> Expire Date</th>
         <th  style=" font-weight: bold; font-size: 13px; color:#0d47a1; text-transform: uppercase;"> Qty.</th>
         <th  style=" font-weight: bold; font-size: 13px; color:#0d47a1; text-transform: uppercase;"> Buy Rate</th>
         <th  style=" font-weight: bold; font-size: 13px; color:#0d47a1; text-transform: uppercase;"> Retail Price</th> 
         <th  style=" font-weight: bold; font-size: 13px; color:#0d47a1; text-transform: uppercase;"> Wholesale Price</th>
         <!-- <th  nowrap="" style=" font-weight: bold; font-size: 13px; color:#0d47a1; text-transform: uppercase;"> Retail Price</th> -->
         <!-- <th  style=" font-weight: bold; font-size: 13px; color:#0d47a1; text-transform: uppercase;"> Pv. Due</th> -->
         <th  style=" font-weight: bold; font-size: 13px; color:#0d47a1; text-transform: uppercase;">gTotal</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><button type="button" class="delete-row text-dark" style="padding: 0px;font-size: 13px;margin: 0;  background: none; border: none; color: #0d47a1;"> <i class="fa fa-trash"></i> </button></td>
          <td>1678003826528</td>
          <td>Chashi Aromatic Chinigura Rice</td>
          <td>3-5-2023</td>
          <td>5 Boxes</td>
          <td>5000</td>
          <td>6500</td>
          <td>6000</td>
         
          <td>3500</td>
          
          </tr>
      </tbody>
    </table>
  </div>
</div>

   <!-- <div class="card">
      <div class="card-body p-2">
         <div class="row">
            <div class="col-md-2">
               <div class="input-group mb-0 mr-sm-0">
                  <div class="input-group-prepend">
                     <div class="input-group-text"  >S. Total</div>
                  </div>
                  <input class="form-control  text-center font-weight-bold sub_total" readonly  type="text" id="sub_total" name="sub_total">
               </div>
            </div>
            <div class="col-md-2">
               <div class="input-group mb-0 mr-sm-0">
                  <div class="input-group-prepend">
                     <div class="input-group-text"  >Commission</div>
                  </div>
                  <input class="form-control  text-center font-weight-bold commission"   type="text" id="commission" name="commission">
               </div>
            </div>
            <div class="col-md-2">
               <div class="input-group mb-0 mr-sm-0">
                  <div class="input-group-prepend">
                     <div class="input-group-text" >Shipping</div>
                  </div>
                  <input class="form-control  text-center font-weight-bold shipping"   type="text" id="shipping" name="shipping">
               </div>
            </div>
            <div class="col-md-2">
               <div class="input-group mb-0 mr-sm-0">
                  <div class="input-group-prepend">
                     <div class="input-group-text" >Payable</div>
                  </div>
                  <input class="form-control  text-center font-weight-bold total" readonly  type="text" id="total" name="total">
               </div>
            </div>
            <div class="col-md-2">
               <div class="input-group mb-0 mr-sm-0">
                  <div class="input-group-prepend">
                     <div class="input-group-text" >Paid</div>
                  </div>
                  <input class="form-control  text-center font-weight-bold paid"    type="text" id="paid" name="paid">
               </div>
            </div>
            <div class="col-md-2">
               <div class="input-group mb-0 mr-sm-0">
                  <div class="input-group-prepend">
                     <div class="input-group-text" >Due</div>
                  </div>
                  <input class="form-control text-danger text-center font-weight-bold due" readonly  type="text" id="due" name="due">
               </div>
            </div>
         </div>
      </div>
      </div>
      <div class="card-footer">
         <div class="col-md-12 text-right">
            <input type="submit" class="btn btn-outline-success" name="save" id="save" value="Save" />
            <button type="reset" class="btn btn-outline-secondary">Reset</button>
         </div>
      </div>
   </div> -->
   <div class="card-body p-2">
         <div class="row">
            <div class="col-md-2">
               <div class="input-group mb-0 mr-sm-0">
                  <div class="input-group-prepend">
                     <div class="input-group-text">S. Total</div>
                  </div>
                  <input class="form-control  text-center font-weight-bold sub_total" readonly="" type="text" id="sub_total" name="sub_total">
               </div>
            </div>
            <div class="col-md-2">
               <div class="input-group mb-0 mr-sm-0">
                  <div class="input-group-prepend">
                     <div class="input-group-text">Commission</div>
                  </div>
                  <input class="form-control  text-center font-weight-bold commission" type="text" id="commission" name="commission">
               </div>
            </div>
            <div class="col-md-2">
               <div class="input-group mb-0 mr-sm-0">
                  <div class="input-group-prepend">
                     <div class="input-group-text">Shipping</div>
                  </div>
                  <input class="form-control  text-center font-weight-bold shipping" type="text" id="shipping" name="shipping">
               </div>
            </div>
            <div class="col-md-2">
               <div class="input-group mb-0 mr-sm-0">
                  <div class="input-group-prepend">
                     <div class="input-group-text">Payable</div>
                  </div>
                  <input class="form-control  text-center font-weight-bold total" readonly="" type="text" id="total" name="total">
               </div>
            </div>
            <div class="col-md-2">
               <div class="input-group mb-0 mr-sm-0">
                  <div class="input-group-prepend">
                     <div class="input-group-text">Paid</div>
                  </div>
                  <input class="form-control  text-center font-weight-bold paid" type="text" id="paid" name="paid">
               </div>
            </div>
            <div class="col-md-2">
               <div class="input-group mb-0 mr-sm-0">
                  <div class="input-group-prepend">
                     <div class="input-group-text">Prvs. Due</div>
                  </div>
                  <input class="form-control text-danger text-center font-weight-bold due" readonly="" type="text" id="due" name="due">
               </div>
            </div>
         </div>
      </div>
      <hr>
      <div class="card-footer">
         <div class="col-md-12 text-right">
            <input type="submit" class="btn btn-outline-success" name="save" id="save" value="Save">
            <button type="reset" class="btn btn-outline-secondary">Reset</button>
         </div>
      </div>
 
   <!--- Hidden Object-->
   <input type="hidden" class="form-control" name="created" value="2023-02-28 15:48:37">
   <input type="hidden" class="form-control" name="uniqueid" value="1677577717">
   <!--- Hidden Object-->		   
</form>
            </section>
            
        </div>
        <?php include("script.php") ?>
	  
	
    </body>
</html>