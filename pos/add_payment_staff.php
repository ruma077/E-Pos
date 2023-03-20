<!DOCTYPE html>
</html><?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
        <div class="container-fluid">
				   

 
        <div class="row">
                     <div class="col-lg-9 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;">Staff Salary  <i class="fa fa-angle-right"></i>  Add Staff Salary</h5>
                     </div>
                   
                     <div class="col-lg-3 col-sm-12 col-md-6 ">
                        <a href="list_payment_staff.php" class="btn btn-primary " ><i class="fa fa-folder-open"></i>  Salary History</a> 
                     </div>
        </div> 
        
        <hr> 

 
                   <div class="card">
                     
                   
                      <div class="card-body">
                    
                         <form name="frmUser" method="post">
                   
                            <div class="form-group row">
                               <label for="inputPassword" class=" col-lg-2 col-sm-12 col-form-label"> Staff ID </label>
                               <div class=" col-lg-5 col-sm-12">
                                  <select  ID="name" class="form-select" onchange="myFunction()" name="staff_id" required autofocus>
                                     <option value="">----</option>
                                 <option data-balance='28000'  value='1'> Hannan Farid  </option><option data-balance='-200'  value='2'> ANISUR RAHMAN  </option>               </select>
                               </div>
                   
                               <label for="inputPassword" class=" col-lg-2 col-sm-12 col-form-label text-danger" style=" text-align: center;">   Balance </label>
                               <div class=" col-lg-3 col-sm-12">
                                  <input readonly id="balance" name="balance" class="form-control text-danger" tabindex="0"/>
                               </div>
                   
                            </div>
                   
                           <div class="form-group row">
                               <label for="inputPassword" class=" col-lg-2 col-sm-2 col-form-label">Add Monthly Salary </label></label>
                               <div class=" col-lg-4 col-sm-3">
                                  <input type="number" name="salary" class="form-control" />
                               </div>
                                <label for="inputPassword" class=" col-lg-6 col-sm-12 col-form-label text-danger">   Must enter once per month. No need to make repeated entries </label>
                           </div>
                               
                           <div class="form-group row">
                               <label for="inputPassword" class="col-sm-2 col-form-label"> Paid </label></label>
                               <div class="col-sm-3">
                                  <input type="number" name="paid" class="form-control" required />
                               </div>
                               
                   
                           </div>
                               
                   
                            <div class="form-group row">
                               <label for="inputPassword" class="col-sm-2 col-form-label"> Date </label></label>
                               <div class="col-sm-3">
                                  <input type="date" name="d_ate" value="2023-03-04" class="form-control" required />
                               </div>
                            </div>
                   
                            <div class="form-group row">
                               <label for="inputPassword" class="col-sm-2 col-form-label"> Mode </label></label>
                               <div class="col-sm-3">
                                 <select type="text" class="form-select"  name="account" requaid>
                                  <option>----</option>
                                           <option value="1">Cash</option>
                                           <option value="2">Islami Bank Ltd. Bangladesh</option>
                                           <option value="3">Nagad</option>
                                           <option value="4">Bkash</option>
                                           <option value="246">ebl</option>
                                       </select>
                               </div>
                            </div>
                   
                      </div>
                   
                      <div class="card-footer">
                      <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-save" style="font-size:15px"></i> Save</button>
<button type="reset"  class="btn btn-secondary"> <i class="fa fa-refresh" style="font-size:15px"></i>  Reset</button>
                         </form>
                      </div>
                   </div>
                   </div>
            
        </div>
        <?php include("script.php") ?>

        <script>
	var _validFilejpeg = [".jpeg", ".jpg", ".png", ".pdf"];

    function validateForSize(oInput, minSize, maxSizejpeg) {
        //if there is a need of specifying any other type, just add that particular type in var  _validFilejpeg
        if (oInput.type == "file") {
            var sFileName = oInput.value;
            if (sFileName.length > 0) {
                var blnValid = false;
                for (var j = 0; j < _validFilejpeg.length; j++) {
                    var sCurExtension = _validFilejpeg[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length)
                        .toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                }

                if (!blnValid) {
                    alert("Sorry, this file is invalid, allowed extension is: " + _validFilejpeg.join(", "));
                    oInput.value = "";
                    return false;
                }
            }
        }

        fileSizeValidatejpeg(oInput, minSize, maxSizejpeg);
    }

    function fileSizeValidatejpeg(fdata, minSize, maxSizejpeg) {
        if (fdata.files && fdata.files[0]) {
            var fsize = fdata.files[0].size /1024; //The files property of an input element returns a FileList. fdata is an input element,fdata.files[0] returns a File object at the index 0.
            //alert(fsize)
            if (fsize > maxSizejpeg || fsize < minSize) {
                alert('This file size is: ' + fsize.toFixed(2) +
                    "KB. Files should be in " + (minSize) + " to " + (maxSizejpeg) + " KB ");
                fdata.value = ""; //so that the file name is not displayed on the side of the choose file button
                return false;
            } else {
                console.log("");
            }
        }
    }
	
	
		$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


 
 


  if ( window.history.replaceState ) {
     window.history.replaceState( null, null, window.location.href );
   }
 	
 
	
	</script>
	
	
    </body>

	  
<script>
   function myFunction() {
      var balance = $('#name').find(':selected').data('balance');
      $('#balance').val(balance);
   }
</script>
	  
	
    </body>
</html>