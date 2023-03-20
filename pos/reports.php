<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
        <div class="container-fluid">
				   <style>
	
	.itineraryPanelItem, .itineraryPanel { 
	display: none; 
	}


	.caret {
	  cursor: pointer;
	  -webkit-user-select: none; /* Safari 3.1+ */
	  -moz-user-select: none; /* Firefox 2+ */
	  -ms-user-select: none; /* IE 10+ */
	  user-select: none;
	}

	.caret::before {
	  content: "\25B6";
	  color: black;
	  display: inline-block;
	  margin-right: 6px;
	}

	.caret-down::before {
	  -ms-transform: rotate(90deg); /* IE 9 */
	  -webkit-transform: rotate(90deg); /* Safari */'
	  transform: rotate(90deg);  
	}

	.nested {
	  display: none;
	}

	.active {
	  display: block;
	}
	
	.tree-title {
		list-style-type: none;
		font-weight: 500;
		color: darkblue;
		line-height: 30px;
	}	
	
	.tree-items {
	margin-left: 26px;
    font-weight: 500;
    font-size: 13px;
	line-height: 25px;
	}

  .putin{
    margin-top:-34px; 
    padding-right: 15px;
    
  }
  .tarek{
    color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;
  }

	</style>
	<div class="container mt-4">
 
