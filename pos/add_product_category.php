<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
        <div class="container-fluid">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
				   
                   <div class="mt-3 mb-2 page-title">
                   <div class="row">
                     <div class="col-lg-10 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;">  Dashboard   
 <i class="fa fa-angle-right"></i> Add Category</h5>
                     </div>
                     <div class="col-md-2 text-right">
         <a href="list_group.php" class="btn btn-outline-primary"><i class="fa fa-folder-open"></i> Category List</a>
      </div>
                     <!-- <div class="col-lg-2 col-sm-6 col-md-3" >
                        <a class="btn btn-primary" href="list_product.php" role="button"  style="auto;  margin-top: 5px; margin-left:0px; text-align: center; color: white; font-weight: normal; font-size: 16px; font-family: serif;"><i class="fa fa-folder" style="color: white;"></i>&nbsp; Product List</a>
                     </div> -->
                  </div> <hr> 
                     <!-- <div class="row">
                        <div class="col-md-8 my-auto">
                           Account  <i class="fa fa-angle-right"></i> Add Category      </div>
                        <div class="col-md-4 text-right">
                           <a href="list_category.php" class="btn btn-primary"><i class="fa fa-folder-open"></i> Transaction Categories</a>
                        </div>
                     </div>
                  </div> -->
                  <form name="frmUser" method="post" action="" enctype="multipart/form-data" >
                  <div class="card mb-4">
                      <div class="card-body">
                           <div class="row row-header">
                              <div class="col-md-1 text-center">
                                 <a  class="btn btn-light btn-blcok btn-sm" name="del_item" onClick="deleteRow();"> <i class="fa fa-trash " style="font-size: 25px;"></i>  </a> 
                              </div>
                              <div class="col-md-4">
                                 <label style="font-size:18px;   font-weight: bold;">Category</label>
                              </div>
                              <div class="col-md-1">  <span class="instl btn btn-outline-primary "><i class="fa fa-plus "></i> </span>  </div>
                           </div>
                           
                           <br>
                           <div class="all">
                              <div class="formi">
                                  <div class="row items ">
                                    <div class="col-md-1 text-center">
                                        <input class="checkmark text-center add" type="checkbox"id="select_all" name="item_index[]">
                                             <label class="" for="check"> </label>
                                    </div>

                                    
                                    <div class="col-md-4">
                                       <input class="form-control add" type="text" name="category[]">
                                    </div>
                                     
                                 </div>

                                 <br>
                               
                                 
                              </div>
                           </div>
                  
                      </div>
                   
                  <div class="card-footer">
                  <input type="submit" name="save" class="btn btn-success" value="Save" />
                  <input type="reset" class="btn btn-secondary" value="Reset" />
                   </form>
                     </div>
                  </div>
            
        </div>
        <?php include("script.php") ?>
        <script type="text/javascript">
   // Colone Items
    
   	$(document).ready(function() {
   	  $(".instl").click(function() {
   		$(".formi")
   		  .eq(0)
   		  .clone()
   		  .find("input").val("").end() // ***
   		  .show()
   		  .insertAfter(".formi:last");
   		
   	  });
   	  $('.all').on('click', ".cancel", function() {
   		  $(this).closest('.formi').remove();
   		});
   	});
   	
   	
   // Remove Row  
   		function deleteRow() {
   	$('DIV.items').each(function(index, item){
   		jQuery(':checkbox', this).each(function () {
   			if ($(this).is(':checked')) {
   				$(item).remove();
   			}
   		});
   	});
   }

   //select all
   
$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
</script>

	  
	
    </body>
</html>