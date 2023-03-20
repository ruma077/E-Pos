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
                   
               <div class="mt-4 mb-2 page-title">
                  <div class="row">
                  <div class="col-lg-8 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;"> Product  <i class="fa fa-angle-right"></i> Quick Stock</h5>
                     </div>
                      <div class="col-lg-4 col-sm-12 col-md-6 text-right">
                       <a href="view_stock.php" class="btn btn-outline-primary">  <i class="fa fa-plus-square"></i>   Category Stock</a>
                     </div>
                  </div>
               </div>
               <div class="card mb-2">
               <div class="card-body  pt-3">
                     <div class="table-responsive">
                      
                       <table class="table table-hover webgrid-table-hidden " id="dataTable" width="100%" cellspacing="0">
                           <thead>
                           <tr>
                               <th> Barcode </th>
                               <th> Category</th>
                               <th> Product Name</th>
                               <th> Buy Rate </th>
                               <th> Retail Price </th>
                               <th> Stock </th>
                           </tr>
                           </thead>
                           <tbody>
                                                <tr>
                                   <td >796648174158</td>
                                   <td ></td>
                                   <td >حليب المراعي 1 لتر</td>
                                   <td class="bn-font"> 10.5</td>
                                   <td class="bn-font"> 11</td>
                                   <td class="bn-font"  > -49</td>
                               </tr>
                                                <tr>
                                   <td >2020</td>
                                   <td ></td>
                                   <td >جبنة المراعي 500 غ</td>
                                   <td class="bn-font"> 20</td>
                                   <td class="bn-font"> 25</td>
                                   <td class="bn-font"  > -3</td>
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