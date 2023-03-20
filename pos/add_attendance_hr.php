<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
        <div class="container-fluid">
        <div class=" row mx-3">
                     <div class="col-lg-10 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;">Staff Attandance  <i class="fa fa-angle-right"></i>   Add Attandance </h5>
                     </div>
                   
                     <div class="col-lg-2 col-sm-12 col-md-6 text-right">
 
                     <a href="list_attendance_hr.php" class="btn btn-primary"> <i class="fa fa-folder-open"></i> Attandance List</a>
      </div>
        </div> 
        
        <hr> 
				   
                   <div class="mt-4 card mb-4">
                    <!-- <div class=" card-header">
                     <div class="row">
                       <div class="col-md-9 my-auto">
                         Staff Attandance <i class="fa fa-angle-right"></i>       Add Attandance      </div>
                       <div class="col-md-3 text-right">
                          <a href="list_attendance_hr.php" class="btn btn-primary"> <i class="fa fa-folder-open"></i> Attandance List</a>
                       </div>
                    </div>
                    </div> -->
                    
                    <div class="mt-3 card-body" style="font-size: 20px;">
                  <form name="frmUser" method="post" action="" enctype="multipart/form-data" >
                   <div class="card-body">
                     <div class="form-group row">
                       <label for="date" class="col-sm-1 col-form-label ">Date</label>
                       <div class="col-sm-3">
                         <input type="date" class="form-control is-valid" id="date" name="d_ate" value="2023-03-04" >
                       </div>
                     </div>
                     <hr>
                     <div class="row" style="font-size: 20px; color:black;">
                       <div class="col-md-2">
                         <label for="inputEmail4">Staff ID#</label>
                       </div>
                       <div class="col-md-3">
                         <label for="inputEmail4"> Staff Name </label>
                       </div>
                      
                       <div class="col-md-2">
                         <label for="inputEmail4"> Status </label>
                       </div>
                       <div class="col-md-2">
                         <label for="inputEmail4"> In </label>
                       </div>
                       <div class="col-md-2">
                         <label for="inputEmail4"> Out </label>
                       </div>
                     </div>
                     
                     <div class="row" style="margin-bottom: 5px;">
                       <div class="col-md-2">
                         <input type="text" class="form-control" readonly value="1" />
                         <input type="text" class="form-control" hidden  name="staff_id[]" required value="1" />
                       </div>
                       <div class="col-md-3">
                         <input type="text" class="form-control" readonly  required value=" Hannan Farid"  />
                       </div>
                       
                       <div class="col-md-2">
                         <select name="status[]"  class="js-select2" required  >
                           <option >-----</option>
                           <option value="Present">Present</option>
                           <option value="Absent">Absent</option>
                           <option value="Leave">Leave</option>
                         </select>
                       </div>
                       <div class="col-md-2">
                         <input class="form-control" type="time" name="i_n[]" >
                       </div>
                       <div class="col-md-2">
                         <input class="form-control" type="time" name="o_ut[]" >
                       </div>
                     </div>
                     
                     <div class="row" style="margin-bottom: 5px;">
                       <div class="col-md-2">
                         <input type="text" class="form-control" readonly value="2" />
                         <input type="text" class="form-control" hidden  name="staff_id[]" required value="2" />
                       </div>
                       <div class="col-md-3">
                         <input type="text" class="form-control" readonly  required value=" ANISUR RAHMAN"  />
                       </div>
                       
                       <div class="col-md-2">
                         <select name="status[]"  class="js-select2" required  >
                           <option >-----</option>
                           <option value="Present">Present</option>
                           <option value="Absent">Absent</option>
                           <option value="Leave">Leave</option>
                         </select>
                       </div>
                       <div class="col-md-2">
                         <input class="form-control" type="time" name="i_n[]" >
                       </div>
                       <div class="col-md-2">
                         <input class="form-control" type="time" name="o_ut[]" >
                       </div>
                     </div>
                       </div>
                          </div>
                         <div class="card-footer">
                          <input type="submit" name="submit" value="Save" id="register" class="btn btn-primary ">
                          <button type="reset" class="btn btn-secondary">Reset</button>
                       </form>
                    </div>
                 </div>
            
        </div>
        <?php include("script.php") ?>
	  
	
    </body>
</html>