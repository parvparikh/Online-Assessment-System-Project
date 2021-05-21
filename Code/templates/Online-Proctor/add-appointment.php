<!DOCTYPE html>
<html lang="en">
   <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<!-- add-appointment24:07-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="index-2.html" class="logo">
					<img src="assets/img/logo.png" width="35" height="35" alt=""> <span>Preclinic</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
           <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="active">
                            <a href="index.html"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						<li>
                            <a href="appointments.html"><i class="fa fa-book"></i> <span>Question Bank</span></a>
                        </li>
                        
						
						
                                <li>
                                    <a href="javascript:void(0);"><span>Level 1</span></a>
                                </li>
                            </ul>
                        
                    
                </div>
            </div>
        </div>

        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Question</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
										<label>QuestionBank ID</label>
										<input class="form-control" type="text" value="1" name="qbid" readonly="">
									</div>
                                </div>
                                
                            </div>
                             <div class="row">
                                <div class="col-md-10">
									<div class="form-group">
										<label>Bloom's Taxonomy</label>
										<select name="bts" class="select">
											<option>Select</option>
											<option> R: Remember</option>
											<option> U: Understand</option>
                                            <option> A: Apply</option>
                                            <option> N: Analyze</option>
                                            <option> E: Evaluate</option>
                                            <option> C: Create</option>
										</select>
									</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label>Course Outcomes</label>
                                        
                                        <input name="co" class="form-control" type="number" min="1" step="1">
                                    </div>
                                </div> 
                                
                                
                            </div>
                            <div class="row">
                            
                            <div class="form-group">
                                <div class="col-md-10">
                                <label>Question</label>
                                <textarea cols="122" rows="6" class="form-control" name="question"></textarea>
                            </div>
                                </div></div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Option A</label>
                                        
                                        <input class="form-control" type="text" name="opa" >
                                    </div>
                                </div> 
                                
                                
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Option B</label>
                                        
                                        <input class="form-control" type="text" name="opb" >
                                    </div>
                                </div> 
                                
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Option C</label>
                                        
                                        <input class="form-control" type="text" name="opc" >
                                    </div>
                                </div> 
                                
                                
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Option D</label>
                                        
                                        <input class="form-control" type="text" name="opd" >
                                    </div>
                                </div> 
                                
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Correct Answer</label>
                                        
                                        <input class="form-control" name="ans" type="number" min="1" step="1" placeholder="1 if A, 2 if B and so on.." >
                                    </div>
                                </div> 
                                
                                
                            
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Marks</label>
                                        
                                        <input class="form-control" name="marks" type="number" min="1" step="1" >
                                    </div>
                                </div> 
                                
                                
                            </div>
                            <div class="m-t-20 text-center">
                                <button name="submit" class="btn btn-primary submit-btn">Add Question</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
	<script>
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'

                });
            });
     </script>
     <?php

         if(isset($_POST['submit'])) {


$sql = "INSERT INTO `qbank`(`qbid`, `cid`, `tid`, `marks`, `que`, `op1`, `op2`, `op3`, `op4`, `ans`, `bt`, `co`) VALUES ('$_POST[qbid]','CC101',5,$_POST[marks],'$_POST[question]','$_POST[opa]','$_POST[opb]','$_POST[opc]','$_POST[opd]',$_POST[ans],'$_POST[bts]',$_POST[co])";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
</body>
    </body>

<!-- add-appointment24:07-->
</html>
