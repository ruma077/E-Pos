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
                  <!-- <div class="row">
                     <div class="col-lg-6 col-6 my-auto">
                        Product <i class="fa fa-angle-right"></i> Quick Stock 
                     </div>
                      <div class="col-lg-6 col-6 text-right">
                       <a href="view_stock.php" class="btn btn-outline-primary">  <i class="fa fa-plus-square"></i>   Category Stock</a>
                     </div>
                  </div> -->
                  <div class="row">
                     <div class="col-lg-10 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;"> Product  <i class="fa fa-angle-right"></i> Quick Stock</h5>
                     </div>
                     <!-- <div class="col-lg-2 col-sm-6 col-md-3" >
                        <a class="btn btn-success" href="add_product.php" role="button"  style="width:150px;  margin-top: 5px; margin-left:0px; color: white; text-align: center; font-weight: normal;font-size: 16px;  font-family: serif; "><i class="fa fa-plus" style="color: white;"></i>&nbsp; Add Product</a>
                     </div> -->
                     <div class="col-md-2 text-right">
                     <a href="view_stock.php" class="btn btn-outline-primary" style="color: black">  <i class="fa fa-plus-square" style="color: black"></i>   Category Stock</a>
                          </div>
               </div> 
               <hr>  
               </div>
               <div class="card mb-2">
               <div class="card-body  pt-3">
                     <div class="table-responsive">
                      
                       <table class="table table-hover table-striped webgrid-table-hidden " id="dataTable" width="100%" cellspacing="0">
                           <thead>
                           <tr>
                               <th> Barcode </th>
                               <th> Category</th>
                               <th> Product Name</th>
                               <th> Buy Rate </th>
                               <th> Retail Price </th>
                               <th> Group Qty. </th>
                               <th> Stock </th>
                           </tr>
                           </thead>
                           <tbody>
                                                <tr>
                                   <td >1665670585593</td>
                                   <td >Rice</td>
                                   <td >Chashi Aromatic Chinigura Rice</td>
                                   <td class="bn-font"> 135</td>
                                   <td class="bn-font"> 150</td>
                                   <td  >13 Sack   20 KG </td>
                                   <td class="bn-font"  > 345.00</td>
                               </tr>
                                                <tr>
                                   <td >1665670756537</td>
                                   <td >Rice</td>
                                   <td >Miniket</td>
                                   <td class="bn-font"> 55</td>
                                   <td class="bn-font"> 60</td>
                                   <td  >9 Sack   2 KG </td>
                                   <td class="bn-font"  > 227.00</td>
                               </tr>
                                                <tr>
                                   <td >1665670813748</td>
                                   <td >Oil</td>
                                   <td >Teer Fortified Soyabean Oil</td>
                                   <td class="bn-font"> 165</td>
                                   <td class="bn-font"> 1109</td>
                                   <td  >-    </td>
                                   <td class="bn-font"  > 102.00</td>
                               </tr>
                                                <tr>
                                   <td >1665670914389</td>
                                   <td >Oil</td>
                                   <td >Fresh Fortified Soyabean Oil</td>
                                   <td class="bn-font"> 170</td>
                                   <td class="bn-font"> 185</td>
                                   <td  >-    </td>
                                   <td class="bn-font"  > 91.00</td>
                               </tr>
                                                <tr>
                                   <td >1665670982377</td>
                                   <td >Spices</td>
                                   <td >Radhuni Chilli (Morich) Powder 200 gm</td>
                                   <td class="bn-font"> 108</td>
                                   <td class="bn-font"> 120</td>
                                   <td  >-    </td>
                                   <td class="bn-font"  > 154.00</td>
                               </tr>
                                                <tr>
                                   <td >1665671067497</td>
                                   <td >Spices</td>
                                   <td >Radhuni Turmeric (Holud) Powder 200 gm</td>
                                   <td class="bn-font"> 85</td>
                                   <td class="bn-font"> 95</td>
                                   <td  >-    </td>
                                   <td class="bn-font"  > 151.00</td>
                               </tr>
                                                <tr>
                                   <td >1665671127397</td>
                                   <td >Spices</td>
                                   <td >Radhuni Cumin (Jira) Powder 100 gm</td>
                                   <td class="bn-font"> 80</td>
                                   <td class="bn-font"> 88</td>
                                   <td  >-    </td>
                                   <td class="bn-font"  > 110.00</td>
                               </tr>
                                                <tr>
                                   <td >1665671292147</td>
                                   <td >Dal</td>
                                   <td >Pran Mug Dal 500 gm</td>
                                   <td class="bn-font"> 82</td>
                                   <td class="bn-font"> 90</td>
                                   <td  >-    </td>
                                   <td class="bn-font"  > 90.00</td>
                               </tr>
                                                <tr>
                                   <td >1665671389017</td>
                                   <td >Sugar</td>
                                   <td >Fresh Refined Sugar</td>
                                   <td class="bn-font"> 85</td>
                                   <td class="bn-font"> 95</td>
                                   <td  >-    </td>
                                   <td class="bn-font"  > 254.00</td>
                               </tr>
                                                <tr>
                                   <td >1665671495631</td>
                                   <td >Salt</td>
                                   <td >ACI Pure Salt</td>
                                   <td class="bn-font"> 32</td>
                                   <td class="bn-font"> 38</td>
                                   <td  >-    </td>
                                   <td class="bn-font"  > 94.00</td>
                               </tr>
                                                <tr>
                                   <td >1665812058366</td>
                                   <td >Sugar</td>
                                   <td >Teer Sugar 1 kg</td>
                                   <td class="bn-font"> 90</td>
                                   <td class="bn-font"> 95</td>
                                   <td  >-    </td>
                                   <td class="bn-font"  > 94.00</td>
                               </tr>
                                                <tr>
                                   <td >1665812277171</td>
                                   <td >Salt</td>
                                   <td >Pran Iodized Salt</td>
                                   <td class="bn-font"> 34</td>
                                   <td class="bn-font"> 40</td>
                                   <td  >-    </td>
                                   <td class="bn-font"  > 106.00</td>
                               </tr>
                                                <tr>
                                   <td >1665812335319</td>
                                   <td >Beverages</td>
                                   <td >Ispahani Mirzapore Best Leaf Tea 400 gm</td>
                                   <td class="bn-font"> 175</td>
                                   <td class="bn-font"> 190</td>
                                   <td  >-    </td>
                                   <td class="bn-font"  > 163.00</td>
                               </tr>
                                                <tr>
                                   <td >1665812696131</td>
                                   <td >Beverages</td>
                                   <td >Brooke Bond Taaza Black Tea 200gm</td>
                                   <td class="bn-font"> 88</td>
                                   <td class="bn-font"> 100</td>
                                   <td  >-    </td>
                                   <td class="bn-font"  > 48.00</td>
                               </tr>
                                                <tr>
                                   <td >1665812791828</td>
                                   <td >Beverages</td>
                                   <td >Pepsi</td>
                                   <td class="bn-font"> 52</td>
                                   <td class="bn-font"> 60</td>
                                   <td  >-    </td>
                                   <td class="bn-font"  > 120.00</td>
                               </tr>
                                                <tr>
                                   <td >1665812854884</td>
                                   <td >Beverages</td>
                                   <td >Sprite</td>
                                   <td class="bn-font"> 58</td>
                                   <td class="bn-font"> 70</td>
                                   <td  >-    </td>
                                   <td class="bn-font"  > 96.00</td>
                               </tr>
                                                <tr>
                                   <td >1665812949882</td>
                                   <td >Beverages</td>
                                   <td >Nestle Nescafe Classic Instant Coffee Jar 25 gm</td>
                                   <td class="bn-font"> 80</td>
                                   <td class="bn-font"> 90</td>
                                   <td  >-    </td>
                                   <td class="bn-font"  > 48.00</td>
                               </tr>
                                                <tr>
                                   <td >1665813026943</td>
                                   <td >Beverages</td>
                                   <td >Tang Orange Instant Drink Powder 500gm</td>
                                   <td class="bn-font"> 300</td>
                                   <td class="bn-font"> 330</td>
                                   <td  >-    </td>
                                   <td class="bn-font"  > 23.00</td>
                               </tr>
                                                <tr>
                                   <td >1665813090846</td>
                                   <td >Beverages</td>
                                   <td >Ovaltine Malted Chocolate Drink Jar 400gm</td>
                                   <td class="bn-font"> 295</td>
                                   <td class="bn-font"> 325</td>
                                   <td  >-    </td>
                                   <td class="bn-font"  > 28.00</td>
                               </tr>
                                                <tr>
                                   <td >796648174158</td>
                                   <td ></td>
                                   <td >حليب المراعي 1 لتر</td>
                                   <td class="bn-font"> 10.5</td>
                                   <td class="bn-font"> 11</td>
                                   <td  >-    </td>
                                   <td class="bn-font"  > -49.00</td>
                               </tr>
                                                <tr>
                                   <td >2020</td>
                                   <td ></td>
                                   <td >جبنة المراعي 500 غ</td>
                                   <td class="bn-font"> 20</td>
                                   <td class="bn-font"> 25</td>
                                   <td  >-    </td>
                                   <td class="bn-font"  > -3.00</td>
                               </tr>
                                                <tr>
                                   <td >5000159376792</td>
                                   <td >Beverages</td>
                                   <td >سكيتاز 38  غ حبة</td>
                                   <td class="bn-font"> 2.5</td>
                                   <td class="bn-font"> 3</td>
                                   <td  >9  Dozen   1 Piece </td>
                                   <td class="bn-font"  > 109.00</td>
                               </tr>
                                                <tr>
                                   <td >1676808629859</td>
                                   <td >Oil</td>
                                   <td >মিয়াজাকি</td>
                                   <td class="bn-font"> 200</td>
                                   <td class="bn-font"> 500</td>
                                   <td  >83    2 Piece </td>
                                   <td class="bn-font"  > 998.00</td>
                               </tr>
                                                <tr>
                                   <td >1677233631214</td>
                                   <td >Spices</td>
                                   <td >Vbh</td>
                                   <td class="bn-font"> 12</td>
                                   <td class="bn-font"> 11</td>
                                   <td  >4    2  </td>
                                   <td class="bn-font"  > 50.00</td>
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