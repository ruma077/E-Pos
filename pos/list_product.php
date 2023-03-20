<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
            <section class="content-header">
            <div class="container-fluid">
				      <style>
   
   .webgrid-table-hidden
{
    display: none;
}

</style>

               <div class="row">
                     <div class="col-lg-8 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;"> Product <i class="fa fa-angle-right"></i> Product List</h5>
                     </div>
                     <div class="col-lg-2 col-sm-6 col-md-3" >
                        <a class="btn btn-success" href="add_product.php" role="button"  style="width:150px;  margin-top: 5px; margin-left:0px; color: white; text-align: center; font-weight: normal;font-size: 16px;  font-family: serif; "><i class="fa fa-plus" style="color: white;"></i>&nbsp; Add Product</a>
                     </div>
                     <div class="col-lg-2 col-sm-6 col-md-3" >
                        <a class="btn btn-primary" href="preview_product_list.php" role="button"  style="width:120px;  margin-top: 5px; margin-left:0px; text-align: center; color: white; font-weight: normal; font-size: 16px; font-family: serif;"><i class="fa fa-print" style="color: white;"></i>&nbsp; Print</a>
                     </div>
               </div> 
               <hr>

              

               <div class="card mb-4">
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
               <th style="text-align: center; color: #3f5eb5; font-weight: bold; font-size: 18px;"> Barcode  </th>
               <th style="text-align: center; color: #3f5eb5; font-weight: bold; font-size: 18px;"> Category  </th>
               <th style="text-align: center; color: #3f5eb5; font-weight: bold; font-size: 18px;"> Product Name </th>
               <th style="text-align: center; color: #3f5eb5; font-weight: bold; font-size: 18px;"> Buy Rate </th>
               <th style="text-align: center; color: #3f5eb5; font-weight: bold; font-size: 18px;"> Retail Price </th>
               <th style="text-align: center; color: #3f5eb5; font-weight: bold; font-size: 18px;"> Margin </th>
               <th width="10%" style="text-align: center; color: #3f5eb5; font-weight: bold; font-size: 18px;"> Action</th>
               </tr>
            </thead>
            <tbody>
            <tr>
               <td> 123456789</td>
               <td> Rice</td>
               <td> Chashi Aromatic Chinigura Rice</td>
               <td> 1234</td>
               <td> 1234</td>
               <td> 30.00%</td>
               <td nowrap>
			 
                  <a href="edit_product.php?id=1" class="btn btn-success btn-sm"> <i class="fa fa-edit ">  </i> </a> 
				<a class="btn btn-warning btn-sm" href="barcode_from_product.php?id=1" ><i class="fa fa-barcode fa-sm"> </i> </a>				  
                  <a  data-appd="1" class="delete btn btn-danger btn-sm" href="#"><i class="fa fa-trash "> </i>  </a>
				  
               </td>
            </tr>
            <tr>
               <td> 1665670756537</td>
               <td> Rice</td>
               <td> Miniket</td>
               <td> 55</td>
               <td> 60</td>
               <td> 8.33%</td>
               <td nowrap>
			 
                  <a href="edit_product.php?id=2" class="btn btn-success btn-sm"> <i class="fa fa-edit ">  </i> </a> 
				<a class="btn btn-warning btn-sm" href="barcode_from_product.php?id=2" ><i class="fa fa-barcode fa-sm"> </i> </a>				  
                  <a  data-appd="2" class="delete btn btn-danger btn-sm" href="#"><i class="fa fa-trash "> </i>  </a>
				  
               </td>
            </tr>
            <tr>
               <td> 1665670813748</td>
               <td> Oil</td>
               <td> Teer Fortified Soyabean Oil</td>
               <td> 165</td>
               <td> 1109</td>
               <td> 85.12%</td>
               <td nowrap>
			 
                  <a href="edit_product.php?id=3" class="btn btn-success btn-sm"> <i class="fa fa-edit ">  </i> </a> 
				<a class="btn btn-warning btn-sm" href="barcode_from_product.php?id=3" ><i class="fa fa-barcode fa-sm"> </i> </a>				  
                  <a  data-appd="3" class="delete btn btn-danger btn-sm" href="#"><i class="fa fa-trash "> </i>  </a>
				  
               </td>
            </tr>
            <tr>
               <td> 1665670914389</td>
               <td> Oil</td>
               <td> Fresh Fortified Soyabean Oil</td>
               <td> 170</td>
               <td> 185</td>
               <td> 8.11%</td>
               <td nowrap>
			 
                  <a href="edit_product.php?id=4" class="btn btn-success btn-sm"> <i class="fa fa-edit ">  </i> </a> 
				<a class="btn btn-warning btn-sm" href="barcode_from_product.php?id=4" ><i class="fa fa-barcode fa-sm"> </i> </a>				  
                  <a  data-appd="4" class="delete btn btn-danger btn-sm" href="#"><i class="fa fa-trash "> </i>  </a>
				  
               </td>
            </tr>
                           </tbody>
            <tfoot>
         </table>
      </div>
   </div>
</div>

<br> <br>


               
            </section>
            


            
            
        </div>
        <?php include("script.php") ?>
        <script>
	var GridView = $('#dataTable').DataTable({});
	$('#dataTable').show();
	GridView.columns.adjust().draw();
</script>
	  
	
    </body>
</html>