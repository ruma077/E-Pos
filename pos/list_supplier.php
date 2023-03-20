<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
        <div class="container-fluid">
        <div class=" row mx-3">
                     <div class="col-lg-10 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;">Supplier <i class="fa fa-angle-right"></i> Supplier List </h5>
                     </div>
                   
                     <div class="col-lg-2 col-sm-12 col-md-6 text-right">
 
                     <a href="preview_supplier_report.php" class="btn btn-primary"><i class="fa fa-print"></i>  Print  </a>
		<a href="add_supplier.php" class="btn btn-primary"> <i class="fa fa-plus-square"></i>  Supplier Entry </a>
      </div>
        </div> 
        
        <hr> 
				   <!-- <divxx class="mt-4 mb-2 page-title">
   <div class="row">
    <div class="col-md-6 my-auto">
  Supplier <i class="fa fa-angle-right"></i>  Supplier List   
      </div>
             <div class="col-md-6 text-right">
		<a href="preview_supplier_report.php" class="btn btn-primary"><i class="fa fa-print"></i>  Print  </a>
		<a href="add_supplier.php" class="btn btn-primary"> <i class="fas fa-plus-square"></i>  Supplier Entry </a>
      </div>
   </div>
</divxx> -->
<div class="card mb-4">
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                  <th width="0%"> #</th>
                  <th> Supplier  </th>
                  <th> Fullname </th>
                  <th> Mobile </th>
                  <th> Balance </th>
                  <th width="10%"> </th>
               </tr>
            </thead>
            <tbody>
                              <tr>
				<td width="0%" class="bn-font">1</td>
				<td > Teer</td>
				<td> Teer</td>
				<td class="bn-font" > 01580000000</td>
				<td class="bn-font" > 10740</td>
				<td width="10%">
				<a href="edit_supplier.php?id=1" class="btn btn-success btn-sm"> <i class="fa fa-edit ">  </i> </a>  
				<a  data-appd="1" class="delete btn btn-danger btn-sm " href="#"><i class="fa fa-trash "> </i>  </a>
				</td>
               </tr>
                              <tr>
				<td width="0%" class="bn-font">2</td>
				<td > Fresh</td>
				<td> Fresh</td>
				<td class="bn-font" > 01780000000</td>
				<td class="bn-font" > 1735</td>
				<td width="10%">
				<a href="edit_supplier.php?id=2" class="btn btn-success btn-sm"> <i class="fa fa-edit ">  </i> </a>  
				<a  data-appd="2" class="delete btn btn-danger btn-sm " href="#"><i class="fa fa-trash "> </i>  </a>
				</td>
               </tr>
                              <tr>
				<td width="0%" class="bn-font">3</td>
				<td > Pran</td>
				<td> Pran</td>
				<td class="bn-font" > 01671000000</td>
				<td class="bn-font" > 17120</td>
				<td width="10%">
				<a href="edit_supplier.php?id=3" class="btn btn-success btn-sm"> <i class="fa fa-edit ">  </i> </a>  
				<a  data-appd="3" class="delete btn btn-danger btn-sm " href="#"><i class="fa fa-trash "> </i>  </a>
				</td>
               </tr>
                              <tr>
				<td width="0%" class="bn-font">4</td>
				<td > Square</td>
				<td> Square</td>
				<td class="bn-font" > 01790000000</td>
				<td class="bn-font" > 0</td>
				<td width="10%">
				<a href="edit_supplier.php?id=4" class="btn btn-success btn-sm"> <i class="fa fa-edit ">  </i> </a>  
				<a  data-appd="4" class="delete btn btn-danger btn-sm " href="#"><i class="fa fa-trash "> </i>  </a>
				</td>
               </tr>
                              <tr>
				<td width="0%" class="bn-font">5</td>
				<td > Almarai </td>
				<td> oy</td>
				<td class="bn-font" > 0534244500</td>
				<td class="bn-font" > 475</td>
				<td width="10%">
				<a href="edit_supplier.php?id=22" class="btn btn-success btn-sm"> <i class="fa fa-edit ">  </i> </a>  
				<a  data-appd="22" class="delete btn btn-danger btn-sm " href="#"><i class="fa fa-trash "> </i>  </a>
				</td>
               </tr>
                           </tbody>
            <tfoot>
         </table>
      </div>
 
</div>

            
        </div>
        <?php include("script.php") ?>
	  
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script>
   $(document).on('click','.delete',function(){
   var element = $(this);
   var del_id = element.attr("data-appd");
   var info = 'delsupplier=' + del_id;
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
</script>
    </body>
</html>