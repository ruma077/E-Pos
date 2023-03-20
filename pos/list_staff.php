<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
        <div class="container-fluid">
        <div class=" row mx-3">
                     <div class="col-lg-10 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;">SStaff Profile  <i class="fa fa-angle-right"></i>  Staff's List </h5>
                     </div>
                   
                     <div class="col-lg-2 col-sm-12 col-md-6 text-right">
 
                     <a href="add_staff.php" class="btn btn-outline-primary">  <i class="fa fa-plus-square "></i>  Add Staff</a>
      </div>
        </div> 
        
        <hr> 
                    <div class="mt-4 mb-2 page-title">
                       <!-- <div class="row">
                          <div class="col-md-9 title">
                          Staff Profile <i class="fa fa-angle-right"></i> Staff's List	  </div>
                          <div class="col-md-3 text-right">
                             <a href="add_staff.php" class="btn btn-outline-primary">  <i class="fa fa-plus-square "></i>  Add Staff</a>
                          </div>
                       </div>
                    </div> -->
                    <div class="row">
                          <div class="col-lg-4 col-sm-12 col-md-6">
                          <div class="card m-b-30">
                             <div class="card-body row" style="padding: 15px 5px 1px 20px;">
                                <div class="col-4">
                                   <a href=""><img src="assets\images\photo2022-10-15-12-10-45_634a4ee536e7f.png" alt="" class="img-fluid rounded-circle w-120"></a>
                                </div>
                                <div class="col-8 card-title align-self-center mb-0" style="line-height: 20px;">
                                   <h3>Hannan Farid</h3>
                                   <p class="m-0" style="font-size:20px;">Manager</p>
                                </div>
                             </div>
                             <hr>
                             <ul class="ml-15" style="line-height: 20px; font-size:18px; " >
                                <li class="mb-1">NID: 7349834635  </li>
                                <li class="mb-1">Father's Name:     </li>
                                <li class="mb-1">Mother's Name:     </li>
                                <li class="mb-1 font-bn" > Joining Date: 30-11--0001  </li>
                               
                             </ul>
                             <hr>
                             <div class="card-body mb-0" style="padding: 0px 5px 1px 20px; font-size:20px;">
                                <i class="fa fa-map-marker" style="font-size: 25px"></i>   <br>
                                <i class="fa fa-envelope " style="font-size: 25px"></i>   <br>
                                <i class="fa fa-mobile " style="font-size: 25px"></i> 01719000000 
                             </div>
                             <div class="card-body mb-0" >
                                <div class="float-right btn-group btn-group-sm">
                                  
                                   <a href="edit_staff.php?id=1" class="btn btn-success tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit" style="font-size: 25px"></i> </a>
                                   <a href="delete_staff.php?id=1" class="btn btn-danger tooltips " data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-times" style="font-size: 25px"></i></a>
                                </div>
                             </div>
                          </div>
                       </div>                          
                       <div class="col-lg-4 col-sm-12 col-md-6">
                          <div class="card m-b-30">
                             <div class="card-body row" style="padding: 15px 5px 1px 20px;">
                                <div class="col-4">
                                   <a href=""><img src="assets\images\photo2022-10-15-12-10-45_634a4ee536e7f.png" alt="" class="img-fluid rounded-circle w-120"></a>
                                </div>
                                <div class="col-8 card-title align-self-center mb-0" style="line-height: 20px;">
                                   <h3>Hannan Farid</h3>
                                   <p class="m-0" style="font-size:20px;">Manager</p>
                                </div>
                             </div>
                             <hr>
                             <ul class="ml-15" style="line-height: 20px; font-size:18px; " >
                                <li class="mb-1">NID: 7349834635  </li>
                                <li class="mb-1">Father's Name:     </li>
                                <li class="mb-1">Mother's Name:     </li>
                                <li class="mb-1 font-bn" > Joining Date: 30-11--0001  </li>
                               
                             </ul>
                             <hr>
                             <div class="card-body mb-0" style="padding: 0px 5px 1px 20px; font-size:20px;">
                                <i class="fa fa-map-marker" style="font-size: 25px"></i>   <br>
                                <i class="fa fa-envelope " style="font-size: 25px"></i>   <br>
                                <i class="fa fa-mobile " style="font-size: 25px"></i> 01719000000 
                             </div>
                             <div class="card-body mb-0" >
                                <div class="float-right btn-group btn-group-sm">
                                  
                                   <a href="edit_staff.php?id=1" class="btn btn-success tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-edit" style="font-size: 25px"></i> </a>
                                   <a href="delete_staff.php?id=1" class="btn btn-danger tooltips " data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-times" style="font-size: 25px"></i></a>
                                </div>
                             </div>
                          </div>
                       </div>
                          
                       </div>
                    <script type="text/javascript">
                       $(function () {
                        $('[data-toggle="tooltip"]').tooltip()
                       })
                       
                    </script>
            
        </div>
        <?php include("script.php") ?>
	  
	
    </body>
</html>