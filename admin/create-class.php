<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
//code for add courses
if($_POST['submit'])
{
$seater=$_POST['seater'];
$roomno=$_POST['rmno'];
$fees=$_POST['fee'];
$sql="SELECT sescode FROM session where sescode=?";
$stmt1 = $mysqli->prepare($sql);
$stmt1->bind_param('i',$roomno);
$stmt1->execute();
$stmt1->store_result(); 
$row_cnt=$stmt1->num_rows;;
if($row_cnt>0)
{
echo"<script>alert('Session already exist');</script>";
}
else
{
$query="insert into  session (time,sescode,fees) values(?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('iii',$seater,$roomno,$fees);
$stmt->execute();
echo"<script>alert('Session has been added successfully');</script>";
}
}
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Create Session</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Add Session </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Add Session</div>
									<div class="panel-body">
									<?php if(isset($_POST['submit']))
{ ?>

<?php } ?>
										<form method="post" class="form-horizontal">
											
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Time</label>
												<div class="col-sm-8">
												<Select name="seater" class="form-control" required>
<option value="">Select Time</option>
<option value="911">9.00 AM-11.00 AM</option>
<option value="1101">11.00 AM-1.00 PM</option>
<option value="3050">3.00 PM-5.00 PM</option>
<option value="5070">5.00 PM-7.00 AM</option>
<option value="0810">8.00 PM-10.00 PM</option>
</Select>
</div>
</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Session Code</label>
												<div class="col-sm-8">
												<Select name="rmno" class="form-control" required>
<option value="">Select Session</option>
<option value="101">Cardio (101)</option>
<option value="102">Body Building (102)</option>
<option value="103">Boxing (103)</option>
<option value="104">Fitness (104)</option>
<option value="105">Body Building (105)</option>
<option value="106">Fitness (106)</option>
<option value="201">Cardio (201)</option>
<option value="202">Body Building (202)</option>
<option value="203">Boxing (203)</option>
<option value="204">Fitness (204)</option>
<option value="205">Body Building (205)</option>
<option value="206">Fitness (206)</option>
<option value="301">Cardio (301)</option>
<option value="302">Body Building (302)</option>
<option value="303">Boxing (303)</option>
<option value="304">Fitness (304)</option>
<option value="305">Body Building (305)</option>
<option value="306">Fitness (306)</option>
<option value="401">Cardio (401)</option>
<option value="402">Body Building (402)</option>
<option value="403">Boxing (403)</option>
<option value="404">Fitness (404)</option>
<option value="405">Body Building (405)</option>
<option value="406">Fitness (406)</option>
<option value="501">Cardio (501)</option>
<option value="502">Body Building (502)</option>
<option value="503">Boxing (503)</option>
<option value="504">Fitness (504)</option>
<option value="505">Body Building (505)</option>
<option value="506">Fitness (506)</option>
<option value="601">Cardio (601)</option>
<option value="602">Body Building (602)</option>
<option value="603">Boxing (603)</option>
<option value="604">Fitness (604)</option>
<option value="605">Body Building (605)</option>
<option value="606">Fitness (606)</option>
<option value="701">Cardio (701)</option>
<option value="702">Body Building (702)</option>
<option value="703">Boxing (703)</option>
<option value="704">Fitness (704)</option>
<option value="705">Body Building (705)</option>
<option value="706">Fitness (706)</option>
</Select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Fee</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="fee" id="fee" value="" required="required">
</div>
</div>

<div class="col-sm-8 col-sm-offset-2">
<input class="btn btn-primary" type="submit" name="submit" value="Create Session ">
												</div>
											</div>

										</form>

									</div>
								</div>
									
							
							</div>
						
									
							

							</div>
						</div>

					</div>
				</div> 	
				

			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</script>
</body>

</html>