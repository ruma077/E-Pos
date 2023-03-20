<!DOCTYPE html>
<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
            <div class="container-fluid">
            <div class="row">
                     <div class="col-lg-8 col-sm-12 col-md-6">
                        <h5 style="color: #3f5eb5;  text-align: left;"> Customer Payment  <i class="fa fa-angle-right"></i> Customer Payment Receive</h5>
                     </div>
                     <!-- <div class="col-lg-2 col-sm-6 col-md-3" >
                        <a class="btn btn-success" href="add_product.php" role="button"  style="width:150px;  margin-top: 5px; margin-left:0px; color: white; text-align: center; font-weight: normal;font-size: 16px;  font-family: serif; "><i class="fa fa-plus" style="color: white;"></i>&nbsp; Add Product</a>
                     </div> -->
                     <div class="col-md-4 text-right">
                     <a href="list_payment_customer.php" class="btn btn-primary"><i class="fa fa-folder-open"></i>  All Customer Payments</a>
                          </div>
               </div> 
               <hr> 
                <div class="card mt-4">

                
                    <div class="card-header">
                     <div class="card-body pt-4">
                        <form name="frmUser" method="post">

<div class="form-group row">
   <label for="inputPassword" class="col-lg-2 col-sm-2 col-form-label"> Customer Name </label>
   <div class="col-lg-5 col-sm-12">
      <select  ID="name" class="form-select" onchange="myFunction()" name="uniqueid">
         <option value="">----</option>
     <option data-balance='3700' data-customer_id='1' data-fullname='Md Abdullah Al Mamun' data-mobile='01777615690' data-cstid='1' value='1'>  1/ Md Abdullah Al Mamun/ 01777615690  </option><option data-balance='522' data-customer_id='2' data-fullname='Md. Shafiul Ahsan' data-mobile='01780000000' data-cstid='2' value='2'>  2/ Md. Shafiul Ahsan/ 01780000000  </option><option data-balance='511' data-customer_id='3' data-fullname='Tapan Chakma' data-mobile='01710000000' data-cstid='3' value='3'>  3/ Tapan Chakma/ 01710000000  </option><option data-balance='22' data-customer_id='23' data-fullname='Md. Shaharul Islam' data-mobile='01773130190' data-cstid='4' value='23'>  4/ Md. Shaharul Islam/ 01773130190  </option>               </select>
   </div>

   <label for="inputPassword" class="col-lg-2 col-sm- col-form-label text-danger" style=" text-align: center;">   Balance </label>
   <div class="col-lg-3">
      <input readonly id="balance" name="balance" class="form-control text-danger" tabindex="0"/>
   </div>

