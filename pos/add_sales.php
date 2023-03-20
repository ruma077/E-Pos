<!DOCTYPE html>
<html lang="en">
<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
        <!-- <div class="container-fluid"> -->
				   <style>
	
	.das {display:none;}
	
	
	.form-group {
      margin-bottom: 0.7rem;  
}

 

.RFtable tr:nth-child(odd) {
    border: none;
    border: none;
    background: rgb(255 255 255 / 10%);
}
.page-title {
    border-right: 5px solid #ffffff;
    border-left: 5px solid #ffffff;
     
}


.input-group-text {
 
    font-size: 0.8rem;
   
}


</style>

<link href 	= "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<div class="container-fluid">
<div class="row">
                     <div class="col-lg-9 col-sm-12 col-md-6 ">
                        <h5 style="color: #3f5eb5;  text-align: left;">Sales <i class="fa fa-angle-right"></i> Wholesale</h5>
                     </div>
                     <div class="col-lg-3 col-sm-6 col-md-3" >
                        <!-- <a class="btn btn-success" href="add_product_bulk.php" role="button"  style="auto;  margin-top: 5px; margin-left:0px; color: white; text-align: center; font-weight: normal;font-size: 16px;  font-family: serif; "><i class="fa fa-folder" style="color: white;"></i>&nbsp; Multiple Entry</a> -->
                        <a class="btn btn-light" href="" role="button"  style="auto;  margin-top: 5px; text-align: center; margin-right: 40px; color: black; font-weight: normal; font-size: 16px; font-family: serif;"><i class="fa fa-file" style="color: black;"></i>&nbsp; Recent Sales</a>
                     </div>
                     <!-- <div class="col-lg-2 col-sm-6 col-md-3" >
                        <a class="btn btn-primary" href="list_product.php" role="button"  style="auto;  margin-top: 5px; margin-left:0px; text-align: center; color: white; font-weight: normal; font-size: 16px; font-family: serif;"><i class="fa fa-folder" style="color: white;"></i>&nbsp; Product List</a>
                     </div> -->
                  </div> <hr>  
<div class="row">
<div class="col-md-9">
<div class="mt-4 page-title mb-2">
  <!-- <div class="row" style="background-color: white;">
    <div class="col-md-9 my-auto"> Sales <i class="fa fa-angle-right"></i> Wholesale </div>
    <div class="col-md-3 text-right"> 				   
      <button type="button" class="btn btn-light " data-toggle="modal" data-target="#exampleModalCenter" style="margin-right: -11px;"> <i class="fa fa-file"></i> Recent Sales</button>   
     </div>
  </div> -->
  
