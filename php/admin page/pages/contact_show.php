<?php

include '../../../pages/login/config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:../../../pages/login/login.php');
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/form.css">
	<link rel="stylesheet" href="../css/alert.css">
    <style>
        .container .forms{
            height:561px;
        }
    </style>
	<title>AdminSite - SCSS</title>
</head>
<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand"><i class='bx icon bxs-smile'></i> AdminSite</a>
		<ul class="nav-menu">
			<li>
				<a href="../index.php" class="active"><i class='bx icon bxs-dashboard' ></i> Dashboard</a>
			</li>
			<li class="divider" data-text="Main">
				Main
			</li>
			<li>
				<a href="#"><i class='bx icon bxs-inbox' ></i> Category <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="dropdown-nav-menu">
					<li>
						<a href="episode.php">Anime Episode</a>
					</li>
					<li>
						<a href="./amv.php">AMV</a>
					</li>
					<li>
						<a href="./movie.php">Anime Movies</a>
					</li>
					<li>
						<a href="#">User</a>
					</li>
				</ul>
			</li>
			<li class="divider" data-text="Table and forms">
				Insert
			</li>
			<li>
				<a href="ep_insert.php"><i class='bx icon bxs-notepad' ></i> Episode Insert</a>
			</li>
			<li>
				<a href="movie_insert.php"><i class='bx icon bx-table' ></i> Movie Insert</a>
			</li>
			<li>
				<a href="avm_insert.php"><i class='bx icon bxs-chart' ></i> AMV Insert</a>
			</li>
			<li>
				<a href="video_insert.php"><i class='bx icon bxs-notepad' ></i> Add video Episode</a>
			</li>
			<!-- customize -->
			<li class="divider" data-text="Table and forms">
				customize
			</li>
			<li>
				<a href="banner.php"><i class='bx icon bxs-notepad' ></i> banner</a>
			</li>
			<li>
				<a href="category.php"><i class='bx icon bxs-notepad' ></i> category</a>
			</li>
			<li>
				<a href="navbar.php"><i class='bx icon bxs-notepad' ></i> Navbar</a>
			</li>
		</ul>
		<div class="ads">
			<div class="wrapper">
				<a href="#" class="btn-upgrade">Upgrade</a>
				<p>Become a <span>PRO</span> member and enjoy <span>All Features</span></p>
			</div>
		</div>
	</section>
	<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class="bx bx-menu toggle-sidebar"></i>
			<form action="#">
				<div class="form-group">
					<input type="text" placeholder="Search...">
					<i class="bx bx-search"></i>
				</div>
			</form>
			<a href="#" class="nav-link">
				<i class='bx bxs-bell' ></i>
				<span>5</span>
			</a>
			<a href="contact_show.php" class="nav-link">
				<i class='bx bxs-message-dots' ></i>
				<span><?php
									$servername="localhost";
									$username="root";
									$password="";
									$dbanme="z_new_database";
									$con=mysqli_connect($servername,$username,$password,$dbanme);
								$sql="SELECT count(id) AS total FROM contactdata";
								$result=mysqli_query($con,$sql);
								$values=mysqli_fetch_assoc($result);
								$num_row=$values['total'];
								echo $num_row;
								?></span>
			</a>
			<div class="divider"></div>
			<div class="profile">
				<img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
				<ul class="profile-menu">
					<li>
						<a href="#"><i class='bx bxs-user-circle'></i> Profile</a>
					</li>
					<li>
						<a href="#"><i class='bx bxs-cog' ></i> Settings</a>
					</li>
					<li>
						<a href="#"><i class='bx bxs-log-out-circle' ></i> Logout</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
		<?php
         include '../../movies/db.php';

         $sql1="SELECT * from contactdata";
         $query1=mysqli_query($conn,$sql1);
         while ($info=mysqli_fetch_array($query1)) {
           ?>
        <button class="btn-upgrade" style="width: 25rem;height: 21rem;background: #1775f1;color: white;font-size: 17px;border: none;border-radius: 6px;cursor: pointer;"><?php echo $info['firstname']; ?>&nbsp;<?php echo $info['lastname']; ?>
	<br><br>
Phone No:&nbsp;&nbsp;<?php echo $info['phone']; ?>
	<br>
Email:&nbsp;&nbsp;<?php echo $info['email']; ?>
<br><span>Messages</span><br><br>


	<h3 style="
    word-wrap: break-word;
"><?php echo $info['message']; ?></h3>


</button>

        
	  <?php
         }


        ?>

		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->





    
      















      <script>
         $('button').click(function(){
           $('.alert').addClass("show");
           $('.alert').removeClass("hide");
           $('.alert').addClass("showAlert");
           setTimeout(function(){
             $('.alert').removeClass("show");
             $('.alert').addClass("hide");
           },5000);
         });
         $('.close-btn').click(function(){
           $('.alert').removeClass("show");
           $('.alert').addClass("hide");
         });
      </script>

	

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="../js/script.js"></script>



    <?php
    include '../../Video Sharing Site/db.php';
    if (isset($_POST['upload'])) {
      $title=$_POST['title'];
      $videolink=$_POST['videolink'];
      $active=$_POST['active'];

     

      

      $sql="INSERT INTO episode_video_insert(title,videolink,active)
      values('$title','$videolink','$active')";

      $query=mysqli_query($conn,$sql);



    }

     ?>



	
</body>
</html>