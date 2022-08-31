<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Insert Video</title>
    <style media="screen">
      body{
        padding:0px;
        margin:0px;
      }
      h1{
        background-color: teal;
        text-align: center;
        color: white;
        padding: 8px;
        font-size: 48px;
      }
      div{
        border: 2px solid black;
        width: 650px;
        margin-left: 400px;
        padding-left: 10px;
        padding-bottom: 20px;
      }
      h2{
        text-align: center;
        text-decoration: underline;
      }
      #title{
        width: 600px;
        padding: 10px;
        font-size: 17px;
        border: 2px solid black;
        margin-top: 10px;
      }
      label{
        font-size: 20px;
        font-weight: bold;
      }
      #uploadbutton{
        margin-left: 270px;
        font-size: 19px;
        font-weight: bold;
        padding: 5px;
        width: 100px;
      }
      #description{
        border: 2px solid black;
        width: 600px;
        margin-top: 10px;
      }
      input[type=file]{
        font-size: 18px;
      }
    </style>
  </head>
  <body>
    <h1>Video Sharing Site</h1>
    <div class="">
      <h2>Upload Your Video</h2>
      <form class="" action="video_insert.php" method="post" enctype="multipart/form-data">
        <label for="">video title</label><br>
        <input id="title" type="text" name="title" value="" placeholder="Enter Video Title" required><br><br>
        <label for="">video channel logo</label><br>
        <input id="" type="text" name="logo" value="" placeholder="Enter Video Title" required><br><br>
        <label for="">channel thumblain</label><br>
        <input id="" type="text" name="thumbnail" value="" placeholder="Enter Video Title" required><br><br>
        <label for="">channel name</label><br>
        <input id="" type="text" name="video" value="" placeholder="Enter Video Title" required><br><br>
        <label for="">video url</label><br>
        <textarea id="description" name="description" rows="8" cols="80" placeholder="Enter Video Description" required></textarea><br><br>
        
        <input id="uploadbutton" type="submit" name="upload" value="Upload">

      </form>

    </div>
    <?php
    include 'db.php';
    if (isset($_POST['upload'])) {
      $title=$_POST['title'];
      $description=$_POST['description'];
      $video=$_POST['video'];
      $logo=$_POST['logo'];
      $thumbnail=$_POST['thumbnail'];

     

      

      $sql="INSERT INTO amv(title,description,thumbnail,video,logo)
      values('$title','$description','$thumbnail','$video', '$logo')";

      $query=mysqli_query($conn,$sql);



    }

     ?>

  </body>
</html>