<div class="row">
<div class="col-lg-3">
  <div class="card mb-4">
    <div class="card-header" style="color:#3f51b5; font-weight: normal;  font-size: 14px; font-weight: bold;">
        List of Reports    </div>
    <div class="card-body">

       
      <li class="tree-title">
      
       <span class="caret putin"> </span>  Purchase Report 
        <ul class="nested list-inline " >
          <li class="tree-items col-sm-12 col-lg-12" ><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#1" href="javascript:void(0)">Purchase Invoice</a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;;" data-href="#2" href="javascript:void(0)"> Purchase Product</a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#9" href="javascript:void(0)"> Category Wise Purchase</a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#10" href="javascript:void(0)"> Product Wise Purchase </a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#3" href="javascript:void(0)"> Purchase Summary  </a></li>
        </ul>
      </li>
     <li class="tree-title">
     <span class="caret putin"> </span> Sales Report 
        <ul class="nested list-inline">
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#4" href="javascript:void(0)">Sales Invoice</a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#5" href="javascript:void(0)"> Sales Product</a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#7" href="javascript:void(0)"> Category Wise Sales</a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#8" href="javascript:void(0)"> Product Wise Sales</a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#6" href="javascript:void(0)"> Sales Summary</a></li>
        </ul>
      </li>
 
      <li class="tree-title"><span class="caret putin"></span> Stock Report
        <ul class="nested list-inline">
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#38" href="javascript:void(0)">Overall Stock</a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#20" href="javascript:void(0)"> Category Stock </a></li>
		      <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" href="preview_overall_stock_low.php"> Low Stock </a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#39" href="javascript:void(0)">  Product Ledger </a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#25" href="javascript:void(0)"> Damage/Lost Report </a></li>

        </ul>
      </li>
      <li class="tree-title"><span class="caret putin"></span> Payment Report
        <ul class="nested list-inline">
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#16" href="javascript:void(0)"> Customer Payment Receive</a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#17" href="javascript:void(0)"> Supplier Payment Report </a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#18" href="javascript:void(0)"> Staff Salary Payment </a></li>
        </ul>
      </li>
      <li class="tree-title"><span class="caret putin"></span> General Transaction
        <ul class="nested list-inline">
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#22" href="javascript:void(0)"> Transaction Report</a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#23" href="javascript:void(0)"> Category Wise Transaction </a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#24" href="javascript:void(0)"> Transaction Summary </a></li>
        </ul>
      </li>
      <li class="tree-title"><span class="caret putin"></span> Customer Report
        <ul class="nested list-inline">
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#27" href="javascript:void(0)">Customer Invoices</a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#28" href="javascript:void(0)"> Customer Purchased Product </a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#29" href="javascript:void(0)"> Customer Ledger </a></li>
        </ul>
      </li>
      <li class="tree-title"><span class="caret putin"></span> Supplier Report
        <ul class="nested list-inline">
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#30" href="javascript:void(0)"> Supplier Invoices</a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#31" href="javascript:void(0)"> Supplier Sales Product </a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#32" href="javascript:void(0)"> Supplier Ledger </a></li>
        </ul>
      </li>
      <li class="tree-title"><span class="caret putin"></span> Staff Report
        <ul class="nested list-inline">
			<li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#21" href="javascript:void(0)">Staff Wise Salary Report </li>
			<li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#34" href="javascript:void(0)"> Salesman Wise Report </a></li>
			<li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#33" href="javascript:void(0)"> User Wise Sales Report </a></li>
			<li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#8004" href="javascript:void(0)">Employee Attendance Report</a></li>
			<li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#8005" href="javascript:void(0)">Individual Employee Attendance Report</a></li>
        </ul>
      </li>
      <li class="tree-title"><span class="caret putin"></span> Profit Report
        <ul class="nested list-inline">
          <li class="tree-items col-sm-12 col-lg-12 "><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#11" href="javascript:void(0)">Invoice Wise Profit</a></li>
          <li class="tree-items col-sm-12 col-lg-12 "><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#12" href="javascript:void(0)">Product Wise Profit </a></li>
          <li class="tree-items col-sm-12 col-lg-12 "><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#101" href="javascript:void(0)">Net Profit </a></li>
        </ul>
      </li>
	  <li class="tree-title"><span class="caret putin"></span> Account Report
        <ul class="nested list-inline">
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" href="preview_customer_dues.php">Customer Dues </a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" href="preview_supplier_balance.php">Supplier Balance </a></li>
          <li class="tree-items col-sm-12 col-lg-12 "><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" href="preview_staff_balance.php"> Staff Balance </a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#36" href="javascript:void(0)"> Cash Ledger </a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#100" href="javascript:void(0)"> All Transaction Summary </a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#37" href="javascript:void(0)"> Account Wise Transaction </a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" href="preview_account_balance.php"> Account Balance </a></li>
        </ul>
      </li>
		<li class="tree-title"><span class="caret putin"></span> Analysis Report
		<ul class="nested list-inline">
		<li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#440" href="javascript:void(0)">Top Sales  </li>
		<li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#41" href="preview_push_sale.php"> Push Sales </a></li>
		<li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#441" href="javascript:void(0)" >  Top Customer</a></li>
			</ul>
		</li>
	  
	  <li class="tree-title"><span class="caret putin"></span> Courier Report
        <ul class="nested list-inline">
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" href="preview_courier_dues.php">Courier Dues </a></li>
          <!-- <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" href="preview_supplier_balance.php">Supplier Balance </a></li>
          <li class="tree-items col-sm-12 col-lg-12 "><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" href="preview_staff_balance.php"> Staff Balance </a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#36" href="javascript:void(0)"> Cash Ledger </a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#100" href="javascript:void(0)"> All Transaction Summary </a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" data-href="#37" href="javascript:void(0)"> Account Wise Transaction </a></li>
          <li class="tree-items col-sm-12 col-lg-12"><a style="color:#0078d7; font-weight: normal;  font-size: 14px; font-weight: bold;" href="preview_account_balance.php"> Account Balance </a></li> -->
        </ul>
      </li>
    </div>
  </div>
