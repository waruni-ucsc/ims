<?php 
	session_start();

	// variable declaration
	$company_name="";
	$website = "";
	$br_no = "";
	$company_address = "";
	$start_date = "";
	$company_tele_no = "";
	$contact_person_name = "";
	$designation = "";
	$contact_person_email = "";
	$contact_person_tele = "";
	$employee_count = "";
	$pm_count = "";
	$tech_lead_count = "";
	$user_name = "";
	$password ="";
	$confirm_password = "";
	
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'ims');

	// REGISTER USER
	if (isset($_POST['finish'])) {
		// receive all input values from the form
		$company_name = mysqli_real_escape_string($db, $_POST['company_name']);
		$website = mysqli_real_escape_string($db, $_POST['website']);
		$br_no = mysqli_real_escape_string($db, $_POST['br_no']);
		$company_address = mysqli_real_escape_string($db, $_POST['company_address']);
		$start_date = mysqli_real_escape_string($db, $_POST['start_date']);
		$company_tele_no = mysqli_real_escape_string($db, $_POST['company_tele_no']);
		$contact_person_name = mysqli_real_escape_string($db, $_POST['contact_person_name']);
		$designation = mysqli_real_escape_string($db, $_POST['designation']);
		$contact_person_email = mysqli_real_escape_string($db, $_POST['contact_person_email']);
		$contact_person_tele = mysqli_real_escape_string($db, $_POST['contact_person_tele']);
		$employee_count = mysqli_real_escape_string($db, $_POST['employee_count']);
		$pm_count = mysqli_real_escape_string($db, $_POST['pm_count']);
		$tech_lead_count = mysqli_real_escape_string($db, $_POST['tech_lead_count']);
		$user_name = mysqli_real_escape_string($db, $_POST['user_name']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);
		

		// form validation: ensure that the form is correctly filled
			if (empty($company_name)) { array_push($errors, "Company Name is required"); }
		if (empty($website)) { array_push($errors, "Website name is required"); }
		if (empty($br_no)) { array_push($errors, "BR No is required"); }
		if (empty($company_address)) { array_push($errors, "Company Address is required"); }
		if (empty($start_date)) { array_push($errors, "Established date is required"); }
		if (empty($company_tele_no)) { array_push($errors, "Telephone Number is required"); }
		if (empty($contact_person_name)) { array_push($errors, "Contact Person Name is required"); }
		if (empty($designation)) { array_push($errors, "Designation is required"); }
		if (empty($contact_person_email)) { array_push($errors, "Email is required"); }
		if (empty($contact_person_tele)) { array_push($errors, "Mobile Number is required"); }
		if (empty($employee_count)) { array_push($errors, "Employee Count is required"); }
		if (empty($pm_count)) { array_push($errors, "Project Managers Count is required"); }
		if (empty($tech_lead_count)) { array_push($errors, "Tech Leads Countis required"); }
		if (empty($user_name )) { array_push($errors, "Username is required"); }
		if (empty($password)) { array_push($errors, "Password is required"); }
		if (empty($confirm_password)) { array_push($errors, "Confirm Password "); } 

		if ($password != $confirm_password) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			
					  
			$sql = "INSERT INTO users(company_name,website,br_no,company_address,start_date,company_tele_no,contact_person_name,designation,contact_person_email,contact_person_tele,employee_count,pm_count,tech_lead_count,user_name,password)" 
			. "VALUES('$company_name','$website','$br_no','$company_address','$start_date','$company_tele_no','$contact_person_name','$designation','$contact_person_email','$contact_person_tele','$employee_count','$pm_count','$tech_lead_count','$user_name','$password')";
			
			mysqli_query($db, $sql);

			$_SESSION['user_name'] = $user_name;
			$_SESSION['success'] = "You are now logged in";
			header('location: ../indexadmin.html');
		}

	}


//print_r($_POST);
	// LOGIN USER
	if (isset($_POST['login'])) {
		
		//$user_name = stripcslashes($user_name);
		//$password = stripcslashes($password);
		$user_name = mysqli_real_escape_string($db, $_POST['user_name']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($user_name)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE user_name='$user_name' AND password='$password'";
			$results = mysqli_query($db, $query) or die(mysql_error());

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['user_name'] = $user_name;
				$_SESSION['success'] = "You are now logged in";
				header('location: ../company/dashboard-company.html');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

if (isset($_POST['ad_submit']))
{
	$position=$_POST['position'];
	$vacancy_no=$_POST['vacancy_no'];
	$company=$_POST['company'];
	$filename=$_FILES["ad"]["name"];
	$query="insert into internship_ads(position,vacancy_no,company,filename) values('$position','$vacancy_no','$company','$filename')";
	$result=mysqli_query($db,$query);
	echo "<meta http-equiv='refresh' content='0'>";	
}

function get_ad_details(){
	global $db;
	$query="select position,vacancy_no and company from internship_ads";
	$result=mysqli_query($db,$query);
	while ($row=mysqli_fetch_array($result)){
		$position=$row['position'];
		$vacancy_no=$row['vacancy_no'];
		$company=$row['company'];
		echo "
                <li>$position</li>;
                <li>$vacancy_no </li>;
                <li>$company</li>;
                
             ";
	}
}

?>