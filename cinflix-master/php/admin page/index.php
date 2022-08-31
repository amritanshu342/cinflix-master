<?php

include '../../pages/login/config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:../../pages/login/login.php');
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<link rel="stylesheet" href="css/style.css">
	<style>
.wrapper{
  background: #fff;
  max-width: 400px;
  width: 100%;
  margin: 120px auto;
  padding: 25px;
  border-radius: 5px;
  box-shadow: 0px 10px 15px rgba(0,0,0,0.1);
}
.wrapper header{
  font-size: 30px;
  font-weight: 600;
}
.wrapper .inputField{
  margin: 20px 0;
  width: 100%;
  display: flex;
  height: 45px;
}
.inputField input{
  width: 85%;
  height: 100%;
  outline: none;
  border-radius: 3px;
  border: 1px solid #ccc;
  font-size: 17px;
  padding-left: 15px;
  transition: all 0.3s ease;
}
.inputField input:focus{
  border-color: #8E49E8;
}
.inputField button{
  width: 50px;
  height: 100%;
  border: none;
  color: #fff;
  margin-left: 5px;
  font-size: 21px;
  outline: none;
  background: #8E49E8;
  cursor: pointer;
  border-radius: 3px;
  opacity: 0.6;
  pointer-events: none;
  transition: all 0.3s ease;
}
.inputField button:hover,
.footer button:hover{
  background: #721ce3;
}
.inputField button.active{
  opacity: 1;
  pointer-events: auto;
}
.wrapper .todoList{
  max-height: 250px;
  overflow-y: auto;
}
.todoList li{
  position: relative;
  list-style: none;
  margin-bottom: 8px;
  background: #f2f2f2;
  border-radius: 3px;
  padding: 10px 15px;
  cursor: default;
  overflow: hidden;
  word-wrap: break-word;
}
.todoList li .icon{
  position: absolute;
  right: -45px;
  top: 50%;
  transform: translateY(-50%);
  background: #e74c3c;
  width: 45px;
  text-align: center;
  color: #fff;
  padding: 10px 15px;
  border-radius: 0 3px 3px 0;
  cursor: pointer;
  transition: all 0.2s ease;
}
.todoList li:hover .icon{
  right: 0px;
}
.wrapper .footer{
  display: flex;
  width: 100%;
  margin-top: 20px;
  align-items: center;
  justify-content: space-between;
}
.footer button{
  padding: 6px 10px;
  border-radius: 3px;
  border: none;
  outline: none;
  color: #fff;
  font-weight: 400;
  font-size: 16px;
  margin-left: 5px;
  background: #8E49E8;
  cursor: pointer;
  user-select: none;
  opacity: 0.6;
  pointer-events: none;
  transition: all 0.3s ease;
}
.footer button.active{
  opacity: 1;
  pointer-events: auto;
}
		.wrapper{
  visibility: hidden;
  position: absolute;
  width: 300px;
  border-radius: 10px;
  background: #fff;
  box-shadow: 0 12px 35px rgba(0,0,0,0.1);
}
.wrapper .menu{
  padding: 10px 12px;
}
.content .item{
  list-style: none;
  font-size: 22px;
  height: 50px;
  display: flex;
  width: 100%;
  cursor: pointer;
  align-items: center;
  border-radius: 5px;
  margin-bottom: 2px;
  padding: 0 5px 0 10px;
}
.content .item:hover{
  background: #f2f2f2;
}
.content .item span{
  margin-left: 8px;
  font-size: 19px;
}
.content .setting{
  display: flex;
  margin-top: -5px;
  padding: 5px 12px;
  border-top: 1px solid #ccc;
}
.content .share{
  position: relative;
  justify-content: space-between;
}
.share .share-menu{
  position: absolute;
  background: #fff;
  width: 200px;
  right: -200px;
  top: -35px;
  padding: 13px;
  opacity: 0;
  pointer-events: none;
  border-radius: 10px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.08);
  transition: 0.2s ease;
}
.share:hover .share-menu{
  opacity: 1;
  pointer-events: auto;
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
				<a href="#" class="active"><i class='bx icon bxs-dashboard' ></i> Dashboard</a>
			</li>
			<li class="divider" data-text="Main">
				Main
			</li>
			<li>
				<a href="#"><i class='bx icon bxs-inbox' ></i> Category <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="dropdown-nav-menu">
					<li>
						<a href="./pages/episode.php">Anime Episode</a>
					</li>
					<li>
						<a href="pages/amv.php">AMV</a>
					</li>
					<li>
						<a href="./pages/movie.php">Anime Movies</a>
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
				<a href="pages/ep_insert.php"><i class='bx icon bxs-notepad' ></i> Episode Insert</a>
			</li>
			<li>
				<a href="pages/movie_insert.php"><i class='bx icon bx-table' ></i> Movie Insert</a>
			</li>
			<li>
				<a href="pages/avm_insert.php"><i class='bx icon bxs-chart' ></i> AMV Insert</a>
			</li>
			<li>
				<a href="pages/video_insert.php"><i class='bx icon bxs-notepad' ></i> Add video Episode</a>
			</li>
			<!-- customize -->
			<li class="divider" data-text="Table and forms">
				customize
			</li>
			<li>
				<a href="pages/banner.php"><i class='bx icon bxs-notepad' ></i> banner</a>
			</li>
			<li>
				<a href="pages/category.php"><i class='bx icon bxs-notepad' ></i> category</a>
			</li>
			<li>
				<a href="pages/navbar.php"><i class='bx icon bxs-notepad' ></i> Navbar</a>
			</li>
			

		</ul>
		

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
			<a href="pages/contact_show.php" class="nav-link">
				<i class='bx bxs-message-dots' ></i>
				<span>8</span>
			</a>
			<div class="divider"></div>
			<div class="profile">

				<img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
				<ul class="profile-menu">
				<?php
      $select_profile = $conn->prepare("SELECT * FROM `login` WHERE id = ?");
      $select_profile->execute([$admin_id]);
      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
   ?>
					<li>
						<a href="#"><i class='bx bxs-user-circle'></i>  <?= $fetch_profile['name']; ?></a>
					</li>
					<li>
						<a href="#"><i class='bx bxs-cog' ></i> Setting</a>
					</li>
					<li>
						<a href="../../pages/login/logout.php"><i class='bx bxs-log-out-circle' ></i> Logout</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			
			<h1>Dashboard</h1>
			<ul class="breadcrumbs">
				<li><a href="#">Home</a></li>
				<li>/</li>
				<li><a href="#" class="active">Dashboard</a></li>
			</ul>
			<div class="cards">
				<div class="card">
					<div class="head">
						<div>
							<h3><?php
									$servername="localhost";
									$username="root";
									$password="";
									$dbanme="z_new_database";
									$con=mysqli_connect($servername,$username,$password,$dbanme);
								$sql="SELECT count(id) AS total FROM video";
								$result=mysqli_query($con,$sql);
								$values=mysqli_fetch_assoc($result);
								$num_row=$values['total'];
								echo $num_row;
								?></h3>
								
							<p>Anime Episode</p>
						</div>
						<i class='bx bx-trending-up'></i>
					</div>
					<div class="progress">
						<div></div>
						<p class="label">50%</p>
					</div>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h3><?php
									$servername="localhost";
									$username="root";
									$password="";
									$dbanme="z_new_database";
									$con=mysqli_connect($servername,$username,$password,$dbanme);
								$sql="SELECT count(id) AS total FROM amv";
								$result=mysqli_query($con,$sql);
								$values=mysqli_fetch_assoc($result);
								$num_row=$values['total'];
								echo $num_row;
								?></h3>
							<p>AMV</p>
						</div>
						<i class='bx bx-trending-up'></i>
					</div>
					<div class="progress">
						<div></div>
						<p class="label">50%</p>
					</div>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h3><?php
									$servername="localhost";
									$username="root";
									$password="";
									$dbanme="z_new_database";
									$con=mysqli_connect($servername,$username,$password,$dbanme);
								$sql="SELECT count(id) AS total FROM movies";
								$result=mysqli_query($con,$sql);
								$values=mysqli_fetch_assoc($result);
								$num_row=$values['total'];
								echo $num_row;
								?></h3>
							<p>Anime Movies</p>
						</div>
						<i class='bx bx-trending-up'></i>
					</div>
					<div class="progress">
						<div></div>
						<p class="label">50%</p>
					</div>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h3><?php
									$servername="localhost";
									$username="root";
									$password="";
									$dbanme="z_new_database";
									$con=mysqli_connect($servername,$username,$password,$dbanme);
								$sql="SELECT count(id) AS total FROM login";
								$result=mysqli_query($con,$sql);
								$values=mysqli_fetch_assoc($result);
								$num_row=$values['total'];
								echo $num_row;
								?></h3>
							<p>Users</p>
						</div>
						<i class='bx bx-trending-up'></i>
					</div>
					<div class="progress">
						<div></div>
						<p class="label">10%</p>
					</div>
				</div>
			</div>
			<div class="data">
				<div class="card">
					<h3>Sales reports</h3>
					<div class="chart">
						<div id="chart">
						</div>
					</div>
				</div>
				<div class="card">
					<h3>Todo</h3>



					<div class="item">
    <header>Todo App</header>
    <div class="inputField">
      <input type="text" placeholder="Add your new todo">
      <button><i class="fas fa-plus"></i></button>
    </div>
    <ul class="todoList">
		<span></span>
      <!-- data are comes from local storage -->
    </ul>
    <div class="footer">
      <span>You have <span class="pendingTasks"></span> pending tasks</span>
      <button>Clear All</button>
    </div>
  </div>






					
				</div>
			</div>
			
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->



















<script>
	const contextMenu = document.querySelector(".wrapper"),
shareMenu = contextMenu.querySelector(".share-menu");

window.addEventListener("contextmenu", e => {
    e.preventDefault();
    let x = e.offsetX, y = e.offsetY,
    winWidth = window.innerWidth,
    winHeight = window.innerHeight,
    cmWidth = contextMenu.offsetWidth,
    cmHeight = contextMenu.offsetHeight;

    if(x > (winWidth - cmWidth - shareMenu.offsetWidth)) {
        shareMenu.style.left = "-200px";
    } else {
        shareMenu.style.left = "";
        shareMenu.style.right = "-200px";
    }

    x = x > winWidth - cmWidth ? winWidth - cmWidth - 5 : x;
    y = y > winHeight - cmHeight ? winHeight - cmHeight - 5 : y;
    
    contextMenu.style.left = `${x}px`;
    contextMenu.style.top = `${y}px`;
    contextMenu.style.visibility = "visible";
});

document.addEventListener("click", () => contextMenu.style.visibility = "hidden");
</script>



	

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="js/script.js"></script>
<script>
	// getting all required elements
const inputBox = document.querySelector(".inputField input");
const addBtn = document.querySelector(".inputField button");
const todoList = document.querySelector(".todoList");
const deleteAllBtn = document.querySelector(".footer button");

// onkeyup event
inputBox.onkeyup = ()=>{
  let userEnteredValue = inputBox.value; //getting user entered value
  if(userEnteredValue.trim() != 0){ //if the user value isn't only spaces
    addBtn.classList.add("active"); //active the add button
  }else{
    addBtn.classList.remove("active"); //unactive the add button
  }
}

showTasks(); //calling showTask function

addBtn.onclick = ()=>{ //when user click on plus icon button
  let userEnteredValue = inputBox.value; //getting input field value
  let getLocalStorageData = localStorage.getItem("New Todo"); //getting localstorage
  if(getLocalStorageData == null){ //if localstorage has no data
    listArray = []; //create a blank array
  }else{
    listArray = JSON.parse(getLocalStorageData);  //transforming json string into a js object
  }
  listArray.push(userEnteredValue); //pushing or adding new value in array
  localStorage.setItem("New Todo", JSON.stringify(listArray)); //transforming js object into a json string
  showTasks(); //calling showTask function
  addBtn.classList.remove("active"); //unactive the add button once the task added
}

function showTasks(){
  let getLocalStorageData = localStorage.getItem("New Todo");
  if(getLocalStorageData == null){
    listArray = [];
  }else{
    listArray = JSON.parse(getLocalStorageData); 
  }
  const pendingTasksNumb = document.querySelector(".pendingTasks");
  pendingTasksNumb.textContent = listArray.length; //passing the array length in pendingtask
  if(listArray.length > 0){ //if array length is greater than 0
    deleteAllBtn.classList.add("active"); //active the delete button
  }else{
    deleteAllBtn.classList.remove("active"); //unactive the delete button
  }
  let newLiTag = "";
  listArray.forEach((element, index) => {
    newLiTag += `<li>${element}<span class="icon" onclick="deleteTask(${index})"><i class="fas fa-trash"></i></span></li>`;
  });
  todoList.innerHTML = newLiTag; //adding new li tag inside ul tag
  inputBox.value = ""; //once task added leave the input field blank
}

// delete task function
function deleteTask(index){
  let getLocalStorageData = localStorage.getItem("New Todo");
  listArray = JSON.parse(getLocalStorageData);
  listArray.splice(index, 1); //delete or remove the li
  localStorage.setItem("New Todo", JSON.stringify(listArray));
  showTasks(); //call the showTasks function
}

// delete all tasks function
deleteAllBtn.onclick = ()=>{
  listArray = []; //empty the array
  localStorage.setItem("New Todo", JSON.stringify(listArray)); //set the item in localstorage
  showTasks(); //call the showTasks function
}
</script>
</body>
</html>
