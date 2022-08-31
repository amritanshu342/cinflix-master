<?php

include 'db/conect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};


?>
    <?php
     $vpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIab = $_GET['vpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIab'];
     $select_products = $conn->prepare("SELECT * FROM `video` WHERE description = ?"); 
     $select_products->execute([$vpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIabvpwglOlD7e0Mab_jZVgNXcRtoIab]);
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>







<!DOCTYPE html>
<html lang="en">
<head>
    <title>Watch <?= $fetch_product['name']; ?> online free on MaxAnime</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="robots" content="index,follow"/>
<meta http-equiv="content-language" content="en"/>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
<meta name="apple-mobile-web-app-status-bar" content="#202125">
<meta name="theme-color" content="#202125">
<link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon"/>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">


<link rel="stylesheet" href="css/styles.min.css">
</head>
<body>
<div id="wrapper" data-id="18110" data-continue-episode="" data-page="watch">
<br><br>
</div>
<div class="clearfix"></div>
    <div class="prebreadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../../../index.php" title="Home">Home</a></li>
                    <li class="breadcrumb-item"><a
                                href="/ona"><?= $fetch_product['Type']; ?></a>
                    </li>
                    <li class="breadcrumb-item dynamic-name active"
                        data-jname="Watching Yi Nian Yong Heng: Chuan Cheng Pian">
                        <?= $fetch_product['name']; ?></li>
                </ol>
            </nav>
        </div>
    </div>
    <!--Begin: Main-->
    <div id="main-wrapper" class="layout-page layout-page-watch">
        <div class="container">
            <div class="player-extend-display"></div>
            <div id="main-content">
                <!--Begin: watch-block-->
                <div id="watch-block" class="">
                    <div class="player-wrap">
                        <div class="wb_-playerarea">
                            <div class="wb__-cover"
                                 style="background-image: url(https://img.bunnycdnn.ru/_r/300x400/100/25/e3/25e3a9b167fa92be9196d32728f6d391/25e3a9b167fa92be9196d32728f6d391.jpg)"></div>
                            <div class="loading-relative loading-box" id="embed-loading">
                                <div class="loading">
                                    <div class="span1"></div>
                                    <div class="span2"></div>
                                    <div class="span3"></div>
                                </div>
                            </div>
                            <iframe id="iframe-embed" src="" frameborder="0" scrolling="no"
                                    allow="autoplay; fullscreen" allowFullScreen webkitallowfullscreen
                                    mozallowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="player-controls">
                        <div class="pc-item pc-toggle pc-autoplay">
                            <div class="toggle-basic off quick-settings" data-option="auto_play">
                                <i class="far fa-check-square tb-on"></i>
                                <i class="far fa-square tb-off"></i>
                                <span class="tb-name"> Auto Play</span>
                            </div>
                        </div>
                        <div class="pc-item pc-toggle pc-autonext">
                            <div class="toggle-basic off quick-settings" data-option="auto_next">
                                <i class="far fa-check-square tb-on"></i>
                                <i class="far fa-square tb-off"></i>
                                <span class="tb-name"> Auto Next</span>
                            </div>
                        </div>
                        <div class="pc-item pc-toggle pc-light">
                            <div id="turn-off-light" class="toggle-basic">
                                <span class="tb-name"><i class="fas fa-lightbulb"></i> Light</span>
                            </div>
                        </div>
                        <div class="pc-item pc-fav" id="watch-list-content"></div>
                        <div class="pc-item pc-control block-prev" style="display: none;">
                            <a class="btn btn-sm btn-prev" href="javascript:;" onclick="prevEpisode()"><i
                                        class="fas fa-backward"></i> Prev</a>
                        </div>
                        <div class="pc-item pc-control block-next" style="display: none;">
                            <a class="btn btn-sm btn-next" href="javascript:;" onclick="nextEpisode()">Next <i
                                        class="fas fa-forward"></i></a>
                        </div>
                        <div id="extend-player" class="pc-item pc-zoomtv">
                            <div class="toggle-basic">
                                <i class="fas fa-expand tb-on"></i>
                                <i class="fas fa-compress tb-off"></i>
                                <span class="tb-name"> Expand</span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
               <br>
                <!--Begin: Section eps-list-->
                <section class="block_area block_area-episodes">
                <div class="block_area-content">
    
    <div id="episodes-page-1" class="episodes-ul" data-page="1" style="">
        
        <a href="/watch/a-will-eternal-18110?ep=92892" title="Episode 1" class="item ep-item active" data-number="1" data-id="92892">
            <div class="order">1</div>
        </a>
        
        <a href="/watch/a-will-eternal-18110?ep=93133" title="Episode 2" class="item ep-item" data-number="2" data-id="93133">
            <div class="order">2</div>
        </a>
        
        <a href="/watch/a-will-eternal-18110?ep=93254" title="Episode 3" class="item ep-item" data-number="3" data-id="93254">
            <div class="order">3</div>
        </a>
        
        <a href="/watch/a-will-eternal-18110?ep=93329" title="Episode 4" class="item ep-item" data-number="4" data-id="93329">
            <div class="order">4</div>
        </a>
        
        <a href="/watch/a-will-eternal-18110?ep=93472" title="Episode 5" class="item ep-item" data-number="5" data-id="93472">
            <div class="order">5</div>
        </a>
        
        <div class="clearfix"></div>
    </div>

