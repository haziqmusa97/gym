<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();
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
	<title>Session Schedule</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">

<style>
table, th, td {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: center;
}

tr:nth-child(even){background-color: #f2f2f2}
tr:hover {background-color: #ddd;}

table#t01 {
  width: 100%;    
  background-color: #ffffff;
}
th {
  background-color: #4CAF50;
  color: white;
}

</style>

</head>

<body>
	<?php include('includes/header.php');?>

	<div class="ts-main-content">
			<?php include('includes/sidebar.php');?>

		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<br>
						<h2 class="page-title">Session Schedule</h2>
					</div>
				</div>
				<table id="t01">
					<h3>Monday</h3>
                          <tr>
                              <th>Time</th>
                              <th>Session</th> 
                              <th>Trainer</th>
                              <th>Fees</th>
                          </tr>
                          <tr>
                              <td>9:00 AM - 11:00 AM</td>
                              <td>Cardio (101)</td>
                              <td>Angel Adams</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>11:00 AM - 1:00 PM</td>
                              <td>Body Building (102)</td>
                              <td>Ridzuan</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>3:00 PM - 5:00 PM</td>
                              <td>Boxing (103)</td>
                              <td>Ridzuan Sumi</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>5:00 PM - 7:00 PM</td>
                              <td>Fitness (104)</td>
                              <td>Ridzuan Sumi</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>8:00 PM - 10:00 PM</td>
                              <td>Body Building (105)</td>
                              <td>Ridzuan Sumi</td>
                              <td>RM 60</td>
                          </tr>
                </table>
                <table id="t01">
					<h3>Tuesday</h3>
                          <tr>
                              <th>Time</th>
                              <th>Session</th> 
                              <th>Trainer</th>
                              <th>Fees</th>
                          </tr>
                          <tr>
                              <td>9:00 AM - 11:00 AM</td>
                              <td>Cardio (201)</td>
                              <td>Angel Adams</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>11:00 AM - 1:00 PM</td>
                              <td>Body Building (202)</td>
                              <td>Ridzuan</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>3:00 PM - 5:00 PM</td>
                              <td>Boxing (203)</td>
                              <td>Ridzuan Sumi</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>5:00 PM - 7:00 PM</td>
                              <td>Fitness (204)</td>
                              <td>Ridzuan Sumi</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>8:00 PM - 10:00 PM</td>
                              <td>Body Building (205)</td>
                              <td>Ridzuan Sumi</td>
                              <td>RM 60</td>
                          </tr>
                </table>
                <table id="t01">
					<h3>Wednesday</h3>
                          <tr>
                              <th>Time</th>
                              <th>Session</th> 
                              <th>Trainer</th>
                              <th>Fees</th>
                          </tr>
                         <tr>
                              <td>9:00 AM - 11:00 AM</td>
                              <td>Cardio (301)</td>
                              <td>Angel Adams</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>11:00 AM - 1:00 PM</td>
                              <td>Body Building (302)</td>
                              <td>Ridzuan</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>3:00 PM - 5:00 PM</td>
                              <td>Boxing (303)</td>
                              <td>Ridzuan Sumi</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>5:00 PM - 7:00 PM</td>
                              <td>Fitness (304)</td>
                              <td>Ridzuan Sumi</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>8:00 PM - 10:00 PM</td>
                              <td>Body Building (305)</td>
                              <td>Ridzuan Sumi</td>
                              <td>RM 60</td>
                          </tr>
                </table>
                <table id="t01">
					<h3>Thursday</h3>
                          <tr>
                              <th>Time</th>
                              <th>Session</th> 
                              <th>Trainer</th>
                              <th>Fees</th>
                          </tr>
                          <tr>
                              <td>9:00 AM - 11:00 AM</td>
                              <td>Cardio (401)</td>
                              <td>Angel Adams</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>11:00 AM - 1:00 PM</td>
                              <td>Body Building (402)</td>
                              <td>Ridzuan</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>3:00 PM - 5:00 PM</td>
                              <td>Boxing (403)</td>
                              <td>Ridzuan Sumi</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>5:00 PM - 7:00 PM</td>
                              <td>Fitness (404)</td>
                              <td>Ridzuan Sumi</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>8:00 PM - 10:00 PM</td>
                              <td>Body Building (405)</td>
                              <td>Ridzuan Sumi</td>
                              <td>RM 60</td>
                          </tr>
                </table>
                <table id="t01">
					<h3>Friday</h3>
                          <tr>
                              <th>Time</th>
                              <th>Session</th> 
                              <th>Trainer</th>
                              <th>Fees</th>
                          </tr>
                         <tr>
                              <td>9:00 AM - 11:00 AM</td>
                              <td>Cardio (501)</td>
                              <td>Angel Adams</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>11:00 AM - 1:00 PM</td>
                              <td>Body Building (502)</td>
                              <td>Ridzuan</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>3:00 PM - 5:00 PM</td>
                              <td>Boxing (503)</td>
                              <td>Ridzuan Sumi</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>5:00 PM - 7:00 PM</td>
                              <td>Fitness (504)</td>
                              <td>Ridzuan Sumi</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>8:00 PM - 10:00 PM</td>
                              <td>Body Building (505)</td>
                              <td>Ridzuan Sumi</td>
                              <td>RM 60</td>
                          </tr>
                </table>
                <table id="t01">
					<h3>Saturday</h3>
                          <tr>
                              <th>Time</th>
                              <th>Session</th> 
                              <th>Trainer</th>
                              <th>Fees</th>
                          </tr>
                         <tr>
                              <td>9:00 AM - 11:00 AM</td>
                              <td>Cardio (601)</td>
                              <td>Angel Adams</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>11:00 AM - 1:00 PM</td>
                              <td>Body Building (602)</td>
                              <td>Ridzuan</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>3:00 PM - 5:00 PM</td>
                              <td>Boxing (603)</td>
                              <td>Ridzuan Sumi</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>5:00 PM - 7:00 PM</td>
                              <td>Fitness (604)</td>
                              <td>Ridzuan Sumi</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>8:00 PM - 10:00 PM</td>
                              <td>Body Building (605)</td>
                              <td>Ridzuan Sumi</td>
                              <td>RM 60</td>
                          </tr>
                </table>
                <table id="t01">
					<h3>Sunday</h3>
                          <tr>
                              <th>Time</th>
                              <th>Session</th> 
                              <th>Trainer</th>
                              <th>Fees</th>
                          </tr>
                          <tr>
                              <td>9:00 AM - 11:00 AM</td>
                              <td>Cardio (701)</td>
                              <td>Angel Adams</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>11:00 AM - 1:00 PM</td>
                              <td>Body Building (702)</td>
                              <td>Ridzuan</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>3:00 PM - 5:00 PM</td>
                              <td>Boxing (703)</td>
                              <td>Ridzuan Sumi</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>5:00 PM - 7:00 PM</td>
                              <td>Fitness (704)</td>
                              <td>Ridzuan Sumi</td>
                              <td>RM 60</td>
                          </tr>
                          <tr>
                              <td>8:00 PM - 10:00 PM</td>
                              <td>Body Building (705)</td>
                              <td>Ridzuan Sumi</td>
                              <td>RM 60</td>
                          </tr>
                </table>
            </div>
        </div>
    </div>

	<!-- Loading Scripts -->
	<script src="js5/jquery.min.js"></script>
	<script src="js5/bootstrap-select.min.js"></script>
	<script src="js5/bootstrap.min.js"></script>
	<script src="js5/jquery.dataTables.min.js"></script>
	<script src="js5/dataTables.bootstrap.min.js"></script>
	<script src="js5/Chart.min.js"></script>
	<script src="js5/fileinput.js"></script>
	<script src="js5/chartData.js"></script>
	<script src="js5/main.js"></script>

</body>

</html>
