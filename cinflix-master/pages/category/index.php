








<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Category Filter in JS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../../assets/css/main.css">
  <link rel="stylesheet" href="../../assets/css/media_query.css">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1120730383022833"
  crossorigin="anonymous"></script>

  <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/3aa24765f8.js" crossorigin="anonymous"></script>


    </head>
    <body>
        
        <div class = "main-container">
            <h2>News Categories</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut, velit.</p>
            <div class = "filter-container">

                <div class = "category-head">
                    <ul>
                        <div class = "category-title active" id = "all">
                            <li>All</li>
                            <span><i class = "fas fa-border-all"></i></span>
                        </div>


                        <?php
         include 'db.php';

         $sql1="SELECT * from category";
         $query1=mysqli_query($conn,$sql1);
         while ($info=mysqli_fetch_array($query1)) {
           ?>


                        <div class = "category-title" id = "<?php echo $info['category']; ?>">
                            <li><?php echo $info['category']; ?></li>
                            <span><i class = "fas fa-theater-masks"></i></span>
                        </div>
                        <?php
         }


        ?>
                    </ul>
                </div>


                <div class = "posts-collect">
                    <div class = "posts-main-container">
                        <!-- single post -->





                        <?php
         include 'db.php';

         $sql1="SELECT * from video";
         $query1=mysqli_query($conn,$sql1);
         while ($info=mysqli_fetch_array($query1)) {
           ?>



<div class = "all <?php echo $info['description']; ?>">
<div class="movie-card">
  
              <div class="card-head">
                <img src="<?php echo $info['thumbnail']; ?>" alt="" class="card-img">
  
                <div class="card-overlay">
  
                  <div class="bookmark">
                    <ion-icon name="bookmark-outline"></ion-icon>
                  </div>
  
                  <div class="rating">
                    <ion-icon name="star-outline"></ion-icon>
                    <span>6.8</span>
                  </div>
  
                  <div class="play">
                    <a href="<?php echo $info['href']; ?>">
                      <ion-icon name="play-circle-outline"></ion-icon>
                    </a>
                  </div>
  
                </div>
              </div>
  
              <div class="card-body">
                <h3 class="card-title"><?php echo $info['title']; ?></h3>
  
                <div class="card-info">
                  <span class="genre"><?php echo $info['description']; ?></span>
                  <span class="year"><?php echo $info['video']; ?></span>
                </div>
              </div>
  
            </div>
        </div>









           <?php
         }


        ?>




























                       
                    </div>
                </div>
            </div>
        </div>
        

        <!-- JS file -->
        <script src = "script.js"></script>
    </body>
</html>