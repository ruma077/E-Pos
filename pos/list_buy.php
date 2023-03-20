<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
            <section class="content-header">
            <div class="container-fluid">
				    
            <div class="row">
                     <div class="col-lg-10 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;"> Purchase  <i class="fa fa-angle-right"></i> Purchase Invoice</h5>
                     </div>
                     <div class="col-lg-2 col-sm-12 col-md-3" >
                        <!-- <a class="btn btn-success" href="add_product_bulk.php" role="button"  style="auto;  margin-top: 5px; margin-left:0px; color: white; text-align: center; font-weight: normal;font-size: 16px;  font-family: serif; "><i class="fa fa-folder" style="color: white;"></i>&nbsp; Multiple Entry</a> -->
                        <a class="btn btn-primary" href="add_buy.php" role="button"  style="auto;  margin-top: 5px; margin-left:0px; text-align: center; color: white; font-weight: normal; font-size: 16px; font-family: serif;"><i class="fa fa-list-alt" style="color: white;"></i>&nbsp; Add Purchase</a>
                     </div>
                     <!-- <div class="col-lg-2 col-sm-6 col-md-3" >
                        <a class="btn btn-primary" href="list_product.php" role="button"  style="auto;  margin-top: 5px; margin-left:0px; text-align: center; color: white; font-weight: normal; font-size: 16px; font-family: serif;"><i class="fa fa-folder" style="color: white;"></i>&nbsp; Product List</a>
                     </div> -->
                  </div> <hr> 
                    
                   

