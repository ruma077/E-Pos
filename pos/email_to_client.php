<!Doctype html>
<html>
<?php include("head.php") ?>
    <body class="hold-transition  sidebar-mini" style="background-color:#f2f7fc;">
        <div class="wrapper">
        <?php include("head_nav.php") ?>
        <?php include("side_dashboard.php") ?>
        <div class="content-wrapper">
        <div class="container-fluid">
				   <script src="form.js"></script>
<!-- Page Content -->
<div class="container">
	<div class="row">
		<!-- Sidebar Widgets Column -->

		<!-- Post Content Column -->
		<div class="col-lg-12">
			<!-- Title -->
			<h3 class="mt-4"> <i class="fa fa-envelope" aria-hidden="true"></i> Compose Email</h3>
			<!-- Comments Form -->
			<div class="card my-4">
				<div class="card-body">
				 
					 
							<form enctype="multipart/form-data" action="" method="post">

								<div class="row" style="font-size: 20px;">

									<div class="col-sm-4 form-group">
										<label for="email"> Email:</label>
										<input type="email" class="form-control"   id="email" name="email" required>
									</div>
									<div class="col-sm-6 form-group">
										<label for="email"> Subject:</label>
										<input type="email" class="form-control"  id="subject" name="subject" required>
									</div>
								</div>
								<div class="row" style="font-size: 20px;">
									<div class="col-sm-12 form-group">
										<label for="message"> Message:</label>
										<textarea class="form-control" type="textarea" name="msg" id="message" maxlength="6000" rows="5"></textarea>
									</div>
								</div>
							 
								</div>
							 
								<div class="card-footer" >
								 
										<!-- <input type="submit" name="submit" id="submit" value="Send" class="btn btn-primary" style="font-size: 20px;"> -->
										<button type="submit" name="submit" class="btn btn-success" style="font-size: 20px;"><i class="fa fa-paper-plane "> </i>  Send</button>
								</div>

							</form>
						</div>
					</div>
				</div>
            
        </div>
        <?php include("script.php") ?>
	  
	
    </body>
</html>