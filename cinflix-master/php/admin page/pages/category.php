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
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/form.css">
	<link rel="stylesheet" href="../css/banner.css">
	<title>AdminSite - SCSS</title>
    <style>
        .container .forms{
            height:468px;
        }
        a{
            color: hsl(0, 0%, 88%);
        }
    </style>
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
						<a href="#">Anime Movies</a>
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
				<span>8</span>
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
			<h1>Category</h1>
			<ul class="breadcrumbs">
				<li><a href="#">Home</a></li>
				<li>/</li>
				<li><a href="#" class="active">category</a></li>
			</ul>



            <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Category</span>

                <form action="category.php" method="post" enctype="multipart/form-data">
                    <div class="input-field">
                        <input type="text" placeholder="background Image" name="img" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="category name" name="category" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="how much has anime has" name="contain" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    
                   
                    

                    

                    <div class="input-field button">
                        <input type="submit" name="upload" value="Upload">
                    </div>
                </form>

                
            </div>

            <!-- Registration Form -->
           
            </div>
        </div>
    </div>
			
			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
















    <?php
    include '../../Video Sharing Site/db.php';
    if (isset($_POST['upload'])) {
      $img=$_POST['img'];
      $category=$_POST['category'];
      $contain=$_POST['contain'];

     

      

      $sql="INSERT INTO category(img,category,contain)
      values('$img','$category','$contain')";

      $query=mysqli_query($conn,$sql);



    }

     ?>






	

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="../js/script.js"></script>
</body>
</html>