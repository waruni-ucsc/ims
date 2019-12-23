<?php include('../register/server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Company | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header" )>
    <!-- Logo -->
   <h2 style="color:white;" align="center">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Professional Development Center   </b>|</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>   University of Colombo School of Computing</b> </span> 
	</h2> 
    
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
           <button type="submit" class="btn btn-default pull-right"><i class="fa fa-sign-out"></i> Sign Out</button>
        </ul>
      </div>
    </nav>
  </header>
  
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
    
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
	  
	  
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
		
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="dashboard-company.html"><i class="fa fa-circle-o"></i>  <span>Quick View</span></a></li>
            
          </ul>
        </li>
		
       	<li class="treeview">
          <a href="#">
            <i class="fa fa-briefcase"></i>
            <span>Internship</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="blank.html"><i class="fa fa-check-circle"></i> Publish Adverts</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-check-circle"></i> Publish Adverts</a></li>            
          </ul>
        </li>
		
        <li class="treeview">
          <a href="#">
            <i class="fa fa-graduation-cap"></i>
            <span>Students</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-check-circle"></i> Student Profiles </a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-check-circle"></i> View Students' Requests</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-check-circle"></i> Schedule Interviews</a></li>			
          </ul>
        </li>
		
		<li class="treeview">
          <a href="#">
            <i class="fa fa-briefcase"></i>
            <span>PDC</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-check-circle"></i> Send Selected Students </a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-check-circle"></i> Contact Coordinator</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-check-circle"></i> Contact Project Officer</a></li>
			<li><a href="pages/charts/morris.html"><i class="fa fa-check-circle"></i> Send Monthly Progress Reports</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-check-circle"></i> Send Company Evaluation</a></li>
          </ul>
        </li>
		
        <li class="treeview">
          <a href="#">
            <i class="fa fa-weixin"></i> <span>Tech Talks</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/inline.html"><i class="fa fa-check-circle"></i> Reserve Time Slot</a></li>					
			<li><a href="pages/charts/inline.html"><i class="fa fa-check-circle"></i> View Tech Talk Schedule</a></li>
          </ul>
        </li>
    
		
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/inline.html"><i class="fa fa-check-circle"></i> View Profile</a></li>			
			<li><a href="pages/charts/inline.html"><i class="fa fa-check-circle"></i> Edit Profile</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
		
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>	   
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Publish Your Advert Here       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
	
	<hr size="6">


    <!-- Main content -->   
	
	<?php
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["ad"]) && $_FILES["ad"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["ad"]["name"];
        $filetype = $_FILES["ad"]["type"];
        $filesize = $_FILES["ad"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("adverts/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["ad"]["tmp_name"], "adverts/" . $filename);
                echo "Your file was uploaded successfully.";
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["ad"]["error"];
    }
}
?>

  <section class="content">
     
      <div class="row">
		<div class="col-md-6">
	  
	   <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Please upload an image file including the details of the internship.</h3>
            </div>
           
            <!-- form start -->
            <form action="publish_ad.php" method="post" enctype="multipart/form-data" onSubmit="window.location.reload()">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Internship Position</label>
                  <input type="text" class="form-control" id="" name="position" placeholder="Enter Internship Position">
                </div>
				
				<div class="form-group">
                  <label for="exampleInputEmail1">Positions Available</label>
                  <input type="text" class="form-control" id="" name="vacancy_no" placeholder="Enter Available No of Positions">
                </div>
				
                <div class="form-group">
                  <label for="exampleInputPassword1">Company Name</label>
                  <input type="text" class="form-control" id="" name="company" placeholder="Enter Company Name">
                </div>
				
                <div class="form-group">
                  <label for="exampleInputFile">Attach the advert of the internship</label>
                  <input type="file" name="ad" id="exampleInputFile">   <br>
					<p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
                </div>				
              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="ad_submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
	  
	  </div>
	  
	
	  
	  </div> 
  </section>
		  
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  
  
  
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Waruni Samarawickrama</b> 
    </div>
    <strong>Copyright &copy; 2019 <a href="https://adminlte.io">PDC | UCSC</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar --> 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../bower_components/raphael/raphael.min.js"></script>
<script src="../bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>
