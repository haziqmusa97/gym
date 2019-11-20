
<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Main</li>
				<?PHP if(isset($_SESSION['id']))
				{ ?>
					<li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a></li>
					<li><a href="my-profile.php"><i class="fa fa-user"></i> My Profile</a></li>
                    <li><a href="change-password.php"><i class="fa fa-files-o"></i>Change Password</a></li>
                    <li><a href="#"><i class="fa fa-file-o"></i>Booking</a>
                    <ul>
						<li><a href="class_schedule.php">Session Schedule</a></li>
						<li><a href="book-form.php">Book Session</a></li>
						<li><a href="book-details.php">Booking Details</a></li>
					</ul>
                    </li>
                   <li><a href="#"><i class="fa fa-users"></i>Gym Info</a>
                      <ul>
						<li><a href="gallery.php">Gallery</a></li>
						
					  </ul>
                    </li>
<?php } else { ?>
				
				<li><a href="registration.php"><i class="fa fa-files-o"></i> User Registration</a></li>
				<li><a href="login_user.php"><i class="fa fa-users"></i> User Login</a></li>
				<li><a href="admin"><i class="fa fa-user"></i> Admin Login</a></li>
				<?php } ?>

			</ul>
		</nav>