</div>
                </section>
                <!--/End: Section eps-list-->
                
                <!--Begin: Section detail-->
                <section class="block_area block_area-detail">
                    <div class="block_area-content">
                        <div class="anime-detail">
                            <div class="anime-poster">
                                <div class="film-poster">
                                    <img src="<?= $fetch_product['thumbnail']; ?>"
                                         class="film-poster-img">
                                </div>
                            </div>
                            <div class="film-infor">
                                <div class="film-infor-top">
                                    <div id="vote-info"></div>
                                    <h2 class="film-name dynamic-name" data-jname="Yi Nian Yong Heng: Chuan Cheng Pian"><?= $fetch_product['name']; ?></h2>
                                    <div class="alias"><?= $fetch_product['description']; ?></div>
                                </div>
                                <div class="meta">
                                    <div class="col1">
                                        <div class="item">
                                            <div class="item-title">Type:</div>
                                            <div class="item-content">
                                                <a href=""><?= $fetch_product['Type']; ?></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="item">
                                            <div class="item-title">Studios:</div>
                                            <div class="item-content">
                                            <a href=""><?= $fetch_product['Studios']; ?></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="item">
                                            <div class="item-title">Date aired:</div>
                                            <div class="item-content">
                                                <span><?= $fetch_product['Date_aired']; ?></span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="item">
                                            <div class="item-title">Status:</div>
                                            <div class="item-content">
                                                <span><?= $fetch_product['Status']; ?></span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="item">
                                            <div class="item-title">Genre:</div>
                                            <div class="item-content">
                                                
                                                    <a href=""><?= $fetch_product['genre']; ?></a>
                                                
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col2">
                                        <div class="item">
                                            <div class="item-title">Scores:</div>
                                            <div class="item-content">
                                                <span><?= $fetch_product['Scores']; ?></span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="item">
                                            <div class="item-title">Premiered:</div>
                                            <div class="item-content">
                                                <span><?= $fetch_product['Premiered']; ?></span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="item">
                                            <div class="item-title">Duration:</div>
                                            <div class="item-content">
                                                <span><?= $fetch_product['Duration']; ?></span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="item">
                                            <div class="item-title">Quality:</div>
                                            <div class="item-content">
                                                <span><?= $fetch_product['Quality']; ?></span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="item">
                                            <div class="item-title">Views:</div>
                                            <div class="item-content">
                                                <span><?= $fetch_product['Views']; ?></span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </section>
                <!--/End: Section detail-->
                <!--Begin: Section comment-->
                <section class="block_area block_area-comment">
                    <div class="block_area-header block_area-header-tabs">
                        <div class="float-left bah-heading mr-4">
                            <h2 class="cat-heading">Comment</h2>
                        </div>
                        <div class="float-right bah-tabs">
                            <a href="javascript:;" data-type="episode" class="btn btn-sm btn-comment-tab active">Episode
                                <span
                                        id="cm-episode-number"></span></a>
                            <a href="javascript:;" data-type="anime" class="btn btn-sm btn-comment-tab">Anime</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="block_area-content">
                        <div id="disqus_thread"></div>
                        <div class="block mb-2 text-center">
                            <a href="javascript:;" class="btn btn-sm btn-long btn-focus more-padding btn-load-comment">Click
                                to load comments</a>
                        </div>
                    </div>
                </section>
                <!--/End: Section comment-->
                <!--Begin: Section film list-->
                <section class="block_area block_area-anime block_area_box">
                </section>
                <!--End: Section film list-->
                <div class="clearfix"></div>
            </div>
            <!--Begin: main-sidebar-->
            <div id="main-sidebar">
                
                    <section class="block_area block_area_sidebar block_area-realtime">
                        <div class="block_area-header">
                            <div class="float-left bah-heading mr-4">
                                <h2 class="cat-heading">Related Anime</h2>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="block_area-content">
                            <div class="cbox cbox-list cbox-realtime cbox-collapse">
                                <div class="cbox-content">
                                    <div class="anime-block-ul">
                                        <ul class="ulclear">
                                            