</div>
<form class="calculate" method="post" action="" id="form-id" >
  <div class="card mb-1">
        <div class="card-header">
        <div class="row">
          <div class="col-md-4">
 
            <input type="date" class="form-control" name="d_ate"   required >
            <input type="hidden" class="form-control" name="created" value="2023-03-06 13:38:34"  required > 
			      <input type="hidden" class="form-control" name="uniqueid" value="1678088314">
            
          </div>
      
          <div class="col-md-4">
            <select class="form-select"  name="customer_id" id="getcustomerform" required>
              <option value="00"> Select Customer </option>
              <option value="0"> Walking Customer </option>
              <option data-fullname='Md Abdullah Al Mamun' data-mobile='01777615690' data-address='Basurhat, Companygonj, Noakhali' data-balance='3806' value='1'> 1-Md Abdullah Al Mamun </option>
              <option data-fullname='Md. Shafiul Ahsan' data-mobile='01780000000' data-address='Nagar Bhavan, Dhaka Dhaka Dhaka' data-balance='522' value='2'> 2-Md. Shafiul Ahsan </option>
              <option data-fullname='Tapan Chakma' data-mobile='01710000000' data-address='Rangamti Hill District' data-balance='511' value='3'> 3-Tapan Chakma </option>
              <option data-fullname='Md. Shaharul Islam' data-mobile='01773130190' data-address='' data-balance='22' value='23'> 4-Md. Shaharul Islam </option>
            </select>
          </div>
          <div class="col-md-4">
            <select class="form-select"  name="customer_id" id="getcustomerform" required>
              <option value="00"> Select Courier </option>
              <option value="0"> Sundarban Courier </option>
              <option value="0"> S.A Paribahan </option>
              <option value="0"> Sonargaon Courier </option>
              
            </select>
          </div>


        </div>
      </div>
	      <div id="0" class="report card mb-1" style="display: none; background:lightblue ">
        <div class="card-body p-2">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
              <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile Number" />
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Customer Nmae" />
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <input type="text" name="address" id="address" class="form-control" placeholder="Address" />
            </div>
          </div>
        </div>
      </div>
    <div class="card-body p-2 bsection " style="background: #bbdefb;">
         <div class="row">
        <div class="col-lg-9 col-md-8 col-sm-6">
          <input type="text" autofocus class="searchcode add form-control" style="background: #ebf1f8;"  id = "searchcode"  placeholder="Search the Product" >
		</div>
		
		  <!-- <div class="col-md-2">
            <label class="sr-only" for="payable">Group Qty.</label>
            <div class="input-group mb-0 mr-sm-0">
              <div class="input-group-prepend">
                <div class="input-group-text">Group Qty.</div>
              </div>
             	<input type='text' class="form-control" value="0" id='qty_carton' placeholder="Carton" data-toggle="tooltip" data-placement="top" title=" কার্টন/ বক্স/ড্রাম/ডজন"/>
            </div>
          </div> -->
 	
		
		
		    <!-- <div class="col-md-2">
            <label class="sr-only" for="payable">Qty.</label>
            <div class="input-group mb-0 mr-sm-0">
              <div class="input-group-prepend">
                <div class="input-group-text">Qty.</div>
              </div>
              <input type='text' class="form-control" value="0" id='qty_piece' placeholder="Piece" data-toggle="tooltip" data-placement="top" title="পিস/কেজি/লিটার "/>
            </div>
          </div>
		  
		  
		     <div class="col-md-2">
            <label class="sr-only" for="payable">Price</label>
            <div class="input-group mb-0 mr-sm-0">
              <div class="input-group-prepend">
                <div class="input-group-text">Price</div>
              </div>
             	<input type='text' class="form-control"  id='sales'  />
            </div>
          </div> -->
	 	
		<div class="col-lg-3 col-md-4 col-sm-6" >
			<input type="button" class="btn btn-warning btn-block add-row" value="Add" style="height:45px; font-size: 20px; " /> 
      
		</div>
		
		
      </div>
    </div>
  </div>
  <div class="card mb-1 " style=" background: #bbdefb;">
    <div class="p-0 card-body" >
	     <div class="table-responsive">
      <!-- <table width="100%" cellpadding="0" cellspacing="0"   class="RFtable" style="height:35px;">
        <thead>
          <tr>
			  <th width="3%"><a type="button" class="delete-row"> <i class="fa fa-trash"></i></a></th>
            <th width="8%" align="center">Type</th>
            <th width="15%" align="center">Barcode</th>
            <th width="25%" align="left">Description</th>
            <th width="11%">Batch</th>
            <th width="8%" nowrap>Group Qty.</th>
            <th width="5%" align="right">Qty.</th>
            <th width="7%" align="right">Price</th>
            <th width="7%" align="center">Discount</th>
            <th width="9%" align="right">Total</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table> -->
      <table class=" RFtable table table-bordered" style="background-color:#008631; padding:10px;">
      <thead>
        <tr style="">
         <th><button type="button" class="delete-row text-dark" style="padding: 0px;font-size: 13px;margin: 0;  background: none; border: none; color: white;"> <i class="fa fa-trash" style="color:white;"></i> </button></th>
         <th  style=" font-weight: bold; font-size: 13px; color:white; text-transform: uppercase;"> Product Name</th>
         <th  style=" font-weight: bold; font-size: 13px; color:white; text-transform: uppercase;"> Quantity</th>
         <th  style=" font-weight: bold; font-size: 13px; color:white; text-transform: uppercase;">Selling Price</th>
         <th  style=" font-weight: bold; font-size: 13px; color:white; text-transform: uppercase;">Total</th>


        </tr>
      </thead>
      <tbody>
        <tr>
          <td><button type="button" class="delete-row text-dark" style="padding: 0px;font-size: 13px;margin: 0;  background: none; border: none; color: #0d47a1;"> <i class="fa fa-trash" style="color:white;"></i> </button></td>
          <td style=" font-weight: bold; font-size: 13px; color:white; text-transform: cappitalize;">Chashi Aromatic Chinigura Rice</td>
          <td style=" font-weight: bold; font-size: 13px; color:white; text-transform: cappitalize;">5 Boxes</td>
          <td style=" font-weight: bold; font-size: 13px; color:white; text-transform: cappitalize;">850</td>
          
          <td style=" font-weight: bold; font-size: 13px; color:white; text-transform: cappitalize;">850</td>

          
          </tr>
      </tbody>
    </table>
    </div>
    </div>
  </div>
       <div class="card mt-1 ">
            <div class="pb-0 pt-3 card-body">
               <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                     <label class="sr-only " for="total">dop</label>
                     <div class="input-group mb-0 mr-sm-0 ">
                        <div class="input-group-prepend ">
                           <div class="input-group-text">Date of payment</div>
                        </div>
                        <input class="form-control"   type="date"  name="dop">
                     </div>
                  </div>
				  
				    
			
			     <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                 
                     <div class="input-group mb-0 mr-sm-0 ">
                        <div class="input-group-prepend ">
                           <!-- <div class="input-group-text">Cash</div> -->
                        </div>
                        <select    class="form-control"  name="salesman"    >
                  <option value="">Cash</option>
			  <option data-balance='30000'  value='1'> Hannan Farid  </option><option data-balance='-200'  value='2'> ANISUR RAHMAN  </option>               </select>
                     </div>
                  </div>

                  <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                     <label class="sr-only " for="total">Tn</label>
                     <div class="input-group mb-0 mr-sm-0 ">
                        <div class="input-group-prepend ">
                           <!-- <div class="input-group-text">Transaction No.</div> -->
                        </div>
                        <input class="form-control" placeholder=" Transaction No."  type="text"  name="tn">
                     </div>
                  </div>
                  
                  <div class="col-lg-8 col-md-6 col-sm-12 form-group">
                     <label class="sr-only " for="total">Remarks</label>
                     <div class="input-group mb-0 mr-sm-0 ">
                        <div class="input-group-prepend ">
                           <!-- <div class="input-group-text">Transaction No.</div> -->
                        </div>
                        <input class="form-control" placeholder="Remarks"  type="text"  name="tn">
                     </div>
                  </div>
                  
                  <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                     <label class="sr-only " for="total">Reference</label>
                     <div class="input-group mb-0 mr-sm-0 ">
                        <div class="input-group-prepend ">
                           <!-- <div class="input-group-text">Transaction No.</div> -->
                        </div>
                        <input class="form-control" placeholder="Reference"  type="text"  name="tn">
                     </div>
                  </div>
				  
				  
			
             
				  
				
			   
			   
				  
               </div>
            </div>
         </div>
  </div>
  <!-- Start Calculation--->
  <div class="col-md-3">
    <div class="card mt-4 calculate">

  
      <div class="card-body mb-1">
        <div class="row ">
          <div class="col-md-12 form-group">
            <label class="sr-only " for="total">Total</label>
            <div class="input-group mb-0 mr-sm-0 ">
				      <div class="input-group-prepend ">
                <div class="input-group-text" style="width: 100px;">Total</div>
              </div>
              <input class="form-control text-success text-right font-weight-bold h6 total" readonly type="text" id="total" name="total">
            </div>
          </div>          
		  
            <div class="col-md-12 form-group">
               <label class="sr-only" for="discount">Discount %</label>
               <div class="input-group mb-0 mr-sm-0">
                  <div class="input-group-prepend">
                     <div class="input-group-text" style="width: 100px;">Discount %</div>
                  </div>
                  <input class="form-control text-success text-right font-weight-bold discount" autocomplete="off"   type="text" id="discount" name="discount" >
                <input class="form-control text-success text-right font-weight-bold less" style=" margin-left: 5px; border-radius: 6px; "  placeholder="Less" autocomplete="off"   type="text" id="less" name="less" >
  
			   </div>
            </div>     
		  
		  <div class="col-md-12 form-group">
            <label class="sr-only" for="shipping">Shipping</label>
            <div class="input-group mb-0 mr-sm-0">
              <div class="input-group-prepend">
                <div class="input-group-text" style="width: 100px;">Shipping</div>
              </div>
              <input class="form-control text-success text-right font-weight-bold shipping" autocomplete="off"  type="text" id="shipping" name="shipping">
            </div>
          </div>
		  
		 <!-- <div class="col-md-12 form-group ">
            <label class="sr-only" for="shipping">Labour</label>
            <div class="input-group mb-0 mr-sm-0">
              <div class="input-group-prepend">
                <div class="input-group-text" style="width: 100px;">Labour</div>
              </div>
              <input class="form-control text-success text-right font-weight-bold laber" autocomplete="off"  type="text" id="laber" name="laber">
            </div>
          </div> -->
          <div class="col-md-12 form-group">
            <label class="sr-only" for="payable">Payable</label>
            <div class="input-group mb-0 mr-sm-0">
              <div class="input-group-prepend">
                <div class="input-group-text" style="width: 100px;">Payable</div>
              </div>
              <input class="form-control text-success text-right font-weight-bold payable"  readonly  type="text" id="payable" name="payable">
            </div>
          </div>
          <div class="col-md-12 form-group">
            <label class="sr-only" for="paid">Cash Paid</label>
            <div class="input-group mb-0 mr-sm-0">
              <div class="input-group-prepend">
                <div class="input-group-text pay" style="width: 100px;">Cash Paid</div>
                
              </div>
              <input class="form-control text-success text-right font-weight-bold paid"  autocomplete="off"  type="text" id="paid" name="paid">
            </div>
          </div>
          <div class="col-md-12 form-group">
            <label class="sr-only" for="due">Due</label>
            <div class="input-group mb-0 mr-sm-0">
              <div class="input-group-prepend">
                <div class="input-group-text" style="width: 100px;">Due</div>
              </div>
              <input class="form-control text-danger text-right font-weight-bold due" readonly  type="text" id="due" name="due">
            </div>
          </div>
		       <div class="col-md-12 form-group">
               <label class="sr-only" for="due">prvs due</label>
               <div class="input-group mb-0 mr-sm-0">
                  <div class="input-group-prepend">
                     <div class="input-group-text" style="width: 100px;">Previous Due</div>
                  </div>
                  <input class="form-control text-danger text-right font-weight-bold balance" readonly  type="text" id="balance" name="arrear">
               </div>
            </div> 
          <div class="col-md-12 ">
            <label class="sr-only" for="due">Mode</label>
            <div class="input-group mb-0 mr-sm-0">
              <div class="input-group-prepend">
                <div class="input-group-text" style="width: 100px;">Mode</div>
              </div>
              <select type="text" class="form-control"  name="account" requaid>
                                <option value="1">Cash</option>
                                <option value="2">Islami Bank Ltd. Bangladesh</option>
                                <option value="3">Nagad</option>
                                <option value="4">Bkash</option>
                                <option value="246">ebl</option>
                              </select>
            </div>
          </div>
		  
    
        </div>
      </div>
      <divv class="card-footer">
        <input type="submit" class="btn btn-success add btn-block lidl save" name="draft"  id="draft"   value="Draft" />
        <input type="submit" class="btn btn-primary add btn-block lidl save" name="save"  id="save"   value="Save" />
        <input type="submit" style="display:none;" class="btn btn-danger add btn-block lidl Draft" name="save" id="draft"   value="Draft" />
		<!--- Hidden Value --->
		<div class="d-none">
			<input type='text' id='product_id' />
			<input type='text' id='barcode' />
			<input type='text' id='product_name'/>
			<input type='text' id='carton'/>
			<input type='text' id='d_iscount'/>
			<input type='text' id='buy'/>
			<input class="form-control text-danger font-weight-bold purchase" type="" id="purchase" name="purchase">
			<input class="form-control text-danger font-weight-bold profit" id="profit" name="profit">
		</div>
        <!--- Hidden Value --->
      </divv>
    </div>
  </div>
  </div>
