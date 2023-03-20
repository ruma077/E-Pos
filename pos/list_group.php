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
      <div class="col-md-10 my-auto">
         Dashboard  <i class="fa fa-angle-right"></i>        Category List      </div>
      <div class="col-md-2 text-right">
         <a href="add_product_category.php" class="btn btn-primary">  <i class="fa fa-plus-square"></i>  Add Category</a>
      </div>
   </div>
</div>
<div class="card mb-4">
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                  <th width="20%"> #</th>
                  <th width="20%"> ID</th>
                  <th> Category</th>
                  <th width="10%"> </th>
               </tr>
            </thead>
            <tbody>
                              <tr>
                  <td width="20%" class="bn-font">
                     1                  </td>
                  <td>
                     1</td>
                      <td>Rice                  </td>
                  <td width="10%">
                     <a href="edit_group.php?id=1" class="btn btn-success btn-sm"> <i class="fa fa-edit">  </i> </a> 
                     <a  data-appd="1" class="delete btn btn-danger btn-sm " href="#"><i class="fa fa-trash"> </i>  </a>
                  </td>
               </tr>
                              <tr>
                  <td width="20%" class="bn-font">
                     2                  </td>
                  <td>
                     2</td>
                      <td>Oil                  </td>
                  <td width="10%">
                     <a href="edit_group.php?id=2" class="btn btn-success btn-sm"> <i class="fa fa-edit">  </i> </a> 
                     <a  data-appd="2" class="delete btn btn-danger btn-sm " href="#"><i class="fa fa-trash"> </i>  </a>
                  </td>
               </tr>
                              <tr>
                  <td width="20%" class="bn-font">
                     3                  </td>
                  <td>
                     3</td>
                      <td>Spices                  </td>
                  <td width="10%">
                     <a href="edit_group.php?id=3" class="btn btn-success btn-sm"> <i class="fa fa-edit">  </i> </a> 
                     <a  data-appd="3" class="delete btn btn-danger btn-sm " href="#"><i class="fa fa-trash"> </i>  </a>
                  </td>
               </tr>
                              <tr>
                  <td width="20%" class="bn-font">
                     4                  </td>
                  <td>
                     4</td>
                      <td>Dal                  </td>
                  <td width="10%">
                     <a href="edit_group.php?id=4" class="btn btn-success btn-sm"> <i class="fa fa-edit">  </i> </a> 
                     <a  data-appd="4" class="delete btn btn-danger btn-sm " href="#"><i class="fa fa-trash"> </i>  </a>
                  </td>
               </tr>
                              <tr>
                  <td width="20%" class="bn-font">
                     5                  </td>
                  <td>
                     5</td>
                      <td>Salt                  </td>
                  <td width="10%">
                     <a href="edit_group.php?id=5" class="btn btn-success btn-sm"> <i class="fa fa-edit">  </i> </a> 
                     <a  data-appd="5" class="delete btn btn-danger btn-sm " href="#"><i class="fa fa-trash"> </i>  </a>
                  </td>
               </tr>
                              <tr>
                  <td width="20%" class="bn-font">
                     6                  </td>
                  <td>
                     6</td>
                      <td>Sugar                  </td>
                  <td width="10%">
                     <a href="edit_group.php?id=6" class="btn btn-success btn-sm"> <i class="fa fa-edit">  </i> </a> 
                     <a  data-appd="6" class="delete btn btn-danger btn-sm " href="#"><i class="fa fa-trash"> </i>  </a>
                  </td>
               </tr>
                              <tr>
                  <td width="20%" class="bn-font">
                     7                  </td>
                  <td>
                     7</td>
                      <td>Beverages                  </td>
                  <td width="10%">
                     <a href="edit_group.php?id=7" class="btn btn-success btn-sm"> <i class="fa fa-edit">  </i> </a> 
                     <a  data-appd="7" class="delete btn btn-danger btn-sm " href="#"><i class="fa fa-trash"> </i>  </a>
                  </td>
               </tr>
                              <tr>
                  <td width="20%" class="bn-font">
                     8                  </td>
                  <td>
                     8</td>
                      <td>Cosmetics                  </td>
                  <td width="10%">
                     <a href="edit_group.php?id=8" class="btn btn-success btn-sm"> <i class="fa fa-edit">  </i> </a> 
                     <a  data-appd="8" class="delete btn btn-danger btn-sm " href="#"><i class="fa fa-trash"> </i>  </a>
                  </td>
               </tr>
                              <tr>
                  <td width="20%" class="bn-font">
                     9                  </td>
                  <td>
                     32</td>
                      <td>Agro Product                  </td>
                  <td width="10%">
                     <a href="edit_group.php?id=32" class="btn btn-success btn-sm"> <i class="fa fa-edit">  </i> </a> 
                     <a  data-appd="32" class="delete btn btn-danger btn-sm " href="#"><i class="fa fa-trash"> </i>  </a>
                  </td>
               </tr>
                           </tbody>
            <tfoot>
         </table>
      </div>
   </div>
</div>
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script>
   $(document).on('click','.delete',function(){
   var element = $(this);
   var del_id = element.attr("data-appd");
   var info = 'delgroup=' + del_id;
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