<div class="card-body">
      <div class="table-responsive">
        
         <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
           
               
               <div class="row">
                  <div class="col-sm-12">
                     <table class="table table-hover table-striped dataTable no-footer" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                        <thead>
                           <tr role="row">
                              <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Invoice #: activate to sort column ascending" style="width: 100px;">Invoice #</th>
                              <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 51px;">Date</th>
                              <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Supplier: activate to sort column ascending" style="width: 70px;">Supplier</th>
                              <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="width: 70px;">Mobile</th>
                              <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Total: activate to sort column ascending" style="width: 46px;">Total</th>
                              <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Paid: activate to sort column ascending" style="width: 36px;">Paid</th>
                              <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Due: activate to sort column ascending" style="width: 32px;">Due</th>
                              <th class="sorting" tabindex="0"  aria-controls="dataTable" rowspan="1" colspan="1" aria-label=" : activate to sort column ascending" style="width: 117px;"></th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr role="row" class="odd">     
                              <td> 23</td>
                              <td> 04.03.2023 </td>
                              <td> Teer </td>
                              <td> 01580000000 </td>
                              <td> 170 </td>
                              <td> 0 </td>
                              <td> 170 </td>
                  
                              <td nowarp="" align="right" nowrap="">
					                  <a class="btn btn-warning btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-barcode"></i> </a>
                                 <a class="btn btn-info btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-print"></i> </a>
                                 <a class="btn btn-success btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-edit"></i> </a>
                                 <a class="btn btn-danger btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-edit"></i> </a>
                               </td>
               </tr><tr role="row" class="even">
                  <td> 23</td>
				  <td> 04.03.2023 </td>
                  <td> Teer </td>
                  <td> 01580000000 </td>
                  <td> 7000 </td>
                  <td> 200 </td>
                  <td> 6800 </td>
                  
                  <td nowarp="" align="right" nowrap="">
					      <a class="btn btn-warning btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-barcode"></i> </a>
                     <a class="btn btn-info btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-print"></i> </a>
                     <a class="btn btn-success btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-edit"></i> </a>
                     <a class="btn btn-danger btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-edit"></i> </a>
                  </td>
               </tr><tr role="row" class="odd">
                  <td> 6</td>
				  <td> 23.02.2023 </td>
                  <td> Almarai  </td>
                  <td> 0534244500 </td>
                  <td> 135 </td>
                  <td> 0 </td>
                  <td> 135 </td>
                  
                  <td nowarp="" align="right" nowrap="">
					      <a class="btn btn-warning btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-barcode"></i> </a>
                     <a class="btn btn-info btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-print"></i> </a>
                     <a class="btn btn-success btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-edit"></i> </a>
                     <a class="btn btn-danger btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-edit"></i> </a>
                  </td>
               </tr><tr role="row" class="even">
                  <td> 3</td>
				  <td> 23.02.2023 </td>
                  <td> Fresh </td>
                  <td> 01780000000 </td>
                  <td> 135 </td>
                  <td> 0 </td>
                  <td> 135 </td>
                  
                  <td nowarp="" align="right" nowrap="">
					      <a class="btn btn-warning btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-barcode"></i> </a>
                     <a class="btn btn-info btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-print"></i> </a>
                     <a class="btn btn-success btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-edit"></i> </a>
                     <a class="btn btn-danger btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-edit"></i> </a>
                  </td>
               </tr><tr role="row" class="odd">
                  <td> 3</td>
				  <td> 23.02.2023 </td>
                  <td> Almarai  </td>
                  <td> 0534244500 </td>
                  <td> 170 </td>
                  <td> 0 </td>
                  <td> 170 </td>
                  
                  <td nowarp="" align="right" nowrap="">
					      <a class="btn btn-warning btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-barcode"></i> </a>
                     <a class="btn btn-info btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-print"></i> </a>
                     <a class="btn btn-success btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-edit"></i> </a>
                     <a class="btn btn-danger btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-edit"></i> </a>
                  </td>
               </tr><tr role="row" class="even">
                  <td> 33</td>
				  <td> 23.02.2023 </td>
                  <td> Almarai  </td>
                  <td> 0534244500 </td>
                  <td> 170 </td>
                  <td> 0 </td>
                  <td> 170 </td>
                  
                  <td nowarp="" align="right" nowrap="">
					      <a class="btn btn-warning btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-barcode"></i> </a>
                     <a class="btn btn-info btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-print"></i> </a>
                     <a class="btn btn-success btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-edit"></i> </a>
                     <a class="btn btn-danger btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-edit"></i> </a>
                  </td>
               </tr><tr role="row" class="odd">
                  <td> 556568</td>
				  <td> 18.02.2023 </td>
                  <td> Teer </td>
                  <td> 01580000000 </td>
                  <td> 165 </td>
                  <td> 0 </td>
                  <td> 165 </td>
                  
                  <td nowarp="" align="right" nowrap="">
					      <a class="btn btn-warning btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-barcode"></i> </a>
                     <a class="btn btn-info btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-print"></i> </a>
                     <a class="btn btn-success btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-edit"></i> </a>
                     <a class="btn btn-danger btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-edit"></i> </a>
                  </td>
               </tr><tr role="row" class="even">
                  <td> 556568</td>
				  <td> 14.02.2023 </td>
                  <td> Square </td>
                  <td> 01790000000 </td>
                  <td> 52 </td>
                  <td> 52 </td>
                  <td> 0 </td>
                  
                  <td nowarp="" align="right" nowrap="">
					      <a class="btn btn-warning btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-barcode"></i> </a>
                     <a class="btn btn-info btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-print"></i> </a>
                     <a class="btn btn-success btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-edit"></i> </a>
                     <a class="btn btn-danger btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-edit"></i> </a>
                  </td>
               </tr><tr role="row" class="odd">
                  <td> 52224</td>
				  <td> 14.02.2023 </td>
                  <td> Teer </td>
                  <td> 01580000000 </td>
                  <td> 25 </td>
                  <td> 20 </td>
                  <td> 5 </td>
                  
                  <td nowarp="" align="right" nowrap="">
					      <a class="btn btn-warning btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-barcode"></i> </a>
                     <a class="btn btn-info btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-print"></i> </a>
                     <a class="btn btn-success btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-edit"></i> </a>
                     <a class="btn btn-danger btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-edit"></i> </a>
                  </td>
               </tr><tr role="row" class="even">
                  <td> 56453</td>
				  <td> 15.10.2022 </td>
                  <td> Square </td>
                  <td> 01790000000 </td>
                  <td> 10640 </td>
                  <td> 640 </td>
                  <td> 10000 </td>
                  
                  <td nowarp="" align="right" nowrap="">
					      <a class="btn btn-warning btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-barcode"></i> </a>
                     <a class="btn btn-info btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-print"></i> </a>
                     <a class="btn btn-success btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-edit"></i> </a>
                     <a class="btn btn-danger btn-sm" href="barcode_page.php?uniqueid=1677913398"><i class="fa fa-edit"></i> </a>
                  </td>
               </tr></tbody>
           
         </table>
         </div>
      </div>

      </div>
      </div>
</div>
                    
                    
                    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
            </section>
            
        </div>
        <?php include("script.php") ?>
	  
        <script>
		$(document).on('click','.delete',function(){
		var element = $(this);
		var del_id = element.attr("data-appd");
		var info = 'delbuy=' + del_id;
		if(confirm("Are you sure you want to delete this?"))
		{
		 $.ajax({
		   type: "POST",
		   url: "ajax_delete.php",
		   data: info,
		   success: function(){
		 }
		});
		  $(this).parents("tr").animate({ backgroundColor: "#003" }, "slow")
		  .animate({ opacity: "hide" }, "slow");
		 }
		return false;
		});
		
		$('#dataTable').dataTable( {
		"order": [],
		"columnDefs": [ {
		  "targets"  : 'no-sort',
		  "orderable": false,
		}]
	});
	</script>
    </body>
</html>