</form>





<!--- Recent Invoice --->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Sales History</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
	  
	 <ul class="nav nav-tabs" id="myTab" role="tablist">
   <li class="nav-item" role="presentation">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pending Invoice</a>
   </li>
   <li class="nav-item" role="presentation">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Completed</a>
   </li>
</ul>
<div class="tab-content" id="myTabContent">
   <div class="tab-pane fade show active p-4" id="home" role="tabpanel" aria-labelledby="home-tab">
         </div>
   <div class="tab-pane fade p-4" id="profile" role="tabpanel" aria-labelledby="profile-tab">
         </div>
   <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>
             
 
 
	</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            
        <!-- </div> -->
        <?php include("script.php") ?>
	  
        <script>
	
	
  // Validation 
 
    $( "#save" ).click(function() {
    
    
      if ($('#total').val() ==0 && $('#return').val() ==0) {
        alert("Please add some product");
        $("#fullname").focus();
     
      }			
      
      if ($('#payable').val() <0 ) {
        $("#payable").val(0);
        $("#due").val(0);
       
      }
       
     

      if ($('#due').val() > 0 && $('#fullname').val() == "") {
        alert("Please enter customer name & mobile number");
        $("#fullname").focus();
        return false;
      }
      
      
    });
    
    
    

  $(function(){
    $('#status').change(function(){
       var opt = $(this).val();
      if(opt == '1'){
        $('.draft').show();
        $('.save').hide();
      }
      else{
        $('.save').show();
        $('.draft').hide();
         
      }
    });
  });
  
 if ( window.history.replaceState ) {
   window.history.replaceState( null, null, window.location.href );
 }
 
