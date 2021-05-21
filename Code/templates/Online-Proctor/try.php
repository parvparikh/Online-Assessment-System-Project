<!DOCTYPE>
<html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";
$_SESSION['qid']=array(2,3,1,4,5,6,7,9,8,10,11,12,13,14,15,16,17);
// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
session_start(); ?>
    <?php 															
																if (isset($_POST['click']) || isset($_GET['start'])) {
																@$_SESSION['clicks'] += 1 ;
																$c = $_SESSION['clicks'];
																if(isset($_POST['userans'])) { $userselected = $_POST['userans'];
																echo $_POST['userans'];
																$fetchqry2 = "INSERT INTO `answer`(`stid`, `quiz_id`, `qid`, `a_ans`, `s_ans`) VALUES ('17cp024','1212',".$_SESSION['qbid'].",".$userselected.",".$_SESSION['ans'].")";
                                                                echo $fetchqry2;
																$result2 = mysqli_query($con,$fetchqry2);
																}
		  
																	
 																} else {
																	$_SESSION['clicks'] = 0;
																}
																
																//echo($_SESSION['clicks']);
																?>
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
    
</head>

<body>
<body>
    <div class="main-wrapper">
        
       

        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Question</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="" method="post">
                            <?php
                            
    if($_SESSION['clicks'] > 0 && $_SESSION['clicks'] <= 17){
    if(isset($c)) {  
    echo $c;
        echo "hello";
    $fetchqry = "SELECT qbid,que,op1,op2,op3,op4,ans FROM qbank where qbid='$c'"; 
				$result=mysqli_query($con,$fetchqry);
				$num=mysqli_num_rows($result);
                            echo $num;
				$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                $_SESSION['qbid']=$row['qbid'];
                $_SESSION['ans']=$row['ans'];
                            $cnt=0;
                           }
		  ?>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
										<label>Question</label>
										<input class="form-control" type="text" value="<?php echo @$row['que'];?>" name="qbid" readonly="">
									</div>
                                </div>
                       <?php     }    ?>
                            </div>
                             <div class="row">
                                <div class="col-md-10">
									<div class="form-group">
                                <label class="display-block">Option A</label>
								<div class="form-check form-check-inline">
                                    
                                    
                                    
                                    
                                    
									<input class="form-check-input" type="radio" name="userans" id="product_active" value="<?php $cnt=$cnt+1; echo $cnt;?>" >
									<label class="form-check-label" for="product_active">
									<?php echo $row['op1']; ?>
									</label>
								</div>
								
                            </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
									<div class="form-group">
                                <label class="display-block">Option B</label>
								<div class="form-check form-check-inline">
                                    
                                    
                                    
                                    
                                    
									<input class="form-check-input" type="radio" name="userans" id="product_active" value="<?php $cnt=$cnt+1; echo $cnt;?>" >
									<label class="form-check-label" for="product_active">
									<?php echo $row['op2']; ?>
									</label>
								</div>
								
                            </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
									<div class="form-group">
                                <label class="display-block">Option C</label>
								<div class="form-check form-check-inline">
                                    
                                    
                                    
                                    
                                    
									<input class="form-check-input" type="radio" name="userans" id="product_active" value="<?php $cnt=$cnt+1; echo $cnt;?>" >
									<label class="form-check-label" for="product_active">
									<?php echo $row['op3']; ?>
									</label>
								</div>
								
                            </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
									<div class="form-group">
                                <label class="display-block">Option D</label>
								<div class="form-check form-check-inline">
                                    
                                    
                                    
                                    
                                    
									<input class="form-check-input" type="radio" name="userans" id="product_active" value="<?php $cnt=$cnt+1; echo $cnt;?>" >
									<label class="form-check-label" for="product_active">
									<?php echo $row['op4']; ?>
									</label>
								</div>
								
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