<li>
    <div class="film-poster item-qtip" data-id="3861">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/de/52/de52e49f62d1a5777d51dec04c176873/de52e49f62d1a5777d51dec04c176873.jpg" class="film-poster-img lazyload" alt="Yi Nian Yong Heng">
    </div>
    <div class="film-detail">
        <h3 class="film-name"><a href="/watch/yi-nian-yong-heng-3861" title="Yi Nian Yong Heng" class="dynamic-name"
                                 data-jname="Yi Nian Yong Heng">Yi Nian Yong Heng</a></h3>
        <div class="fd-infor">
            <span class="fdi-item">2020</span>
            <span class="dot"></span>
            <span class="fdi-item fdi-duration">
                
                    Ep 52/52
                
            </span>
        </div>
    </div>
    <div class="clearfix"></div>
</li>

                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                    
                                </div>
                            </div>
                        </div>
                    </section>
                
                <section class="block_area block_area_sidebar block_area-realtime">
    <div class="block_area-header">
        <div class="float-left bah-heading mr-2">
            <h2 class="cat-heading">Top Anime</h2>
        </div>
        <div class="float-right bah-tab-min">
            <ul class="nav nav-pills nav-fill nav-tabs anw-tabs">
                <li class="nav-item"><a data-toggle="tab" href="#top-viewed-day" class="nav-link active">Today</a>
                </li>
                <li class="nav-item"><a data-toggle="tab" href="#top-viewed-week" class="nav-link">Week</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#top-viewed-month" class="nav-link">Month</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="block_area-content">
        <div class="cbox cbox-list cbox-realtime">
            <div class="cbox-content">
                <div class="tab-content">
                    <div id="top-viewed-day" class="anime-block-ul anif-block-chart tab-pane active">
                        <ul class="ulclear">
                            