</div>

         <div class="form-group row">
   <label for="inputPassword" class="col-sm-2 col-form-label"> Reference Invoice (Optional)  </label>
   <div class="col-sm-5">
      <select  ID="name" class="form-select"  name="uniqueid">
         <option value="">---</option>
                 <option value="1665813968">10001 / Md Abdullah Al Mamun</option>
               <option value="1665814013">10002 / Md. Shafiul Ahsan</option>
               <option value="1665814038">10003 / Tapan Chakma</option>
               <option value="1665814062">10004 / Tapan Chakma</option>
               <option value="1665814090">10005 / Md Abdullah Al Mamun</option>
               <option value="1665814136">10006 / Md. Shafiul Ahsan</option>
               <option value="1665923749">10007 / Md Abdullah Al Mamun</option>
               <option value="1665991565">10008 / Md Abdullah Al Mamun</option>
               <option value="1665995030">10009 / Md Abdullah Al Mamun</option>
               <option value="1667996022">10010 / Md. Shafiul Ahsan</option>
               <option value="1667996881">10011 / Md Abdullah Al Mamun</option>
               <option value="1667997092">10012 / Md Abdullah Al Mamun</option>
               <option value="1667998501">10013 / </option>
               <option value="1667998501">10014 / </option>
               <option value="1667998501">10015 / </option>
               <option value="1667998501">10016 / </option>
               <option value="1667998501">10017 / </option>
               <option value="1667998999">10018 / </option>
               <option value="1667999074">10019 / </option>
               <option value="1667999109">10020 / </option>
               <option value="1667999184">10021 / </option>
               <option value="1667999233">10022 / </option>
               <option value="1667999238">10023 / Md. Shafiul Ahsan</option>
               <option value="1671448432">10024 / </option>
               <option value="1674932352">10025 / </option>
               <option value="1674932622">10026 / </option>
               <option value="1674988658">10027 / </option>
               <option value="1674988666">10028 / </option>
               <option value="1674988932">10029 / </option>
               <option value="1674988978">10030 / </option>
               <option value="1675104881">10031 / Md Abdullah Al Mamun</option>
               <option value="1675303188">10032 / </option>
               <option value="1675420292">10033 / Mohammad Robin Islam</option>
               <option value="1675420460">10034 / </option>
               <option value="1675420607">10035 / </option>
               <option value="1675420490">10036 / Md Abdullah Al Mamun</option>
               <option value="1675504721">10037 / </option>
               <option value="1675540285">10038 / </option>
               <option value="1675540644">10039 / </option>
               <option value="1675582066">10040 / </option>
               <option value="1675706346">10041 / </option>
               <option value="1675706346">10042 / </option>
               <option value="917490107">10043 / </option>
               <option value="917490119">10044 / </option>
               <option value="917490129">10045 / </option>
               <option value="1675954104">10046 / </option>
               <option value="1676274785">10047 / </option>
               <option value="1676275076">10048 / Md. Shafiul Ahsan</option>
               <option value="1676374380">10049 / </option>
               <option value="1676374668">10050 / </option>
               <option value="1676374827">10051 / </option>
               <option value="1676374927">10052 / </option>
               <option value="1676404235">10053 / Md. Shafiul Ahsan</option>
               <option value="1676405998">10054 / </option>
               <option value="1676406491">10055 / </option>
               <option value="1676406524">10056 / Md. Shafiul Ahsan</option>
               <option value="1676753743">10057 / </option>
               <option value="1676753753">10058 / Md Abdullah Al Mamun</option>
            
           </select>
   </div>

    

</div>


<div class="form-group row">
   <label for="inputPassword" class="col-sm-2 col-form-label"> Paid Amount </label></label>
   <div class="col-sm-3">
      <input type="number" name="paid" class="form-control" required />
   </div>
   </div>      



<div class="form-group row">
   <label for="inputPassword" class="col-sm-2 col-form-label"> Less </label></label>
   <div class="col-sm-3">
      <input type="number" name="less" class="form-control"   />
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
     <select type="text" class="form-select"  name="account" required>
      <option value="">----</option>
               <option value="1">Cash</option>
               <option value="2">Islami Bank Ltd. Bangladesh</option>
               <option value="3">Nagad</option>
               <option value="4">Bkash</option>
               <option value="246">ebl</option>
           </select>
   </div>
</div>
<div class="form-group row">
   <label for="inputPassword" class="col-sm-2 col-form-label"> Remark </label></label>
   <div class="col-sm-3">
      <input type="text" name="remark" class="form-control"   />
   </div>
   </div>   
   <input type="hidden" name="customer_id"  id="customer_id"  required />
<input type="hidden" name="fullname"  id="fullname"  required />
<input type="hidden" name="mobile"  id="mobile"  required />
<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-save" style="font-size:15px"></i> Save</button>
<button type="reset"  class="btn btn-secondary"> <i class="fa fa-refresh" style="font-size:15px"></i>  Reset</button>

</div>


</form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <?php include("script.php") ?>
	  
        <script>
   function myFunction() {
 
      var balance = $('#name').find(':selected').data('balance');
      $('#balance').val(balance);
   }
</script>
    </body>
</html>