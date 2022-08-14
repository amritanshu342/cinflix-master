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
        <label for="">mainvideo</label><br>
        <textarea name="mainvideo" style="height: 270px;width: 604px;" id="" cols="30" rows="10"value="
        
        <div class="main-video-container">
      <video src="  " loop controls class="main-video"></video>
      <h3 class="main-vid-title">    </h3>
   </div>
        
        " ></textarea><br><br>
        
        <label for="">videolink and title</label><br>
        <textarea id="description" name="videolink" rows="85" cols="80" value="<div class="list active">
      <div class="list">
         <video src="" class="list-video"></video>
         <h3 class="list-title">      </h3>
      </div>

      <div class="list">
         <video src="" class="list-video"></video>
         <h3 class="list-title">      </h3>
      </div>

      <div class="list">
         <video src="" class="list-video"></video>
         <h3 class="list-title">      </h3>
      </div>

      <div class="list">
         <video src="" class="list-video"></video>
         <h3 class="list-title">      </h3>
      </div>

      <div class="list">
         <video src="" class="list-video"></video>
         <h3 class="list-title">      </h3>
      </div>

      <div class="list">
         <video src="" class="list-video"></video>
         <h3 class="list-title">            </h3>
      </div>

      <div class="list">
         <video src="" class="list-video"></video>
         <h3 class="list-title">                        </h3>
      </div>

      <div class="list">
         <video src="" class="list-video"></video>
         <h3 class="list-title">                  </h3>
      </div>

      <div class="list">
         <video src="" class="list-video"></video>
         <h3 class="list-title">       </h3>
      </div>"></textarea><br><br>
        
        <input id="uploadbutton" type="submit" name="upload" value="Upload">

      </form>

    </div>
    <?php
    include 'db.php';
    if (isset($_POST['upload'])) {
      $title=$_POST['title'];
      $videolink=$_POST['videolink'];
      $mainvideo=$_POST['mainvideo'];


    

      

      $sql="INSERT INTO ep_video_insert(title,videolink,mainvideo,thumblain)
      values('$title','$videolink','$mainvideo','$thumblain')";

      $query=mysqli_query($conn,$sql);



    }

     ?>

  </body>
</html>
