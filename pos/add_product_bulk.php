<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;"> 
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
            <section class="content-header">
            <form name="frmUser" method="post" action="" enctype="multipart/form-data" >

            <div class="row">
                     <div class="col-lg-10 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;"> Product <i class="fa fa-angle-right"></i> Multiple Entry</h5>
                     </div>
                     <div class="col-lg-2 col-sm-12 col-md-3" >
                        <a class="btn btn-primary" href="list_product.php" role="button"  style="width:auto;  margin-top: 5px; margin-left:0px; text-align: center; color: white; font-weight: normal; font-size: 16px; font-family: serif;"><i class="fa fa-folder" style="color: white;"></i>&nbsp; Product List</a>
                     </div>
                  </div> <hr>

                  <div class="card-body">
  
 
 
	
		  <div class="all">
           <div class="formi" style="background: #d4ddff!important;     padding: 10px;margin-bottom: 10px;">
               <div class="row form-group">
	    <div class="col-md-1">
			 
			<a class="btn btn-danger btn-sm cancel text-white " name="del_item"> <i class="fa fa-trash" style=" font-size: 25px;"></i></a> 
			
  </div>
  
		  <div class="col-md-2">
      <input type="text" class="form-control" id="barcode"  name="barcode" autofocus required="required" placeholder="Barcode">
		  </div>
      <div class="col-md-1">
      <a class="btn btn-warning btn-block" style="height: 50px;font-size: 35px;" onclick="getElementById('barcode').value=Math.floor(Math.random() * 10) + Date.now()"><i class="fa fa-barcode"> </i></a>
		  </div>
		  <div class="col-md-2">
			
			<select type="text" class="form-control" name="category[]" required="">
                  <option>Select Category</option>
                                    <option value="1">Rice</option>
                                    <option value="2">Oil</option>
                                    <option value="3">Spices</option>
                                    <option value="4">Dal</option>
                                    <option value="5">Salt</option>
                                    <option value="6">Sugar</option>
                                    <option value="7">Beverages</option>
                                    <option value="8">Cosmetics</option>
                                    <option value="32">Agro Product</option>
                                 </select>
		  </div>
		  <div class="col-md-4">
			<input class="form-control add" type="text" name="product_name[]" required="" placeholder="Product Name">
		  </div>
		  <div class="col-md-2">
		
			<select type="text" class="form-control" name="unit" required="">
                  <option value="">Unit</option>
                                    <option value="1" data-id="1">Piece</option>
                                    <option value="2" data-id="2">KG</option>
                                    <option value="3" data-id="3">Packet</option>
                                    <option value="4" data-id="4">Sack</option>
                                    <option value="5" data-id="5">Feet</option>
                                    <option value="6" data-id="6">Box</option>
                                    <option value="7" data-id="7"> Dozen</option>
                                    <option value="8" data-id="8">Dram</option>
                                    <option value="9" data-id="9">Bundle </option>
                                    <option value="10" data-id="10">Liter</option>
                                    <option value="11" data-id="11">Gaj</option>
                                    <option value="12" data-id="12">Gm.</option>
                                    <option value="13" data-id="13">Carton</option>
                                    <option value="14" data-id="14">Bag</option>
                                 </select>
		  </div>

		  </div>

		  <div class="row ">
		<div class="col-md-1">
		  </div>  
		  <div class="col-md-2">
			<input class="form-control" type="text" name="buy[]" required="" placeholder="Buy Rate">
		  </div>
		  <div class="col-md-2">
			<input class="form-control" type="text" name="sale[]" placeholder="Retail Price">
		  </div>		  
		  
			  <div class="col-md-2">
			<input class="form-control" type="text" name="wholesale[]" placeholder="Wholesale Price">
		  </div>
		  <div class="col-md-2">
			<input class="form-control" type="text" name="opening[]" placeholder="Opening">
		  </div>		  
		  
			  <div class="col-md-3">
        <input type="file" class="" name="photo" required="required" accept="image/*" onchange="validateForSize(this,5,200);">
        <div class="small  mt-2" style="color:red;">[JPG/JPEG/PNG]</div>
		  </div>
 
               </div>
             
            </div>
			 <center>
       <button type="button" class="instl btn btn-link " style="color:blue; font-weight: bold; text-decoration: none; font-size: 18px;"><i class="fa fa-plus " style="color:blue;"></i> Add More</button>
         <center>
         </center></center></div>
      </div>
      

      <div class="card-footer">
     
      <div class="row">
        <div class="col-md-3">
		  <input type="hidden" readonly="" class="form-control" name="unique_id" value="1677756567">
          <input type="submit" class="btn btn-success add" name="save" value="Save">
          <input type="reset" class="btn btn-secondary" value="Reset">
        </div>
		 
         
			<div class="col-md-4">
         
        </div> 
		    	<div class="col-md-1">
         
        </div> 

        <div class="col-md-1"> </div>
      </div>
    </div>


      <!-- <div class="card mt-2">
      
      <div class="card-body">
      
    
    
      
          <div class="all">
              <div class="formi" style="background: #d4ddff!important;     padding: 10px;margin-bottom: 10px;">
                  <div class="row form-group">
          <div class="col-lg-1">
          
          <a class="btn btn-danger btn-sm cancel text-white " name="del_item"  > <i class="fa fa-trash "></i>  </a> 
          
      </div>
      
          <div class="col-lg-2 col-md-6 col-sm-12">
          <input class="form-control add" type="text" name="barcode[]" required placeholder="Barcode">
          </div>
          <div class="col-lg-2 col-md-6 col-sm-12">
          
              <select type="text" class="form-control" name="category[]" required> 
                      <option>Select Category</option>
                                        <option value="1" >Rice</option>
                                        <option value="2" >Oil</option>
                                        <option value="3" >Spices</option>
                                        <option value="4" >Dal</option>
                                        <option value="5" >Salt</option>
                                        <option value="6" >Sugar</option>
                                        <option value="7" >Beverages</option>
                                        <option value="8" >Cosmetics</option>
                                        <option value="32" >Agro Product</option>
                                    </select>
          </div>

          <div class="col-lg-2 col-md-6 col-sm-12">
          <input class="form-control add" type="text" name="product_name[]" required placeholder="Product Name">
          </div>

          <div class="col-md-2">
        
                <select type="text" class="form-control" name="unit" required>
                      <option value="">Unit</option>
                                        <option value="1" data-id="1">Piece</option>
                                        <option value="2" data-id="2">KG</option>
                                        <option value="3" data-id="3">Packet</option>
                                        <option value="4" data-id="4">Sack</option>
                                        <option value="5" data-id="5">Feet</option>
                                        <option value="6" data-id="6">Box</option>
                                        <option value="7" data-id="7"> Dozen</option>
                                        <option value="8" data-id="8">Dram</option>
                                        <option value="9" data-id="9">Bundle </option>
                                        <option value="10" data-id="10">Liter</option>
                                        <option value="11" data-id="11">Gaj</option>
                                        <option value="12" data-id="12">Gm.</option>
                                        <option value="13" data-id="13">Carton</option>
                                        <option value="14" data-id="14">Bag</option>
                                    </select>
          </div>

          <div class="col-md-2">
          <input class="form-control" type="text" name="carton[]" placeholder="Unit Per Group">
          </div>

          </div>

          <div class="row ">
        <div class="col-lg-3">
          </div>  
          <div class="col-lg-2 col-md-6 col-sm-12">
          <input class="form-control" type="text" name="buy[]" required placeholder="Buy Rate">
          </div>
          <div class="col-md-2">
          <input class="form-control" type="text" name="sale[]" placeholder="Retail Price">
          </div>		  
          
            <div class="col-md-2">
          <input class="form-control" type="text" name="wholesale[]" placeholder="Wholesale Price">
          </div>
          <div class="col-md-2">
          <input class="form-control" type="text" name="opening[]" placeholder="Opening">
          </div>		  
          
            <div class="col-md-3">
          <input class="form-control" type="text" name="min_stock[]" placeholder="Min Stock">
          </div>
    
                  </div>
                
                </div>
          <center>
            <button type="button" class="instl btn btn-link "><i class="fa fa-plus "></i> Add More</button>
            <center>
            </div>
          </div>
      <div class="card-footer">
        
          <div class="row">
            <div class="col-md-3">
          <input type="hidden" readonly class="form-control" name="unique_id" value="1677575783"  >
              <input type="submit" class="btn btn-success add" name="save" value="Save" />
              <input type="reset" class="btn btn-secondary"  value="Reset" />
            </div>
        
            
          <div class="col-md-4">
            
            </div> 
              <div class="col-md-1">
            
            </div> 

            <div class="col-md-1"> </div>
          </div>
        </div>
    </form>
                </section>
                -->
        </div>
        <?php include("script.php") ?>
	  
	
    </body>
    <script type="text/javascript">
   // Colone Items
    
   	$(document).ready(function() {
   	  $(".instl").click(function() {
   		$(".formi")
   		  .eq(0)
   		  .clone()
   		  .find("input").val("").end() // *
   		  .show()
   		  .insertAfter(".formi:last");
   		
   	  });
   	  $('.all').on('click', ".cancel", function() {
   		  $(this).closest('.formi').remove();
   		});
   	});
   	
   	
   // Remove Row  
   		function deleteRow() {
   	$('DIV.items').each(function(index, item){
   		jQuery(':checkbox', this).each(function () {
   			if ($(this).is(':checked')) {
   				$(item).remove();
   			}
   		});
   	});
   }
</script>
</html>