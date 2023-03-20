<!Doctype html>
<html>
<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
        <div class="container-fluid">
				   <div class="container mt-4"> <div class="row">
                     <div class="col-lg-10 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;"> Dashboard   <i class="fa fa-angle-right"></i> User Account</h5>
                     </div>
                     <div class="col-lg-2 col-sm-12 col-md-3" >
                        <a  class="btn btn-primary" href="list_user.php" role="button"  style="width:auto;  margin-top: 5px; margin-left:0px; text-align: center; color: white; font-weight: normal; font-size: 16px; font-family: serif;"><i class="fa fa-folder" style="color: white;"></i>&nbsp; User List</a>
                     </div>
                  </div> <hr>
 
<div class="card mb-4">
   <div class="card-header">
   
    <!-- <div class="row">
      <div class="col-md-9 my-auto">
    Dashboard <i class="fa fa-angle-right"></i> User Account      </div>
      <div class="col-md-3 text-right">
         <a href="list_user.php" class="btn btn-primary"> <i class="fa fa-folder-open"></i>  User List</a>
      </div>
   </div>
   </div> -->
   
   <div class="mt-3 card-body" style="font-size: 20px;">
 <form name="frmUser" method="post" action="" enctype="multipart/form-data" >
         <div class="form-row">
            <div class="form-group col-md-4">
               <label for="inputEmail4">Name</label>
               <input type="text" class="form-control" required  name="fullname" >
            </div>     
		 
            <div class="form-group col-md-4">
               <label for="inputCity">Email</label>
               <input type="email" class="form-control" name="email" id="email" >
			    <span id="availability"></span>
            </div>
		          
	 
			<div class="form-group col-md-2">
               <label for="inputAddress2">Password</label>
               <input type="password" class="form-control" name="password" >
            </div>
            <div class="form-group col-md-2">
               <label for="inputAddress2">User Role</label>
				<select id="inputState" class="form-control" name="role" >
                  <option>----</option>
						<option value="0">Admin</option> 
						<option value="1">Manager</option> 
						<option value="2">Sales</option> 
						<option value="3">Warehouse</option> 
                </select>
            </div>
			
			   <div class="form-group col-md-4">
               <label for="inputEmail4">Photo</label>
               <input class="form-control" type="file" name="photo"  >
            </div>
         </div>
         <hr>
         <input style="font-size: 20px;" type="submit" name="submit" value="Save" id="register" class="btn btn-primary ">
         <button style="font-size: 20px;" type="reset" class="btn btn-secondary">Reset</button>
      </form>
   </div>
</div>
            
        </div>
        <?php include("script.php") ?>
	  
        <script>
 
 $(document).ready(function(){  
   $('#email').blur(function(){
     var email = $(this).val();
     $.ajax({
      url:'ajax_check.php',
      method:"POST",
      data:{email:email},
      success:function(data)
      {
       if(data != '0')
       {
        $('#availability').html('<span class="text-danger"> Already Exsist</span>');
        $('#register').attr("disabled", true);
       }
       else
       {
        $('#availability').html('<span class="text-success"></span>');
        $('#register').attr("disabled", false);
       }
      }
     })
  });
 });  
</script>
    </body>
</html>