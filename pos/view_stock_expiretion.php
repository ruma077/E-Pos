<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
            <section class="content-header">
            <div class="container-fluid">
				   <div class="mt-4 mb-2 page-title">
   <div class="row">
   <div class="col-lg-6 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;"> Product  <i class="fa fa-angle-right"></i> Expire in next 21 days</h5>
                     </div>
       <div class="col-lg-6 col-sm-12 col-md-6 text-right">
	   <a href="preview_stock_expiretion.php" class="btn btn-primary">  <i class="fa fa-print"></i>  Print</a>
	    <a href="add_damage.php" class="btn btn-primary">  <i class="fa fa-plus-square"></i>  Stock Adjust</a>
      </div>
   </div>
   <hr>
</div>
<div class="card mb-2">
<div class="card-body  pt-3">
      <div class="table-responsive">
         <br>
         <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
			<tr>
				<th>Barcode </th>
				<th>Product Name</th>
				<th>Batch</th>
				<th>Expired Product</th>
				<th>Buy Rate</th>
				<th>Retail Price</th>
				<th>Carton</th>
	 
				<th>Piece</th>
				<th>Stock Qty. </th>
			</tr>
            </thead>
            <tbody>
               <tr>
                  <th>10002365 </th>
                  <th>Pran Juice</th>
                  <th>236</th>
                  <th>5-6-2036</th>
                  <th>20</th>
                  <th>30</th>
                  <th>1</th>
         
                  <th>12</th>
                  <th>203 </th>
               </tr>
               <tr>
                  <th>200365 </th>
                  <th>Pran sauce</th>
                  <th>236</th>
                  <th>5-6-2036</th>
                  <th>20</th>
                  <th>30</th>
                  <th>1</th>
         
                  <th>12</th>
                  <th>203 </th>
               </tr>
               <tr>
                  <th>9000325 </th>
                  <th>Pran Milk</th>
                  <th>236</th>
                  <th>5-6-2036</th>
                  <th>20</th>
                  <th>30</th>
                  <th>1</th>
         
                  <th>12</th>
                  <th>203 </th>
               </tr>
            </tbody>
            <tfoot>
         </table>
      </div>
   </div>
</div>
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