</div>
<div class="col-lg-9 col-sm-12">
  <div class="card mb-0">
   <div class="card-header" style="color:#3f51b5; font-weight: normal;  font-size: 14px; font-weight: bold;">
   Report Range    </div>
    <div class="card-body">
      <div class="itineraryPanel">
        <div id="1" class="itineraryPanelItem">
        <form method="get" action="preview_date_purchase_invoice.php">
        <div class="row">
          <div class="col-sm-3">
            <div class="form-group">
              <label class="control-label"> From</label>
              <input type="date" name="d1" required class="form-control" />
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label class="control-label"> To</label>
              <input type="date" name="d2" required class="form-control" />
            </div>
          </div>
        </div>
        <hr>
        <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i>  Print</button>
		 </form>
        </div>
        <div id="2" class="itineraryPanelItem">
        <form method="get" action="preview_date_purchase_product.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i>  Print</button>
        </form>
      </div>
      <div id="3" class="itineraryPanelItem">
        <form method="get" action="preview_purchase_summary.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i> Print</button>
        </form>
      </div>
      <div id="4" class="itineraryPanelItem">
        <form method="get" action="preview_date_sales_invoice.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i> Print</button>
        </form>
      </div>
      <div id="5" class="itineraryPanelItem">
        <form method="get" action="preview_date_sales_product.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i> Print</button>
        </form>
      </div>
      <div id="6" class="itineraryPanelItem">
        <form method="get" action="preview_sales_summary.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i> Print</button>
        </form>
      </div>    
	  
	  
	  <div id="440" class="itineraryPanelItem">
        <form method="get" action="preview_top_sale.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i> Print</button>
        </form>
      </div>	
	  
	  <div id="441" class="itineraryPanelItem">
        <form method="get" action="preview_top_cusomter.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i> Print</button>
        </form>
      </div>
	  
	  
      <div id="7" class="itineraryPanelItem">
        <form method="get" action="preview_sales_selected_category.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> Select Category</label>
                <select type="text" class="js-select2"   name="category"  requaid>
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
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i> Print</button>
        </form>
      </div>
      <div id="8" class="itineraryPanelItem">
        <form method="get" action="preview_sales_selected_product.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> Select Product</label>
                <select type="text" class="js-select2"   name="product_name"  requaid>
                  <option>----</option>
                                    <option value="1" data-id="Chashi Aromatic Chinigura Rice">1665670585593/Chashi Aromatic Chinigura Rice</option>
                                    <option value="2" data-id="Miniket">1665670756537/Miniket</option>
                                    <option value="3" data-id="Teer Fortified Soyabean Oil">1665670813748/Teer Fortified Soyabean Oil</option>
                                    <option value="4" data-id="Fresh Fortified Soyabean Oil">1665670914389/Fresh Fortified Soyabean Oil</option>
                                    <option value="5" data-id="Radhuni Chilli (Morich) Powder 200 gm">1665670982377/Radhuni Chilli (Morich) Powder 200 gm</option>
                                    <option value="6" data-id="Radhuni Turmeric (Holud) Powder 200 gm">1665671067497/Radhuni Turmeric (Holud) Powder 200 gm</option>
                                    <option value="7" data-id="Radhuni Cumin (Jira) Powder 100 gm">1665671127397/Radhuni Cumin (Jira) Powder 100 gm</option>
                                    <option value="9" data-id="Pran Mug Dal 500 gm">1665671292147/Pran Mug Dal 500 gm</option>
                                    <option value="10" data-id="Fresh Refined Sugar">1665671389017/Fresh Refined Sugar</option>
                                    <option value="11" data-id="ACI Pure Salt">1665671495631/ACI Pure Salt</option>
                                    <option value="12" data-id="Teer Sugar 1 kg">1665812058366/Teer Sugar 1 kg</option>
                                    <option value="13" data-id="Pran Iodized Salt">1665812277171/Pran Iodized Salt</option>
                                    <option value="14" data-id="Ispahani Mirzapore Best Leaf Tea 400 gm">1665812335319/Ispahani Mirzapore Best Leaf Tea 400 gm</option>
                                    <option value="15" data-id="Brooke Bond Taaza Black Tea 200gm">1665812696131/Brooke Bond Taaza Black Tea 200gm</option>
                                    <option value="16" data-id="Pepsi">1665812791828/Pepsi</option>
                                    <option value="17" data-id="Sprite">1665812854884/Sprite</option>
                                    <option value="18" data-id="Nestle Nescafe Classic Instant Coffee Jar 25 gm">1665812949882/Nestle Nescafe Classic Instant Coffee Jar 25 gm</option>
                                    <option value="19" data-id="Tang Orange Instant Drink Powder 500gm">1665813026943/Tang Orange Instant Drink Powder 500gm</option>
                                    <option value="20" data-id="Ovaltine Malted Chocolate Drink Jar 400gm">1665813090846/Ovaltine Malted Chocolate Drink Jar 400gm</option>
                                    <option value="67" data-id="حليب المراعي 1 لتر">796648174158/حليب المراعي 1 لتر</option>
                                    <option value="98" data-id="سكيتاز 38  غ حبة">5000159376792/سكيتاز 38  غ حبة</option>
                                    <option value="99" data-id="মিয়াজাকি">1676808629859/মিয়াজাকি</option>
                                    <option value="100" data-id="Vbh">1677233631214/Vbh</option>
                                  </select>
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i> Print</button>
        </form>
      </div>
	  
	    <div id="39" class="itineraryPanelItem">
        <form method="get" action="preview_product_ledger.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label class="control-label"> Select Product</label>
                <select type="text" class="js-select2"   name="product_name"  requaid>
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
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i> Print</button>
        </form>
      </div>
	  
	  
      <div id="9" class="itineraryPanelItem">
        <form method="get" action="preview_purchase_selected_category.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> Select Category</label>
                <select type="text" class="js-select2"   name="category"  requaid>
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
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i> Print</button>
        </form>
      </div>
      <div id="10" class="itineraryPanelItem">
        <form method="get" action="preview_purchase_selected_product.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> Select Product</label>
                <select type="text" class="js-select2"   name="product_name"  requaid>
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
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i> Print</button>
        </form>
      </div>
      <div id="11" class="itineraryPanelItem">
        <form method="get" action="preview_date_invoice_profit.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i> Print</button>
        </form>
      </div>
	  
	        <div id="38" class="itineraryPanelItem">
        <form method="get" action="preview_overall_stock.php">
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label"> Stock Up To</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i> Print</button>
        </form>
      </div>
      <div id="12" class="itineraryPanelItem">
        <form method="get" action="preview_date_product_profit.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i> Print</button>
        </form>
      </div>
      <div id="13" class="itineraryPanelItem">
        <form method="get" action="preview_date_service_order.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"> </i> Print </button>
        </form>
      </div>
      <div id="15" class="itineraryPanelItem">
        <form method="get" action="preview_supplier_balance.php">
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"> </i> Print </button>
        </form>
      </div>
      <div id="16" class="itineraryPanelItem">
        <form method="get" action="preview_customer_payment_report.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i> Print</button>
        </form>
      </div>
      <div id="17" class="itineraryPanelItem">
        <form method="get" action="preview_supplier_payment_report.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i> Print</button>
        </form>
      </div>
      <div id="18" class="itineraryPanelItem">
        <form method="get" action="preview_staff_salary_report.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i> Print</button>
        </form>
      </div>
 
 
      <div id="20" class="itineraryPanelItem">
        <form method="get" action="preview_category_stock.php">
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label"> Select Category</label>
                <select type="text" class="js-select2"   name="category"  requaid>
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
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"> </i> Print </button>
        </form>
      </div>
      <div id="21" class="itineraryPanelItem">
        <form method="get" action="preview_staff_salary_selected.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label"> Select Staff</label>
                <select type="text" class="js-select2"   name="name"  requaid>
                  <option>----</option>
                                    <option value="1">Admin</option>
                                    <option value="136">limon</option>
                                    <option value="139">ofline</option>
                                  </select>
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"> </i> Print </button>
        </form>
      </div>
      <div id="22" class="itineraryPanelItem">
        <form method="get" action="preview_transaction_report.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label">To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i> Print</button>
        </form>
      </div>
      <div id="33" class="itineraryPanelItem">
        <form method="get" action="preview_date_sales_invoice_staff.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label"> User</label>
              <select type="text" class="js-select2"   name="name"  requaid>
                  <option>----</option>
                                    <option value="1">Admin</option>
                                    <option value="136">limon</option>
                                    <option value="139">ofline</option>
                                  </select>
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"> </i> Print </button>
        </form>
      </div>
      <div id="34" class="itineraryPanelItem">
        <form method="get" action="preview_salesman_invoice_report.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label class="control-label"> Select Staff</label>
                <select type="text" class="js-select2"   name="name"  requaid>
                  <option>----</option>
                                    <option value="1" >Hannan Farid</option>
                                    <option value="2" >ANISUR RAHMAN</option>
                                  </select>
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"> </i> Print </button>
        </form>
      </div>
	  <div id="8004" class="itineraryPanelItem">
        <form method="get" action="preview_date_attendance.php">
        <div class="row">
          <div class="col-sm-3">
            <div class="form-group">
              <label class="control-label"> From</label>
              <input type="date" name="d1" required class="form-control" />
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label class="control-label"> To</label>
              <input type="date" name="d2" required class="form-control" />
            </div>
          </div>
        </div>
        <hr>
        <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i> Print</button>
		 </form>
        </div>
		
		<div id="8005" class="itineraryPanelItem">
        <form method="get" action="preview_date_attendance_individual.php">
        <div class="row">
          <div class="col-sm-3">
            <div class="form-group">
              <label class="control-label"> From</label>
              <input type="date" name="d1" required class="form-control" />
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label class="control-label"> To</label>
              <input type="date" name="d2" required class="form-control" />
            </div>
          </div>
		  <div class="form-group col-md-4">
               <label for="inputexpire4">Staff ID</label>
               <select name="id" class="form-control js-select2"  >
                <option >---</option>
								<option value="1">Hannan Farid/Manager</option>
								<option value="2">ANISUR RAHMAN/Sales Man</option>
				              </select>
            </div>
        </div>
        <hr>
        <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i> Print</button>
		 </form>
        </div>
	  
	  
	  
      <div id="35" class="itineraryPanelItem">
        <form method="get" action="preview_transaction_report.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label">To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i> Print</button>
        </form>
      </div>
      <div id="23" class="itineraryPanelItem">
        <form method="get" action="preview_transaction_category_report.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label">To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label>Category: </label>
                <select type="text" class="form-control" name="category" requaid>
                  <option>----</option>
                                    <option value="1">Current Bill</option>
                                    <option value="2">Wifi Bill</option>
                                    <option value="3">Bank Transaction</option>
                                    <option value="4">Daily Expense</option>
                                    <option value="17">test1</option>
                                  </select>
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i>  Print </button>
        </form>
      </div>
      <div id="24" class="itineraryPanelItem">
        <form method="get" action="preview_transaction_summary_report.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label">To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i>  Print </button>
        </form>
      </div>
      <div id="25" class="itineraryPanelItem">
        <form method="get" action="preview_damage_report_date.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label">To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i> Print</button>
        </form>
      </div>
      <div id="26" class="itineraryPanelItem">
        <form method="get" action="preview_customer_dues.php">
          <div class="row"> </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"> </i> Print </button>
        </form>
      </div>
      <div id="27" class="itineraryPanelItem">
        <form method="get" action="preview_date_sales_invoice_customer.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> Fullname</label>
                <select class="js-select2"  name="customer_id"  required>
                  <option value=""> Select Customer </option>
                  <option data-fullname='Md Abdullah Al Mamun' data-mobile='01777615690' data-address='Basurhat, Companygonj, Noakhali' value='1'> 1-Md Abdullah Al Mamun </option><option data-fullname='Md. Shafiul Ahsan' data-mobile='01780000000' data-address='Nagar Bhavan, Dhaka
