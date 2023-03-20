<!Doctype html>
<html>
<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
        <div class="container-fluid">
        <div class="row">
                     <div class="col-lg-8 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;"> User  <i class="fa fa-angle-right"></i>  User List </h5>
                     </div>
                     <div class="col-lg-4 col-sm-6 col-md-3" >
                     <input type="text" id="Search" onkeyup="myFunction()" class="form-control"  placeholder=" Search ..."  > 
                     </div>
                     
                  </div> <hr> 
         
				    
                    <div class="mt-4 page-title mb-2">
                       <!-- <div class="row">
                          <div class="col-md-9 title">
                             User <i class="fa fa-angle-right"></i> User List		 
                             
                          </div>
                          <div class="col-md-3">
                             <input type="text" id="Search" onkeyup="myFunction()" class="form-control"  placeholder=" Search ..."  > 
                          </div>
                       </div>
                    </div> -->
                    <div class="row" style="font-size:17px;">
                        <div class="col-lg-6 col-sm-12">
                          <div class="card mb-4">
                             <div class="card-body">
                             <img src="assets/images/user_list_logo.png" height="80" onError="this.onerror=null;this.src='../assets/img/logo.png';" style="float: left;padding-right: 30px; ">
                                <i class="fa fa-user text-info"></i> Admin <br>
                                <i class="fa fa-th text-info"></i> 
                   
                                Admin 
                 
                 
                 
                                <br>
                                <i class="fa fa-envelope text-info"></i> en@epos.com  <br><i class="fa fa-mobile text-info"></i> 1976185920 
                                 <samp class="text-danger" style="float: right;font-weight: bold;">     
                                 <a href="edit_user.php?id=1" class=""> <i class="fa fa-edit text-success" style="font-size:25px;">  </i>  </a>
                                 
                                 <a href="user_credentials.php?id=1" class=""> <i class="fa fa-key text-info" style="font-size:25px;">  </i>  </a>
                                 
                                 <a style="display:none" href="delete_user.php?id=1" class="" >  <i class="fa fa-trash text-danger "> </i>  </i>  </a>
                      
                                 </samp>  
                             </div>
                          </div>
                       </div>
                             
                             <div class="col-lg-6 col-sm-12">
                          <div class="card mb-4">
                             <div class="card-body">
                             <img src="assets/images/user_list_logo.png" height="80" onError="this.onerror=null;this.src='../assets/img/logo.png';" style="float: left;padding-right: 30px; ">
                                <i class="fa fa-user text-info"></i> ofline <br>
                                <i class="fa fa-th text-info"></i> 
                   
                                Sales 
                 
                 
                 
                                <br>
                                <i class="fa fa-envelope text-info"></i> ens@epos.com  <br><i class="fa fa-mobile text-info"></i> 0 
                                 <samp class="text-danger" style="float: right;font-weight: bold;">     
                                 <a href="edit_user.php?id=139" class=""> <i class="fa fa-edit text-success"style="font-size:25px;">  </i>  </a>
                                 <a href="user_credentials.php?id=139" class=""> <i class="fa fa-key text-info"style="font-size:25px;">  </i>  </a>
                                 <a style="display:" href="delete_user.php?id=139" class="" >  <i class="fa fa-trash text-danger "style="font-size:25px;"> </i>  </i>  </a>
                      
                                 </samp>  
                             </div>
                          </div>
                       </div>
                          </div>
                 </div>
                 <script>
                    function myFunction() {
                     var input = document.getElementById("Search");
                     var filter = input.value.toLowerCase();
                     var nodes = document.getElementsByClassName('col-md-6');
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