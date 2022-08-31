<?php
// Include database connection file
require_once "db.php";
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE video set  title='" . $_POST['title'] . "', description='" . $_POST['description'] . "' ,thumbnail='" . $_POST['thumbnail'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM video WHERE id='" . $_GET['userid'] . "'");
$info= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Update Record</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<style type="text/css">
.wrapper{
width: 500px;
margin: 0 auto;
}
</style>
</head>
<body>
<div class="wrapper">
<div class="container-fluid">
<div class="info">
<div class="col-md-12">
<div class="page-header">
<h2>Update Record</h2>
</div>
<p>Please edit the input values and submit to update the record.</p>
<form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
<div class="form-group">
<label>Name</label>
<input type="text" name="title" class="form-control" value="<?php echo $info["title"]; ?>">
</div>
<div class="form-group ">
<label>Email</label>
<input type="text" name="description" class="form-control" value="">
</div>
<div class="form-group">
<label>Mobile</label>
<input type="mobile" name="thumbnail" class="form-control" value="">
</div>
<div class="form-group">
<label>Mobile</label>
<input type="mobile" name="thumbnail" class="form-control" value="">
</div>
<div class="form-group">
<label>Mobile</label>
<input type="mobile" name="thumbnail" class="form-control" value="">
</div>
<input type="hidden" name="id" value="<?php echo $info["id"]; ?>"/>
<input type="submit" class="btn btn-primary" value="Submit">
<a href="users.php" class="btn btn-default">Cancel</a>
</form>
</div>
</div>        
</div>
</div>
</body>
</html>