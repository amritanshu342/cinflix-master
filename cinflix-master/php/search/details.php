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
  <title>Details</title>
  
</head>

<body>

<?php
         include '../movies/db.php';

         $sql1="SELECT * from video";
         $query1=mysqli_query($conn,$sql1);
         while ($info=mysqli_fetch_array($query1)) {
           ?>


<?php echo $info['title']; ?>
                  <?php echo $info['video']; ?>
           <?php
         }


        ?>
</body>

</html>