Dhaka
Dhaka' value='2'> 2-Md. Shafiul Ahsan </option><option data-fullname='Tapan Chakma' data-mobile='01710000000' data-address='Rangamti Hill District' value='3'> 3-Tapan Chakma </option><option data-fullname='Md. Shaharul Islam' data-mobile='01773130190' data-address='' value='23'> 4-Md. Shaharul Islam </option>                </select>
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i>  Print</button>
        </form>
      </div>
      <div id="28" class="itineraryPanelItem">
        <form method="get" action="preview_date_sales_product_customer.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> Fullname</label>
                <select class="js-select2"  name="customer_id"  required>
                  <option value=""> Select Customer </option>
                  <option data-fullname='Md Abdullah Al Mamun' data-mobile='01777615690' data-address='Basurhat, Companygonj, Noakhali' value='1'> 1-Md Abdullah Al Mamun </option><option data-fullname='Md. Shafiul Ahsan' data-mobile='01780000000' data-address='Nagar Bhavan, Dhaka
Dhaka
Dhaka' value='2'> 2-Md. Shafiul Ahsan </option><option data-fullname='Tapan Chakma' data-mobile='01710000000' data-address='Rangamti Hill District' value='3'> 3-Tapan Chakma </option><option data-fullname='Md. Shaharul Islam' data-mobile='01773130190' data-address='' value='23'> 4-Md. Shaharul Islam </option>                </select>
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i>  Print</button>
        </form>
      </div>
      <div id="29" class="itineraryPanelItem">
        <form method="get" action="preview_customer_ledger.php">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label class="control-label"> Fullname</label>
                <select class="js-select2"  name="customer_id"  required>
                  <option value=""> Select Customer </option>
                  <option data-fullname='Md Abdullah Al Mamun' data-mobile='01777615690' data-address='Basurhat, Companygonj, Noakhali' value='1'> 1-Md Abdullah Al Mamun </option><option data-fullname='Md. Shafiul Ahsan' data-mobile='01780000000' data-address='Nagar Bhavan, Dhaka
