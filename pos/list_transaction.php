<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
        <div class="container-fluid">
				      
   
                      <div class="container">
                     <div class="mt-4 page-title mb-2">
                        <div class="row">
                           <div class="col-lg-8 col-sm-12 my-auto">
                  
                           <h5 style="color: #3f5eb5;  text-align: left;"> Dashboard <i class="fa fa-angle-right"></i>   All Transactions</h5>
                           </div>
                           <div class="col-lg-4 col-sm-12  text-right">
                     
                                       <a href="add_transaction.php" class="btn btn-primary"> <i class="fa fa-plus-square "></i> Transaction Entry</a>
                           </div> 
                        </div>
                     </div>
                  
                     <div class="card mb-4">
                        <div class="card-body">
                        
                     <input type="text" id="Search" onkeyup="myFunction()" class="form-control"  placeholder="Search....."  > <hr>
                  <br>
                   
                           <div class="row">
                                                         
                                        <div class="col-lg-4 col-sm-12">
                                          <a href="list_transaction_category.php?category=Bank Transaction" style="color: black; font-size:20px;   font-weight: normal;" > <i class="fa fa-folder-open text-primary"></i> Bank Transaction  <samp class="text-danger"> (2) </samp> </a>
                                          </div>
                                                          
                                        <div class="col-lg-4 col-sm-12">
                                          <a href="list_transaction_category.php?category=Current Bill" style="color: black; font-size:20px;   font-weight: normal;" > <i class="fa fa-folder-open text-primary"></i> Current Bill  <samp class="text-danger"> (1) </samp> </a>
                                          </div>
                                                          
                                        <div class="col-lg-4 col-sm-12">
                                          <a href="list_transaction_category.php?category=Wifi Bill" style="color: black; font-size:20px;   font-weight: normal;" > <i class="fa fa-folder-open text-primary"></i> Wifi Bill  <samp class="text-danger"> (1) </samp> </a>
                                          </div>
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
            
        </div>
        <?php include("script.php") ?>
	  
	
    </body>
</html>