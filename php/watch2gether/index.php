

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="This is the website where you can able to see all anime">
  <link rel="shortcut icon" href="../../assets/images/icon.png" type="image/png">
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WEBJJK55FW"></script>
<style>
    #show-list a {
    border: 2px solid #7db5e6;
    color: #2196f3;
    text-align: center;
    height: 32px;
    align-items: center;
    border-radius: 14px;
}
</style>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WEBJJK55FW');
</script>
  <title>Maxed Anime| website you can see any anime</title>

  <!--
    - custom c
  -->

<!-- game -->

<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../assets/css/main.css">
  <link rel="stylesheet" href="../../assets/css/media_query.css">
  <link rel="stylesheet" href="../../assets/css/loadmore.css">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1120730383022833"
  crossorigin="anonymous"></script>

  <link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/3aa24765f8.js" crossorigin="anonymous"></script>


</head>

<body>



  <!--
    - main container
  -->
  <div class="container">

    <!--
      - #HEADER SECTION
    -->

    <header class="">
      <div class="navbar">

        <!--
          - menu button for small screen
        -->
        <button class="navbar-menu-btn">
          <span class="one"></span>
          <span class="two"></span>
          <span class="three"></span>
        </button>

        <a href="#" class="navbar-brand">
          
          <img src="../../assets/images/logo.png" alt="">
        </a>

        <!--
          - navbar navigation
        -->

        <nav class="">
          <ul class="navbar-nav">
          <?php
         include '../../php/Video Sharing Site/db.php';

         $sql1="SELECT * from navbar";
         $query1=mysqli_query($conn,$sql1);
         while ($info=mysqli_fetch_array($query1)) {
           ?>

           
            <li> <a href="<?php echo $info['href']; ?>" class="navbar-link"><?php echo $info['title']; ?></a> </li>

            <?php
         }


        ?>
          </ul>
        </nav>

        <!--
          - search and sign-in
        -->

        <div class="navbar-actions">
          <form action="../../php/add episode video/episodes/index.php#php/add episode video/episodes/index.php#" method="post" class="navbar-form">
            <input type="text" name="search"  id="search" placeholder="I'm looking for..." class="navbar-form-search" autocomplete="off" require>

            <button class="navbar-form-btn">
              <ion-icon name="search-outline"></ion-icon>
            </button>

            <button class="navbar-form-close">
              <ion-icon name="close-circle-outline"></ion-icon>
            </button>
          </form>


          <!--
            - search button for small screen
          -->

          <button class="navbar-search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

          <a href="../../pages/login/login.php" class="navbar-signin">
            <span>Sign in</span>
            <ion-icon name="log-in-outline"></ion-icon>
          </a>

        </div>

      </div>
    </header>
    




    <!--
      - MAIN SECTION
    -->
    <style>
      div#show-list a {
  color: white;
}
    </style>
    <main>
    <div id="show-list" style="
    z-index: 100;
    position: absolute;
    right: 27rem;
">

          <!-- Here autocomplete list will be display -->
        </div>
 

      



      <!--
        - #CATEGORY SECTION
      -->
      <br><br>
      <section class="category" id="category">

        <h2 class="section-headingg">  Home / Watch2gether</h2><br><br><br>

        <div class="category-grid">

        <?php
         include '../../php/movies/db.php';

         $sql1="SELECT * from category";
         $query1=mysqli_query($conn,$sql1);
         while ($info=mysqli_fetch_array($query1)) {
           ?>


          <a href="<?php echo $info['href']; ?>">
          <div class="category-card">
            <img src=" <?php echo $info['img']; ?>" alt="" class="card-img">
            <div class="name"> <?php echo $info['category']; ?></div>
            <div class="total"> <?php echo $info['contain']; ?></div>
          </div>
          </a>

          <?php
         }


        ?>


          

        </div>

      </section>





      <!--
        - #LIVE SECTION
      -->


    </main>





    <!--
      - FOOTER SECTION
    -->
    <footer>

      <div class="footer-content">

        <div class="footer-brand">
          <img src="../../assets/images/logo.png" alt="" class="footer-logo">
          <p class="slogan">Movies & TV Shows, Online cinema,
            Movie database HTML Template.</p>


          <div class="social-link">

            <a href="#">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-tiktok"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>

          </div>
        </div>


        <div class="footer-links">
          <ul>

            <h4 class="link-heading">CineFlix</h4>

            <li class="link-item"><a href="#">About us</a></li>
            <li class="link-item"><a href="#">My profile</a></li>
            <li class="link-item"><a href="#">Pricing plans</a></li>
            <li class="link-item"><a href="#">Contacts</a></li>

          </ul>

          <ul>

            <h4 class="link-heading">Browse</h4>

            <li class="link-item"><a href="#">Live Tv</a></li>
            <li class="link-item"><a href="#">Live News</a></li>
            <li class="link-item"><a href="#">Live Sports</a></li>
            <li class="link-item"><a href="#">Streaming Library</a></li>

          </ul>

          <ul>

            <li class="link-item"><a href="#">TV Shows</a></li>
            <li class="link-item"><a href="#">Movies</a></li>
            <li class="link-item"><a href="#">Kids</a></li>
            <li class="link-item"><a href="#">Collections</a></li>

          </ul>

          <ul>

            <h4 class="link-heading">Help</h4>

            <li class="link-item"><a href="#">Account & Billing</a></li>
            <li class="link-item"><a href="#">Plans & Pricing</a></li>
            <li class="link-item"><a href="#">Supported devices</a></li>
            <li class="link-item"><a href="#">Accessibility</a></li>

          </ul>
        </div>

      </div>

      <div class="footer-copyright">

        <div class="copyright">
          <p>&copy; copyright 2021 CineFlix</p>
        </div>

        <div class="wrapper">
          <a href="#">Privacy policy</a>
          <a href="#">Terms and conditions</a>
        </div>

      </div>

    </footer>

  </div>





  <!--
    - custom js link
  -->
  <script src="../../assets/js/main.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(".movie-card").slice(0, 21).show()
    $(".load-more").on("click", function(){
        $(".movie-card:hidden").slice(0, 21).slideDown()
        if ($(".movie-card:hidden").length == 0) {
            $(".button-1").fadeOut('slow')
        }
    })
</script>

  
   
  
      
     
       
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../../script.js"></script>
</body>

</html>