<li class="item-top">
    <div class="film-number"><span>1</span></div>
    <div class="film-poster item-qtip" data-id="100">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/54/90/5490cb32786d4f7fef0f40d7266df532/5490cb32786d4f7fef0f40d7266df532.jpg"
             class="film-poster-img lazyload" alt="One Piece">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/one-piece-100"
               title="One Piece" class="dynamic-name"
               data-jname="One Piece">One Piece</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>51,908</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>2</span></div>
    <div class="film-poster item-qtip" data-id="355">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/9c/bc/9cbcf87f54194742e7686119089478f8/9cbcf87f54194742e7686119089478f8.jpg"
             class="film-poster-img lazyload" alt="Naruto: Shippuden">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/naruto-shippuden-355"
               title="Naruto: Shippuden" class="dynamic-name"
               data-jname="Naruto: Shippuuden">Naruto: Shippuden</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>16,254</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>3</span></div>
    <div class="film-poster item-qtip" data-id="18126">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/b2/27/b227cc13eb573b4e5cdbe053b68ed0e8/b227cc13eb573b4e5cdbe053b68ed0e8.jpg"
             class="film-poster-img lazyload" alt="Harem in the Labyrinth of Another World (Uncensored)">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/harem-in-the-labyrinth-of-another-world-uncensored-18126"
               title="Harem in the Labyrinth of Another World (Uncensored)" class="dynamic-name"
               data-jname="Isekai Meikyuu de Harem wo (Uncensored)">Harem in the Labyrinth of Another World (Uncensored)</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>11,960</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>4</span></div>
    <div class="film-poster item-qtip" data-id="18076">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/6a/c7/6ac7e4623d5c97699058b8b4673cf8e5/6ac7e4623d5c97699058b8b4673cf8e5.png"
             class="film-poster-img lazyload" alt="Classroom of the Elite 2nd Season">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/classroom-of-the-elite-2nd-season-18076"
               title="Classroom of the Elite 2nd Season" class="dynamic-name"
               data-jname="Youkoso Jitsuryoku Shijou Shugi no Kyoushitsu e (TV) 2nd Season">Classroom of the Elite 2nd Season</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>9,810</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>5</span></div>
    <div class="film-poster item-qtip" data-id="2404">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/fe/f9/fef978948b50d1c4bb1c508acbf77249/fef978948b50d1c4bb1c508acbf77249.jpg"
             class="film-poster-img lazyload" alt="Black Clover">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/black-clover-2404"
               title="Black Clover" class="dynamic-name"
               data-jname="Black Clover">Black Clover</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>9,212</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>6</span></div>
    <div class="film-poster item-qtip" data-id="8143">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/05/4f/054ff70eabaeadc4ad9978054e274080/054ff70eabaeadc4ad9978054e274080.jpg"
             class="film-poster-img lazyload" alt="Boruto: Naruto Next Generations">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/boruto-naruto-next-generations-8143"
               title="Boruto: Naruto Next Generations" class="dynamic-name"
               data-jname="Boruto: Naruto Next Generations">Boruto: Naruto Next Generations</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>8,222</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>7</span></div>
    <div class="film-poster item-qtip" data-id="806">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/bd/5a/bd5ae1d387a59c5abcf5e1a6a616728c/bd5ae1d387a59c5abcf5e1a6a616728c.jpg"
             class="film-poster-img lazyload" alt="Bleach">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/bleach-806"
               title="Bleach" class="dynamic-name"
               data-jname="Bleach">Bleach</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>8,167</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>8</span></div>
    <div class="film-poster item-qtip" data-id="18088">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/c4/88/c4885983848251a200947a0e0e3b415f/c4885983848251a200947a0e0e3b415f.png"
             class="film-poster-img lazyload" alt="Black Summoner">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/black-summoner-18088"
               title="Black Summoner" class="dynamic-name"
               data-jname="Kuro no Shoukanshi">Black Summoner</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>7,863</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>9</span></div>
    <div class="film-poster item-qtip" data-id="18087">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/1e/7c/1e7ca3599cde40855ea3d01860382495/1e7ca3599cde40855ea3d01860382495.jpg"
             class="film-poster-img lazyload" alt="Parallel World Pharmacy">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/parallel-world-pharmacy-18087"
               title="Parallel World Pharmacy" class="dynamic-name"
               data-jname="Isekai Yakkyoku">Parallel World Pharmacy</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>6,683</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>10</span></div>
    <div class="film-poster item-qtip" data-id="677">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/5d/b4/5db400c33f7494bc8ae96f9e634958d0/5db400c33f7494bc8ae96f9e634958d0.jpg"
             class="film-poster-img lazyload" alt="Naruto">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/naruto-677"
               title="Naruto" class="dynamic-name"
               data-jname="Naruto">Naruto</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>6,197</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

                        </ul>
                    </div>
                    <div id="top-viewed-week" class="anime-block-ul anif-block-chart tab-pane">
                        <ul class="ulclear">
                            
