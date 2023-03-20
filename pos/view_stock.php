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
  <div class="col-lg-8 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;"> Stock   <i class="fa fa-angle-right"></i> Details Stock</h5>
                     </div>
    <div class="col-lg-4 col-4">
      <input type="text" id="Search" onkeyup="myFunction()" class="form-control"  placeholder="Search the category"  autofocus >
    </div>
  </div>
</div>
<div class="card mb-2">
  <div class="card-body">
    <div class="row">
            <div class="col-md-4"> <a href="view_stock_category.php?id=1" class="text-primary" style="font-weight: normal; font-size:18px;" > <i class="fa fa-folder-open text-primary"></i> Rice <samp class="text-danger"> 572  </samp> </a> </div>
            <div class="col-md-4"> <a href="view_stock_category.php?id=2" class="text-primary" style="font-weight: normal; font-size:18px;" > <i class="fa fa-folder-open text-primary"></i> Oil <samp class="text-danger"> 910  </samp> </a> </div>
            <div class="col-md-4"> <a href="view_stock_category.php?id=3" class="text-primary" style="font-weight: normal; font-size:18px;"> <i class="fa fa-folder-open text-primary"></i> Spices <samp class="text-danger"> 465  </samp> </a> </div>
            <div class="col-md-4"> <a href="view_stock_category.php?id=4" class="text-primary" style="font-weight: normal; font-size:18px;"> <i class="fa fa-folder-open text-primary"></i> Dal <samp class="text-danger"> 90  </samp> </a> </div>
            <div class="col-md-4"> <a href="view_stock_category.php?id=5" class="text-primary" style="font-weight: normal; font-size:18px;"> <i class="fa fa-folder-open text-primary"></i> Salt <samp class="text-danger"> 200  </samp> </a> </div>
            <div class="col-md-4"> <a href="view_stock_category.php?id=6" class="text-primary" style="font-weight: normal; font-size:18px;"> <i class="fa fa-folder-open text-primary"></i> Sugar <samp class="text-danger"> 348  </samp> </a> </div>
            <div class="col-md-4"> <a href="view_stock_category.php?id=7" class="text-primary" style="font-weight: normal; font-size:18px;"> <i class="fa fa-folder-open text-primary"></i> Beverages <samp class="text-danger"> 635  </samp> </a> </div>
            <div class="col-md-4"> <a href="view_stock_category.php?id=8" class="text-primary" style="font-weight: normal; font-size:18px;"> <i class="fa fa-folder-open text-primary"></i> Cosmetics <samp class="text-danger"> 0  </samp> </a> </div>
            <div class="col-md-4"> <a href="view_stock_category.php?id=32" class="text-primary" style="font-weight: normal; font-size:18px;"> <i class="fa fa-folder-open text-primary"></i> Agro Product <samp class="text-danger"> 0  </samp> </a> </div>
          </div>
  </div>
</div>

<script>
 function myFunction() {
  var input = document.getElementById("Search");
  var filter = input.value.toLowerCase();
  var nodes = document.getElementsByClassName('col-md-4');

  for (i = 0; i < nodes.length; i++) {
    if (nodes[i].innerText.toLowerCase().includes(filter)) {
      nodes[i].style.display = "block";
    } else {
      nodes[i].style.display = "none";
    }
  }
}
</script>

            </section>
            
        </div>
        <?php include("script.php") ?>
	  
	
    </body>
</html>