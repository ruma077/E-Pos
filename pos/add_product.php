<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
            <section class="content-header">
            
            <div class="container-fluid">

				      <div class="row">
                     <div class="col-lg-8 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;"> Product <i class="fa fa-angle-right"></i> Add Product</h5>
                     </div>
                     <div class="col-lg-4 col-sm-6 col-md-3" >
                        <a class="btn btn-success" href="add_product_bulk.php" role="button"  style="auto;  margin-top: 5px; margin-left:0px; color: white; text-align: center; font-weight: normal;font-size: 16px;  font-family: serif; "><i class="fa fa-folder" style="color: white;"></i>&nbsp; Multiple Entry</a>
                        <a class="btn btn-primary" href="list_product.php" role="button"  style="auto;  margin-top: 5px; margin-left:0px; text-align: center; color: white; font-weight: normal; font-size: 16px; font-family: serif;"><i class="fa fa-folder" style="color: white;"></i>&nbsp; Product List</a>
                     </div>
                     <!-- <div class="col-lg-2 col-sm-6 col-md-3" >
                        <a class="btn btn-primary" href="list_product.php" role="button"  style="auto;  margin-top: 5px; margin-left:0px; text-align: center; color: white; font-weight: normal; font-size: 16px; font-family: serif;"><i class="fa fa-folder" style="color: white;"></i>&nbsp; Product List</a>
                     </div> -->
                  </div> <hr> 

   <div class="mt-3 card-body">
      
   
   <form name="frmUser" method="post" action="" enctype="multipart/form-data" >
         <div class="form-row">
                     <div class="form-group col-lg-2 col-md-6 col-sm-12">
                        <label for="inputEmail4">Barcode</label>
                        <input type="text" class="form-control" id="barcode"  name="barcode" autofocus required="required">
                     </div>
                  
                     <div class="form-group  col-lg-1 col-md-6 col-sm-12">
                        <label for="inputEmail4">Auto Code</label>
                        <a class="btn btn-warning btn-block" style="height: 50px;font-size: 35px;" onclick="getElementById('barcode').value=Math.floor(Math.random() * 10) + Date.now()"><i class="fa fa-barcode"> </i></a>
                     </div>
                     <div class="form-group col-lg-3 col-md-6 col-sm-12">
                     <label for="inputEmail4">Category  <samp class="text-danger"> * </samp></label>
                           <select id="category" type="text" class="form-control js-select2" name="category" >
                              <option>----</option>
                              <option value="1" data-id="1">Rice</option>
                              <option value="2" data-id="2">Oil</option>
                              <option value="3" data-id="3">Spices</option>
                              <option value="4" data-id="4">Dal</option>
                              <option value="5" data-id="5">Salt</option>
                              <option value="6" data-id="6">Sugar</option>
                              <option value="7" data-id="7">Beverages</option>
                              <option value="8" data-id="8">Cosmetics</option>
                              <option value="32" data-id="32">Agro Product</option>
                           </select>
                        </div>

                     <div class="form-group col-lg-3 col-md-6 col-sm-12">
                        <label for="inputAddress2">Product Name <samp class="text-danger"> * </samp> </label>
                        <input type="text" class="form-control" name="product_name" required="required">
                     </div>

                     <div class="form-group col-lg-3 col-md-6 col-sm-12">
                     <label for="inputEmail4">Unit  <samp class="text-danger"> * </samp></label>
                           <select id="category" type="text" class="form-control js-select2" name="category"  required="required">
                              <option>----</option>
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
                                    <option value="15" data-id="15">Bucket</option>
                           </select>
                        </div>

                    <!-- <div class="col-lg-1 col-md-6 col-sm-12">
		
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
		             </div> -->
                  
                        
                     
                     <div class="form-group col-lg-2 col-md-6 col-sm-12">
                        <label for="inputCity">Buy Rate  <samp class="text-danger"> * </samp>  </label>
                        <input type="text" class="form-control"  name="buy" required="required" >
                     </div>
                     <div class="form-group col-lg-2 col-md-6 col-sm-12">
                        <label for="inputCity">Retail Price</label>
                        <input type="text" class="form-control"  name="sale" required="required">
                     </div>
                     <div class="form-group col-lg-2 col-md-6 col-sm-12">
                        <label for="inputCity">Wholesale Price</label>
                        <input type="text" class="form-control"  name="sale" required="required">
                     </div>
                               
                  <div class="form-group col-lg-2 col-md-6 col-sm-12">
                        <label for="inputCity">Opening</label>
                        <input type="number" class="form-control"  name="opening" required="required">
                     </div>			
                  <!-- <div class="form-group col-lg-1 col-md-6 col-sm-12">
                        <label for="inputCity">Min Stock</label>
                        <input type="number" class="form-control"  name="min_stock" >
                     </div>			 -->
                  <!-- <div class="form-group col-lg-1 col-md-6 col-sm-12">
                        <label for="inputCity">Discount%</label>
                        <input type="number" class="form-control"  name="d_iscount" >
                     </div> -->
                     <div class="form-group col-lg-2 col-md-6 col-sm-12">
                        <label for="inputCity">Photo</label>
                        <input type="file" class="" name="photo" required="required" accept="image/*" onchange="validateForSize(this,5,200);">
                        <div class="small  mt-2" style="color:red;">[JPG/JPEG/PNG]</div>
                     </div>
         </div>
   </div>
   <div class="card-footer">
   <input type="submit" name="submit" id="register" value="Save" class="btn btn-primary">
   <button type="reset" class="btn btn-secondary">Reset</button>
   </form>

   </div>
</div>

            </section>


            
      
        </div>
        <?php include("footer.php") ?>
        <?php include("script.php") ?>
	  
	
    </body>
</html>