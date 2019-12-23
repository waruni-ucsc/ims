<?php include('server.php') ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>PDC - UCSC</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/home.png" />
	<link rel="icon" type="image/png" href="assets/img/home.png" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />
</head>


<body align="center">
	<div class="image-container set-full-height"   style="background-image: url('assets/img/bg-masthead.jpg')">
	   
	    <!--   Big container   -->
	    <div class="container" > 
	        <div class="row">
		        <div class="col-sm-6 col-sm-offset-2" >
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
		                    <form action="function.php" method="post">
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		Login
		                        	</h3>
									<h5>Please enter below details</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#about" data-toggle="tab">Login Info :</a></li>
			                        </ul>
								</div>

		                      
									 <div class="tab-pane" id="login">
		                                <div class="row">
										
										<div class="col-sm-10" >
											
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">account_circle</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">User Name</label>
			                                          <input name="user_name" type="text" class="form-control" >
			                                        </div>
												</div>	
												
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">lock</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Password</label>
			                                          <input name="password" type="password" class="form-control" >
			                                        </div>
												</div>	
																					
												
										</div>
										</div>
									</div>
												
											
		                        </div>
							<div class="wizard-footer">
		                            <div class="pull-right">
		                                
		                                <input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' id='Login' name='login' value='Login' />
		                            </div>

		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div><!-- end row -->
	
	    </div> <!--  big container -->
		
		   <div class="footer">
	        <div class="container text-center">
	            Professional Development Center - UCSC
	        </div>
	       </div>
		   
		   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
		   <script type="text/javascript">
		   $(function(){
			   $('#register').click(function(){
				    Swal.fire({
						'title':'Good job!',
						'text':'You clicked the button!',
						'type':'success'
							})
			   });
			  
		   });
		   </script>
	</div>

</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js"></script>
</html>
