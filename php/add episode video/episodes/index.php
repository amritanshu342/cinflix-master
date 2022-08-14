<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Responsive Video Playlist Tutorial</title>
   <style>
      body{
         overflow:hidden;
      }
   </style>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php
         include 'php/db.php';

         $sql1="SELECT * from ep_video_insert";
         $query1=mysqli_query($conn,$sql1);
         while ($info=mysqli_fetch_array($query1)) {
           ?>


           
<br><br><br><br><br><br>

<div id="<?php echo $info['id']; ?>">
<div class="container">

<?php echo $info['mainvideo']; ?>
   <div class="video-list-container">

   <?php echo $info['videolink']; ?>

   </div>

</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php
         }


        ?>









<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>