<li class="item-top">
    <div class="film-number"><span>1</span></div>
    <div class="film-poster item-qtip" data-id="100">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/54/90/5490cb32786d4f7fef0f40d7266df532/5490cb32786d4f7fef0f40d7266df532.jpg"
             class="film-poster-img lazyload" alt="One Piece">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/one-piece-100"
               title="One Piece" class="dynamic-name"
               data-jname="One Piece">One Piece</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>582,871</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>2</span></div>
    <div class="film-poster item-qtip" data-id="355">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/9c/bc/9cbcf87f54194742e7686119089478f8/9cbcf87f54194742e7686119089478f8.jpg"
             class="film-poster-img lazyload" alt="Naruto: Shippuden">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/naruto-shippuden-355"
               title="Naruto: Shippuden" class="dynamic-name"
               data-jname="Naruto: Shippuuden">Naruto: Shippuden</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>199,900</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>3</span></div>
    <div class="film-poster item-qtip" data-id="18126">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/b2/27/b227cc13eb573b4e5cdbe053b68ed0e8/b227cc13eb573b4e5cdbe053b68ed0e8.jpg"
             class="film-poster-img lazyload" alt="Harem in the Labyrinth of Another World (Uncensored)">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/harem-in-the-labyrinth-of-another-world-uncensored-18126"
               title="Harem in the Labyrinth of Another World (Uncensored)" class="dynamic-name"
               data-jname="Isekai Meikyuu de Harem wo (Uncensored)">Harem in the Labyrinth of Another World (Uncensored)</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>188,163</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>4</span></div>
    <div class="film-poster item-qtip" data-id="18075">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/ef/1d/ef1d1028cf6c177587805651b78282a6/ef1d1028cf6c177587805651b78282a6.jpg"
             class="film-poster-img lazyload" alt="Overlord IV">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/overlord-iv-18075"
               title="Overlord IV" class="dynamic-name"
               data-jname="Overlord IV">Overlord IV</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>128,459</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>5</span></div>
    <div class="film-poster item-qtip" data-id="18076">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/6a/c7/6ac7e4623d5c97699058b8b4673cf8e5/6ac7e4623d5c97699058b8b4673cf8e5.png"
             class="film-poster-img lazyload" alt="Classroom of the Elite 2nd Season">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/classroom-of-the-elite-2nd-season-18076"
               title="Classroom of the Elite 2nd Season" class="dynamic-name"
               data-jname="Youkoso Jitsuryoku Shijou Shugi no Kyoushitsu e (TV) 2nd Season">Classroom of the Elite 2nd Season</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>109,694</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>6</span></div>
    <div class="film-poster item-qtip" data-id="2404">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/fe/f9/fef978948b50d1c4bb1c508acbf77249/fef978948b50d1c4bb1c508acbf77249.jpg"
             class="film-poster-img lazyload" alt="Black Clover">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/black-clover-2404"
               title="Black Clover" class="dynamic-name"
               data-jname="Black Clover">Black Clover</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>109,242</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>7</span></div>
    <div class="film-poster item-qtip" data-id="806">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/bd/5a/bd5ae1d387a59c5abcf5e1a6a616728c/bd5ae1d387a59c5abcf5e1a6a616728c.jpg"
             class="film-poster-img lazyload" alt="Bleach">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/bleach-806"
               title="Bleach" class="dynamic-name"
               data-jname="Bleach">Bleach</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>99,892</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>8</span></div>
    <div class="film-poster item-qtip" data-id="18081">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/a4/1d/a41d2b49f816b8e0971957b7779d3e43/a41d2b49f816b8e0971957b7779d3e43.jpg"
             class="film-poster-img lazyload" alt="Vermeil in Gold">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/vermeil-in-gold-18081"
               title="Vermeil in Gold" class="dynamic-name"
               data-jname="Kinsou no Vermeil: Gakeppuchi Majutsushi wa Saikyou no Yakusai to Mahou Sekai wo Tsukisusumu">Vermeil in Gold</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>92,633</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>9</span></div>
    <div class="film-poster item-qtip" data-id="18041">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/ed/0a/ed0afd9001c2e535b5bcef879a38e36f/ed0afd9001c2e535b5bcef879a38e36f.png"
             class="film-poster-img lazyload" alt="Call of the Night">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/call-of-the-night-18041"
               title="Call of the Night" class="dynamic-name"
               data-jname="Yofukashi no Uta">Call of the Night</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>84,708</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>10</span></div>
    <div class="film-poster item-qtip" data-id="8143">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/05/4f/054ff70eabaeadc4ad9978054e274080/054ff70eabaeadc4ad9978054e274080.jpg"
             class="film-poster-img lazyload" alt="Boruto: Naruto Next Generations">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/boruto-naruto-next-generations-8143"
               title="Boruto: Naruto Next Generations" class="dynamic-name"
               data-jname="Boruto: Naruto Next Generations">Boruto: Naruto Next Generations</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>83,572</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

                        </ul>
                    </div>
                    <div id="top-viewed-month" class="anime-block-ul anif-block-chart tab-pane">
                        <ul class="ulclear">
                            
