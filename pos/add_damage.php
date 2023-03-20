<!DOCTYPE html>
<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
        <div class="container-fluid">
				   

 
 
                   <form name="frmUser" method="post" action="" enctype="multipart/form-data" >
                     <div class="card mt-4" >
                     <div class="row mt-4 mx-2">
                     <div class="col-lg-8 col-sm-12 col-md-6 ">
                        <h5 style="color: #3f5eb5;  text-align: left;">Product   <i class="fa fa-angle-right"></i> Add Damage Parts</h5>
                     </div>
                     <!-- <div class="col-lg-2 col-sm-6 col-md-3" >
                        <a class="btn btn-success" href="add_product.php" role="button"  style="width:150px;  margin-top: 5px; margin-left:0px; color: white; text-align: center; font-weight: normal;font-size: 16px;  font-family: serif; "><i class="fa fa-plus" style="color: white;"></i>&nbsp; Add Product</a>
                     </div> -->
                     <div class="col-lg-4 col-sm-12 col-md-6 text-right">
                     
                            <a href="list_damage.php" class="btn btn-primary"> <i class="fa fa-trash"></i> Damage History</a>
                         </div>
               </div> 
              
                       <hr>
                       <div class="card-body">
                       
                    
                    
                       <div class="form-group row">
                               <label for="staticEmail" class="col-sm-2 col-form-label">Product Name</label>
                               <div class="col-sm-5">
                        <select type="text" class="form-control js-select2"  name="product_id" requaid>
                                  <option>----</option>
                                           <option value="1">1665670585593/Chashi Aromatic Chinigura Rice</option>
                                           <option value="2">1665670756537/Miniket</option>
                                           <option value="3">1665670813748/Teer Fortified Soyabean Oil</option>
                                           <option value="4">1665670914389/Fresh Fortified Soyabean Oil</option>
                                           <option value="5">1665670982377/Radhuni Chilli (Morich) Powder 200 gm</option>
                                           <option value="6">1665671067497/Radhuni Turmeric (Holud) Powder 200 gm</option>
                                           <option value="7">1665671127397/Radhuni Cumin (Jira) Powder 100 gm</option>
                                           <option value="9">1665671292147/Pran Mug Dal 500 gm</option>
                                           <option value="10">1665671389017/Fresh Refined Sugar</option>
                                           <option value="11">1665671495631/ACI Pure Salt</option>
                                           <option value="12">1665812058366/Teer Sugar 1 kg</option>
                                           <option value="13">1665812277171/Pran Iodized Salt</option>
                                           <option value="14">1665812335319/Ispahani Mirzapore Best Leaf Tea 400 gm</option>
                                           <option value="15">1665812696131/Brooke Bond Taaza Black Tea 200gm</option>
                                           <option value="16">1665812791828/Pepsi</option>
                                           <option value="17">1665812854884/Sprite</option>
                                           <option value="18">1665812949882/Nestle Nescafe Classic Instant Coffee Jar 25 gm</option>
                                           <option value="19">1665813026943/Tang Orange Instant Drink Powder 500gm</option>
                                           <option value="20">1665813090846/Ovaltine Malted Chocolate Drink Jar 400gm</option>
                                           <option value="67">796648174158/حليب المراعي 1 لتر</option>
                                           <option value="98">5000159376792/سكيتاز 38  غ حبة</option>
                                           <option value="99">1676808629859/মিয়াজাকি</option>
                                           <option value="100">1677233631214/Vbh</option>
                                       </select>
                               </div>
                           </div>
                    
                       
                           <div class="form-group row">
                           <label for="staticEmail" class="col-sm-2 col-form-label">Reason</label>
                           <div class="col-sm-5">
                               <input type="text" name="reason" id="reson" class="form-control" required>
                           </div>
                       </div>	
                       
                       <div class="form-group row">
                           <label for="staticEmail" class="col-sm-2 col-form-label">সংযোজন</label>
                           <div class="col-sm-2">
                               <input type="text" name="increase" class="form-control" required  >
                           </div>
                       </div>
                       
                       <div class="form-group row">
                           <label for="staticEmail" class="col-sm-2 col-form-label">বিয়োজন</label>
                           <div class="col-sm-2">
                               <input type="text" name="qty" class="form-control" required  >
                           </div>
                       </div>	
                       
                       
                       
                            
                       <div class="form-group row">
                           <label for="staticEmail" class="col-sm-2 col-form-label">Date  </label>
                           <div class="col-sm-2">
                               <input type="date" name="d_ate" class="form-control" required >
                           </div>
                       </div>
                    
                     
                       </div>
                       <div class="card-footer">
                            <input type="submit" name="submit" value="Save"   class="btn btn-success ">
                            <button type="reset" class="btn btn-secondary">Reset</button>
                         </form>
                       </div>
                     </div>
            
        </div>
        <?php include("script.php") ?>
	  
	
    </body>
</html>