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
  <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
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
                              <td>2:30 PM - 4:15 PM</td>
                              <td>Body Building (101)</td>
                              <td>Tengku Izzat</td>
                              <td>RM 320</td>
                          </tr>
                          <tr>
                              <td>4:45 PM - 6:30 PM</td>
                              <td>Weight Loss (102)</td>
                              <td>Alif Syazwan</td>
                              <td>RM 240</td>
                          </tr>
                          <tr>
                              <td>8:00 PM - 9:45 PM</td>
                              <td>Fitness (103)</td>
                              <td>Mohd Hafiz</td>
                              <td>RM 280</td>
                          </tr>
                          <tr>
                              <td>10:00 PM - 11:45 PM</td>
                              <td>Strength (104)</td>
                              <td>Ridzuan Sumiri</td>
                              <td>RM 300</td>
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
                              <td>2:30 PM - 4:15 PM</td>
                              <td>Weight Loss (201)</td>
                              <td>Alif Syazwan</td>
                              <td>RM 240</td>
                          </tr>
                          <tr>
                              <td>4:45 PM - 6:30 PM</td>
                              <td>Body Building (202)</td>
                              <td>Tengku Izzat</td>
                              <td>RM 320</td>
                          </tr>
                          <tr>
                              <td>8:00 PM - 9:45 PM</td>
                              <td>Fitness (203)</td>
                              <td>Mohd Hafiz</td>
                              <td>RM 280</td>
                          
                          </tr>
                          <tr>
                              <td>10:00 PM - 11:45 PM</td>
                              <td>Strength (204)</td>
                              <td>Ridzuan Sumiri</td>
                              <td>RM 300</td>
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
                              <td>2:30 PM - 4:15 PM</td>
                              <td>Fitness (301)</td>
                              <td>Mohd Hafiz</td>
                              <td>RM 280</td>
                          </tr>
                          <tr>
                              <td>4:45 PM - 6:30 PM</td>
                              <td>Body Building (302)</td>
                              <td>Tengku Izzat</td>
                              <td>RM 320</td>
                          </tr>
                          <tr>
                              <td>8:00 PM - 9:45 PM</td>
                              <td>Weight Loss (303)</td>
                              <td>Alif Syazwan</td>
                              <td>RM 240</td>
                          
                          </tr>
                          <tr>
                              <td>10:00 PM - 11:45 PM</td>
                              <td>Strength (304)</td>
                              <td>Ridzuan Sumiri</td>
                              <td>RM 300</td>
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
                              <td>2:30 PM - 4:15 PM</td>
                              <td>Strength (401)</td>
                              <td>Ridzuan Sumiri</td>
                              <td>RM 300</td>
                          </tr>
                          <tr>
                              <td>4:45 PM - 6:30 PM</td>
                              <td>Weight Loss (402)</td>
                              <td>Alif Syazwan</td>
                              <td>RM 240</td>
                          </tr>
                          <tr>
                              <td>8:00 PM - 9:45 PM</td>
                              <td>Body Building (403)</td>
                              <td>Tengku Izzat</td>
                              <td>RM 320</td>
                          
                          </tr>
                          <tr>
                              <td>10:00 PM - 11:45 PM</td>
                              <td>Fitness (404)</td>
                              <td>Mohd Hafiz</td>
                              <td>RM 280</td>
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
                              <td>2:45 PM - 4:30 PM</td>
                              <td>Fitness (501)</td>
                              <td>Mohd Hafiz</td>
                              <td>RM 280</td>
                          </tr>
                          <tr>
                              <td>4:45 PM - 6:30 PM</td>
                              <td>Body Building (502)</td>
                              <td>Tengku Izzat</td>
                              <td>RM 320</td>
                          </tr>
                          <tr>
                              <td>8:00 PM - 9:45 PM</td>
                              <td>Weight Loss (503)</td>
                              <td>Alif Syazwan</td>
                              <td>RM 240</td>
                          
                          </tr>
                          <tr>
                              <td>10:00 PM - 11:45 PM</td>
                              <td>Strength (504)</td>
                              <td>Ridzuan Sumiri</td>
                              <td>RM 300</td>
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
                              <td>2:30 PM - 4:15 PM</td>
                              <td>Body Building (601)</td>
                              <td>Tengku Izzat</td>
                              <td>RM 320</td>
                          </tr>
                          <tr>
                              <td>4:45 PM - 6:30 PM</td>
                              <td>Weight Loss (602)</td>
                              <td>Alif Syazwan</td>
                              <td>RM 240</td>
                          </tr>
                          <tr>
                              <td>8:00 PM - 9:45 PM</td>
                              <td>Fitness (603)</td>
                              <td>Mohd Hafiz</td>
                              <td>RM 280</td>
                          </tr>
                          <tr>
                              <td>10:00 PM - 11:45 PM</td>
                              <td>Strength (604)</td>
                              <td>Ridzuan Sumiri</td>
                              <td>RM 300</td>
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
                              <td>2:30 PM - 4:15 PM</td>
                              <td>Weight Loss (701)</td>
                              <td>Alif Syazwan</td>
                              <td>RM 240</td>
                          </tr>
                          <tr>
                              <td>4:45 PM - 6:30 PM</td>
                              <td>Body Building (702)</td>
                              <td>Tengku Izzat</td>
                              <td>RM 320</td>
                          </tr>
                          <tr>
                              <td>8:00 PM - 9:45 PM</td>
                              <td>Fitness (703)</td>
                              <td>Mohd Hafiz</td>
                              <td>RM 280</td>
                          
                          </tr>
                          <tr>
                              <td>10:00 PM - 11:45 PM</td>
                              <td>Strength (704)</td>
                              <td>Ridzuan Sumiri</td>
                              <td>RM 300</td>
                          </tr>
                </table>
            </div>
        </div>
    </div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap-select.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js"></script>
  <script src="js/Chart.min.js"></script>
  <script src="js/fileinput.js"></script>
  <script src="js/chartData.js"></script>
  <script src="js/main.js"></script>

</body>

</html>