<li class="item-top">
    <div class="film-number"><span>1</span></div>
    <div class="film-poster item-qtip" data-id="100">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/54/90/5490cb32786d4f7fef0f40d7266df532/5490cb32786d4f7fef0f40d7266df532.jpg"
             class="film-poster-img lazyload" alt="One Piece">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/one-piece-100"
               title="One Piece" class="dynamic-name"
               data-jname="One Piece">One Piece</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>16,188,605</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>2</span></div>
    <div class="film-poster item-qtip" data-id="355">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/9c/bc/9cbcf87f54194742e7686119089478f8/9cbcf87f54194742e7686119089478f8.jpg"
             class="film-poster-img lazyload" alt="Naruto: Shippuden">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/naruto-shippuden-355"
               title="Naruto: Shippuden" class="dynamic-name"
               data-jname="Naruto: Shippuuden">Naruto: Shippuden</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>4,827,911</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>3</span></div>
    <div class="film-poster item-qtip" data-id="18126">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/b2/27/b227cc13eb573b4e5cdbe053b68ed0e8/b227cc13eb573b4e5cdbe053b68ed0e8.jpg"
             class="film-poster-img lazyload" alt="Harem in the Labyrinth of Another World (Uncensored)">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/harem-in-the-labyrinth-of-another-world-uncensored-18126"
               title="Harem in the Labyrinth of Another World (Uncensored)" class="dynamic-name"
               data-jname="Isekai Meikyuu de Harem wo (Uncensored)">Harem in the Labyrinth of Another World (Uncensored)</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>4,183,444</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>4</span></div>
    <div class="film-poster item-qtip" data-id="18076">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/6a/c7/6ac7e4623d5c97699058b8b4673cf8e5/6ac7e4623d5c97699058b8b4673cf8e5.png"
             class="film-poster-img lazyload" alt="Classroom of the Elite 2nd Season">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/classroom-of-the-elite-2nd-season-18076"
               title="Classroom of the Elite 2nd Season" class="dynamic-name"
               data-jname="Youkoso Jitsuryoku Shijou Shugi no Kyoushitsu e (TV) 2nd Season">Classroom of the Elite 2nd Season</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>3,386,232</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>5</span></div>
    <div class="film-poster item-qtip" data-id="18088">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/c4/88/c4885983848251a200947a0e0e3b415f/c4885983848251a200947a0e0e3b415f.png"
             class="film-poster-img lazyload" alt="Black Summoner">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/black-summoner-18088"
               title="Black Summoner" class="dynamic-name"
               data-jname="Kuro no Shoukanshi">Black Summoner</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>2,967,065</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>6</span></div>
    <div class="film-poster item-qtip" data-id="18081">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/a4/1d/a41d2b49f816b8e0971957b7779d3e43/a41d2b49f816b8e0971957b7779d3e43.jpg"
             class="film-poster-img lazyload" alt="Vermeil in Gold">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/vermeil-in-gold-18081"
               title="Vermeil in Gold" class="dynamic-name"
               data-jname="Kinsou no Vermeil: Gakeppuchi Majutsushi wa Saikyou no Yakusai to Mahou Sekai wo Tsukisusumu">Vermeil in Gold</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>2,768,788</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>7</span></div>
    <div class="film-poster item-qtip" data-id="2404">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/fe/f9/fef978948b50d1c4bb1c508acbf77249/fef978948b50d1c4bb1c508acbf77249.jpg"
             class="film-poster-img lazyload" alt="Black Clover">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/black-clover-2404"
               title="Black Clover" class="dynamic-name"
               data-jname="Black Clover">Black Clover</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>2,696,827</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>8</span></div>
    <div class="film-poster item-qtip" data-id="18075">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/ef/1d/ef1d1028cf6c177587805651b78282a6/ef1d1028cf6c177587805651b78282a6.jpg"
             class="film-poster-img lazyload" alt="Overlord IV">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/overlord-iv-18075"
               title="Overlord IV" class="dynamic-name"
               data-jname="Overlord IV">Overlord IV</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>2,641,767</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>9</span></div>
    <div class="film-poster item-qtip" data-id="806">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/bd/5a/bd5ae1d387a59c5abcf5e1a6a616728c/bd5ae1d387a59c5abcf5e1a6a616728c.jpg"
             class="film-poster-img lazyload" alt="Bleach">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/bleach-806"
               title="Bleach" class="dynamic-name"
               data-jname="Bleach">Bleach</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>2,613,061</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

