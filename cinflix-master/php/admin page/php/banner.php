<?php
    include '../../Video Sharing Site/db.php';
    if (isset($_POST['upload'])) {
      $name=$_POST['name'];
      $category=$_POST['category'];
      $image=$_POST['image'];
      $hdate=$_POST['hdate'];
      $resolution=$_POST['resolution'];


    

      

      $sql="INSERT INTO banner(name,category,image,hdate,resolution)
      values('$name','$category','$image','$hdate','$resolution')";

      $query=mysqli_query($conn,$sql);



    }

     ?>