if ($(window).width() > 800){
 
   jQuery('#sidebarToggle').click();
 }

$( "#menuclick" ).click(function() {
jQuery('#sidebarToggle').click();
});


// SHOW CUSTOMER FORM

$(function() {
    $('#getcustomerform').change(function(){
          $('.report').hide();
          $('#' + $(this).val()).show();
    
    // GET CUSTOMER INFORMATION 
        var fullname = $('#getcustomerform').find(':selected').data('fullname');
        $('#fullname').val(fullname);
        var mobile = $('#getcustomerform').find(':selected').data('mobile');
        $('#mobile').val(mobile);
        var address = $('#getcustomerform').find(':selected').data('address');
        $('#address').val(address);
        var balance = $('#getcustomerform').find(':selected').data('balance');
        $('#balance').val(balance);
      });
    
  });


$( "#searchcode" ).autocomplete({
  source: function( request, response ) {
              
              $.ajax({
                  url: "ajax_get_sale.php",
                  type: 'post',
                  dataType: "json",
                  data: {
                      search: request.term
                  },
                  success: function( data ) {
                      response( data );
                  }
              });
          },
          select: function (event, ui) {
              $('#searchcode').val(ui.item.label); // display the selected text
              $('#product_id').val(ui.item.value); // save selected id to input
      $('#barcode').val(ui.item.barcode); 
      $('#product_name').val(ui.item.product_name); 
      $('#carton').val(ui.item.carton); 
      $('#d_iscount').val(ui.item.d_iscount); 
      $('#sales').val(ui.item.wholesale); 
      $('#buy').val(ui.item.buy); 
      
              return false;
          },
          focus: function(event, ui){
              $('#searchcode').val(ui.item.label); // display the selected text
              $('#product_id').val(ui.item.value); // save selected id to input
      $('#barcode').val(ui.item.barcode); 
      $('#product_name').val(ui.item.product_name); 
      $('#carton').val(ui.item.carton); 
      $('#d_iscount').val(ui.item.d_iscount); 
      $('#sales').val(ui.item.wholesale); 
      $('#buy').val(ui.item.buy); 
    
              return false;
          },
      });
  
  $(".add-row").click(function(){	
  
    var product_id		= $("#product_id").val();
    var barcode 		= $("#barcode").val();
    var product_name	= $("#product_name").val();
    var carton			= $("#carton").val();
    var b_atch			= '';
    var qty_carton		= $("#qty_carton").val();
    var qty_piece		= $("#qty_piece").val();
    var qty 			= '0';
    var sales 			= $("#sales").val();
    var d_iscount= $("#d_iscount").val();
    var buy 			= $("#buy").val();
    var itype 			= '';
    var sub_sale 		= '';
    var sub_buy 		= '';
   
   if($('#barcode').val() == ''){
   
    alert('Please Enter The Valid Product');
    $('#searchcode').val('');
    $("#searchcode").focus();
   }
   
   else {
    
    var markup = "<tr><td style='text-align: center'><input type='checkbox' name='record'></td><td><select name='itype[]'><option value='Sale'>Sale</option><option value='Return'>Return</option></select></td><td><input  type='' readonly  value='" + barcode + "' name='barcode[]' class='table_input'></td><td style='display:none;'><input  type='hidden' value='" + product_id + "' name='product_id[]' class='table_input'></td><td><input  type='' readonly  value='" + product_name + "' name='product_name[]' class='table_input'></td><td><input  type='' value='" + b_atch + "' name='b_atch[]' class='table_input' placeholder='Optional'></td><td style='display:none;'><input type='hidden' value='" + carton + "' name='carton[]'  class='table_input_number carton'></td><td><input  type='text'   value='" + qty_carton + "' name='qty_carton[]'  class='table_input_number qty_carton'></td><td><input  type='text'   value='" + qty_piece + "' name='qty_piece[]'  class='table_input_number qty_piece'></td><td style='display:none;'><input  type='hidden'   value='" + qty + "' name='qty[]'  class='table_input_number qty'></td><td><input  type='text'   value='" + sales + "' name='sales[]' class='table_input_number sales'></td><td><input  type='text'   value='" + d_iscount + "' name='product_discount[]' class='table_input_number d_iscount'></td><td><input  type='' value='" + sub_sale + "' name='sub_sale[]' class='table_input_number sub_sale'></td><td style='display:none;'><input  type='hidden'   value='" + buy + "' name='buy[]' class='table_input_number buy'></td><td style='display:none;' ><input type='hidden' value='" + sub_buy + "' name='sub_buy[]' class='table_input_number sub_buy'></td></tr>";
    $("table tbody").append(markup);
    
      
        add_calcualte ()
                      
        var obj = document.createElement("audio");
        obj.src = "../assets/sound/appointed-529.mp3";
        obj.volume = 0.3;
        obj.autoPlay = false;
        obj.preLoad = true;
        obj.controls = true;
        obj.play();
        
        $('.searchcode').val('');
        $('#barcode').val('');
        $('#product_id').val('');
        $('#product_name').val('');
        $('#b_atch').val('');
        $('#carton').val('');
        $('#qtu_carton').val('0');
        $('#qtu_piece').val('0');
        $('#qty').val('1');
        $('#buy').val('');
        $('#sales').val('');
        $('#d_iscount').val('');
        $('#sub_sale').val('');
        $('#sub_buy').val('');
        $(".searchcode").focus();
        
   }
});