<li class="">
    <div class="film-number"><span>10</span></div>
    <div class="film-poster item-qtip" data-id="8143">
        <img data-src="https://img.bunnycdnn.ru/_r/300x400/100/05/4f/054ff70eabaeadc4ad9978054e274080/054ff70eabaeadc4ad9978054e274080.jpg"
             class="film-poster-img lazyload" alt="Boruto: Naruto Next Generations">
    </div>
    <div class="film-detail">
        <h3 class="film-name">
            <a href="/watch/boruto-naruto-next-generations-8143"
               title="Boruto: Naruto Next Generations" class="dynamic-name"
               data-jname="Boruto: Naruto Next Generations">Boruto: Naruto Next Generations</a>
        </h3>
        <div class="fd-infor">
            <span class="fdi-item mr-2"><i class="fas fa-eye mr-1"></i>2,391,831</span>
            <!--            <span class="fdi-item"><i class="fas fa-heart mr-1"></i>50211</span>-->
        </div>
    </div>
    <div class="clearfix"></div>
</li>

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>

            </div>
            <!--/End: main-sidebar-->
            <div class="clearfix"></div>
        </div>
    </div>
</div>


    <script>var recaptchaSiteKey = '6LcJeB8eAAAAAK9SJTPy75A2v4iIEOa-iNIpDzJM';</script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LcJeB8eAAAAAK9SJTPy75A2v4iIEOa-iNIpDzJM"></script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-612507a6a48f43d8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"
        integrity="sha512-jGsMH83oKe9asCpkOVkBnUrDDTp8wl+adkB2D+//JtlxO4SrLoJdhbOysIFQJloQFD+C4Fl1rMsQZF76JjV0eQ=="
        crossorigin="anonymous"></script>
<script type="text/javascript"
        src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
        integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA=="
        crossorigin="anonymous"></script>
<script type="text/javascript" src="js/app.ob.min.js"></script>
<script type="application/json"
        id="userSettings"></script>


    <script type="text/javascript" src="//oackoubs.com/5/4709567" async data-cfasync="false"></script>
    <script>(function(d,z,s){s.src='//'+d+'/400/'+z;try{(document.body||document.documentElement).appendChild(s)}catch(e){}})('outoctillerytor.com',4724761,document.createElement('script'))</script>

<script type="text/javascript" src="js/safe.ob.min.js"></script>
</body>
</html>

<?php
      }
   }else{
    echo '<meta http-equiv="refresh" content="0; url=../../../index.php">';
   }
   ?>