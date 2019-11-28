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
<option value="230415">2.30 PM - 4.15 PM</option>
<option value="245430">2.45 PM - 4.30 PM</option>
<option value="445615">4.45 PM - 6.15 PM</option>
<option value="800945">8.00 PM - 9.45 PM</option>
<option value="10001145">10.00 PM - 11.45 PM</option>
</Select>
</div>
</div>

											<div class="form-group">
												<label class="col-sm-2 control-label">Session Code</label>
												<div class="col-sm-8">
												<Select name="rmno" class="form-control" required>
<option value="">Select Session</option>
<option value="101">Body Building (101)</option>
<option value="102">Weight Loss (102)</option>
<option value="103">Fitness (103)</option>
<option value="104">Strength (104)</option>
<option value="105">Body Building (105)</option>
<option value="106">Weight Loss (106)</option>
<option value="107">Fitness (107)</option>
<option value="108">Strength (108)</option>
<option value="201">Weight Loss (201)</option>
<option value="202">Body Building (202)</option>
<option value="203">Fitness (203)</option>
<option value="204">Strength (204)</option>
<option value="205">Weight Loss (205)</option>
<option value="206">Body Building (206)</option>
<option value="207">Fitness (207)</option>
<option value="208">Strength (208)</option>
<option value="301">Fitness (301)</option>
<option value="302">Body Building (302)</option>
<option value="303">Weight Loss (303)</option>
<option value="304">Strength (304)</option>
<option value="305">Fitness (305)</option>
<option value="306">Body Building (306)</option>
<option value="307">Weight Loss (307)</option>
<option value="308">Strength (308)</option>
<option value="401">Strength(401)</option>
<option value="402">Weight Loss (402)</option>
<option value="403">Body Building (403)</option>
<option value="404">Fitness (404)</option>
<option value="405">Strength (405)</option>
<option value="406">Weight Loss (406)</option>
<option value="407">Body Building (407)</option>
<option value="408">Fitness (408)</option>
<option value="501">Fitness (501)</option>
<option value="502">Body Building (502)</option>
<option value="503">Weight Loss (503)</option>
<option value="504">Strength (504)</option>
<option value="505">Fitness (505)</option>
<option value="506">Body Building (506)</option>
<option value="507">Weight Loss (507)</option>
<option value="508">Strength (508)</option>
<option value="601">Body Building (601)</option>
<option value="602">Weight Loss (602)</option>
<option value="603">Fitness(603)</option>
<option value="604">Strength (604)</option>
<option value="605">Body Building (605)</option>
<option value="606">Weight Loss (606)</option>
<option value="607">Fitness (607)</option>
<option value="608">Strength (608)</option>
<option value="701">Weight Loss (701)</option>
<option value="702">Body Building (702)</option>
<option value="703">Fitness (703)</option>
<option value="704">Strength (704)</option>
<option value="705">Weight Loss (705)</option>
<option value="706">Body Building (706)</option>
<option value="707">Fitness (707)</option>
<option value="708">Strength (708)</option>
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