// Items Delete

      $(".delete-row").click(function(){
          $("table tbody").find('input[name="record"]').each(function(){
              if($(this).is(":checked")){
                  $(this).parents("tr").remove();
        
    // Play Sound		
    var obj = document.createElement("audio");
    obj.src = "../assets/sound/trash.wav";
    obj.volume = 0.3;
    obj.autoPlay = false;
    obj.preLoad = true;
    obj.controls = true;
    obj.play();
    add_calcualte ()
    add_calcualte ()
              }
          });
      });


// Main Calculation

  function add_calcualte () {

  $("input[name='qty[]']").each(function(index) {
    var carton = $("input[name='carton[]']").eq(index).val();
    var qty_carton = $("input[name='qty_carton[]']").eq(index).val();
    var qty_piece = $("input[name='qty_piece[]']").eq(index).val();
    var qty = $("input[name='qty[]']").eq(index).val();
    var piece = $("input[name='piece[]']").eq(index).val();
    var d_iscount = $("input[name='product_discount[]']").eq(index).val();
    var sales = $("input[name='sales[]']").eq(index).val();
    var buy = $("input[name='buy[]']").eq(index).val();

// Calculate Subtotal

    var output = parseFloat( (parseFloat(qty_piece)+ parseFloat(qty_carton*carton))* parseFloat(sales-(sales/100*d_iscount))).toFixed(2);
    var sub_buy = parseFloat(parseFloat(qty) * parseFloat(buy)).toFixed(0);
    var quantity = parseFloat( (parseFloat(qty_piece)+ parseFloat(qty_carton*carton))).toFixed(2);
    
    if (!isNaN(output)) {
    
  // Calculate Total
  
        $("input[name='qty[]']").eq(index).val(quantity);
        $("input[name='sub_sale[]']").eq(index).val(output);
        $("input[name='sub_buy[]']").eq(index).val(sub_buy);
  
      // Get The Total and Return Amount
  
          const sum = {
          Sale: 0,
          Return: 0
          };
          $(".sub_sale").each(function() {
          const itype = $(this).closest("tr").find("[name='itype[]']").val();
          sum[itype] += +$(this).val();
          });				  
                  
                  
          const psum = {
            Sale: 0,
          Return: 0
          };
          $(".sub_buy").each(function() {
          const itype = $(this).closest("tr").find("[name='itype[]']").val();
          psum[itype] += +$(this).val();
          });				  
          
     
          
        $("#total").val(parseFloat(sum.Sale).toFixed(0));
        $("#return").val(parseFloat(sum.Return).toFixed(0));
        $("#purchase").val(psum.Sale);
    
      // Calculate Grand Total
        var stotal = +$("#total").val();
        var rtotal = +$("#return").val();
        var tpurchase = +$("#purchase").val();
        var discount = +$(".discount").val();
        var less = +$(".less").val();
        var shipping = +$(".shipping").val();
        var laber = +$(".laber").val();
        var vat = +$(".vat").val();
        var paid = +$(".paid").val();
        var vat_amt		= +$("#vat_amt").val();

        $("#vat_amt").val(parseFloat((stotal-(stotal/100*discount)-less)/100*vat).toFixed(0));
        $("#payable").val(stotal - (stotal/100*discount)+(stotal/100*vat) -rtotal- less+shipping+laber);
        $("#grandtotal").val(stotal - (stotal/100*discount) +(stotal/100*vat)-rtotal- less+shipping+laber);
        $("#due").val(stotal - (stotal/100*discount)+(stotal/100*vat)- rtotal - less-paid+shipping+laber);
        $("#profit").val(stotal - (stotal/100*discount)-tpurchase-less);
  
      }
    })
  
  }	

 // Change Caculate Value
  
  $(".calculate").on('keyup change', function() {
  
    add_calcualte()
    
  })



// Filter Products
  
  jQuery("#search").on("change", function() {
    var value = $(this).val().toLowerCase();
    jQuery(".productss").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  
  
  
// Disable Enter Button 

  $(window).ready(function() {
    $("#form-id").on("keypress", function (event) {
      var keyPressed = event.keyCode || event.which;
      if (keyPressed === 13) {
        $("#total").focus();
        $("#searchcode").focus();
        event.preventDefault();
        return false;
      }
    });
  });
  
  
  
// Shourtcut

  shortcut.add("ctrl+s", function() {

    if(document.getElementById("payable").value.length == 0)
    {
    alert("You have not added any products. Add product and try again")
    }
    
    else
      {
        document.getElementById("save").click();
      }
  });   

</script>
	
    </body>
</html>