Dhaka
Dhaka' value='2'> 2-Md. Shafiul Ahsan </option><option data-fullname='Tapan Chakma' data-mobile='01710000000' data-address='Rangamti Hill District' value='3'> 3-Tapan Chakma </option><option data-fullname='Md. Shaharul Islam' data-mobile='01773130190' data-address='' value='23'> 4-Md. Shaharul Islam </option>                </select>
              </div>
            </div>
			
			            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
			
			
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i>  Print</button>
        </form>
      </div>
      <div id="30" class="itineraryPanelItem">
        <form method="get" action="preview_purchase_invoice_supplier.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> Fullname</label>
                <select class="js-select2"  name="supplier_id"  required>
                  <option value=""> Select Supplier </option>
                  <option    value='1'> Teer </option><option    value='2'> Fresh </option><option    value='3'> Pran </option><option    value='4'> Square </option><option    value='22'> Almarai  </option>                </select>
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i>  Print</button>
        </form>
      </div>
      <div id="31" class="itineraryPanelItem">
        <form method="get" action="preview_date_purchase_product_supplier.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> Fullname</label>
                <select class="js-select2"  name="supplier_id"  required>
                  <option value=""> Select Supplier </option>
                  <option    value='1'> Teer </option><option    value='2'> Fresh </option><option    value='3'> Pran </option><option    value='4'> Square </option><option    value='22'> Almarai  </option>                </select>
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i>  Print</button>
        </form>
      </div>
      <div id="32" class="itineraryPanelItem">
        <form method="get" action="preview_supplier_ledger.php">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label class="control-label"> Fullname</label>
                <select class="js-select2"  name="supplier_id"  required>
                  <option value=""> Select Supplier </option>
                  <option    value='1'> Teer </option><option    value='2'> Fresh </option><option    value='3'> Pran </option><option    value='4'> Square </option><option    value='22'> Almarai  </option>                </select>
              </div>
            </div>
			
			   <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
			
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i>  Print</button>
        </form>
      </div>
      <div id="36" class="itineraryPanelItem">
        <form method="get" action="preview_cash_ledger.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i>  Print</button>
        </form>
      </div>     
	  
	  <div id="37" class="itineraryPanelItem">
        <form method="get" action="preview_account_transaction.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i>  Print</button>
        </form>
      </div>	  
	  
	  <div id="100" class="itineraryPanelItem">
        <form method="get" action="preview_all_transaction_summary.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i>  Print</button>
        </form>
      </div>	 
	  
	  <div id="101" class="itineraryPanelItem">
        <form method="get" action="preview_profit_net.php">
          <div class="row">
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> From</label>
                <input type="date" name="d1" required class="form-control" />
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label class="control-label"> To</label>
                <input type="date" name="d2" required class="form-control" />
              </div>
            </div>
          </div>
          <hr>
          <button type="submit"  class="btn btn-primary" ><i class="fa fa-print"></i>  Print</button>
        </form>
      </div>
    
    </div>
  </div>
  
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
$(function(){
	$(".list-inline a").click(function(){
		hrefId = $(this).data('href');
    $('.itineraryPanelItem').slideUp();
		if($(hrefId).is(':visible')){
    	$(hrefId).slideUp();
    }else{
  	  $('.itineraryPanel').show();
    	$(hrefId).slideDown();
    }    
  });
});	

var toggler = document.getElementsByClassName("caret");
var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}

</script>
            
        </div>
        <?php include("script.php") ?>
	  
	
    </body>
</html>