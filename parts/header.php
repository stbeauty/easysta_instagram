<?php 
   ini_set('session.gc_maxlifetime', 36000);
    header("Access-Control-Allow-Origin: *");
   session_set_cookie_params(36000);
   session_start();
   error_reporting(E_ALL);
   ini_set('display_errors', 1);

   include 'inc.php'; 
?> 
<html lang="en">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <title><?php echo langs::getLang('web_page_title'); ?></title>
        
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      
      <link rel="stylesheet" href="http://www.easysta.com/assets/css/pages/style.css?v=17">
      <link rel="stylesheet" href="http://www.easysta.com/assets/css/pages/icons.css?v=17">
      <link rel="stylesheet" href="http://www.easysta.com/assets/css/pages/main.css?v=17">  
      <link rel="stylesheet" type="text/css" href="http://www.easysta.com/assets/css/login.css?v=17">

      <meta http-equiv="x-dns-prefetch-control" content="on">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <meta name="format-detection" content="telephone=no">
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="HandheldFriendly" content="true">
      <meta name="MobileOptimized" content="width">
      <?php


    
 
      if (isset($UserInfo['username'])) {
         ?>  
            <meta id="title" property="og:title" content="<?php echo $UserInfo['username']?>">
            <meta id="title" property="title" content="<?php echo $UserInfo['username']?>">
         <?php
      } else {
         ?>    
            <meta id="title" property="og:title" content="">
         <?php
      }

      if (isset($UserInfo['biography'])) {
         ?>
            <meta id="description" property="og:description" content="<?php echo $UserInfo['biography']?>">
            <meta id="description" property="description" content="<?php echo $UserInfo['biography']?>">
         <?php
      } else {
         ?>
            <meta id="description" property="og:description" content="">
         <?php
      }

      if (isset($UserInfo['profile_pic_url'])) {
         ?>
            <meta id="image" property="og:image" content="<?php echo $UserInfo['profile_pic_url']?>">
            <meta id="image" property="image" content="<?php echo $UserInfo['profile_pic_url']?>">
         <?php
      } else {
         ?> 
            <meta id="image" property="og:image" content="https://easysta.com/assets/img/img6.jpg">
            <meta id="image" property="image" content="https://easysta.com/assets/img/img6.jpg">
         <?php
      }

      ?> 
 
      <meta property="og:url" content="http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ?>">
      <meta property="og:site_name" content="easysta">
      <meta property="og:type" content="article">

 
      <link rel="canonical" href="http://easysta.com/">
      <link rel="alternate" href="http://easysta.com/?lang=en" hreflang="en">
      <link rel="alternate" href="http://easysta.com/?lang=ru" hreflang="ru">
      <link rel="alternate" href="http://easysta.com/?lang=tr" hreflang="tr">
      <link rel="alternate" href="http://easysta.com/?lang=ko" hreflang="ko">
      <link rel="alternate" href="http://easysta.com/?lang=es" hreflang="es">
      <link rel="alternate" href="http://easysta.com/?lang=de" hreflang="de">
      <link rel="alternate" href="http://easysta.com/?lang=ja" hreflang="ja">
      <link rel="alternate" href="http://easysta.com/?lang=pt" hreflang="pt">
      <link rel="alternate" href="http://easysta.com/?lang=uk" hreflang="uk">

      <meta id="Keywords" name="Keywords" content="insta downloader, save instagram pictures, instagram photo downloader, download foto instagram, instagram posts">

      <script src="http://www.easysta.com/assets/js/js.cookie.min.js?v=17"></script>
      
      <script src="http://www.easysta.com/assets/js/seo.js?v=17"></script>
      <script src="http://www.easysta.com/assets/js/ads.js?v=17"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js?v=17"></script>
      <script type="text/javascript" src="http://www.easysta.com/assets/js/instagram.api.js?v=17"></script>
      <script defer="" src="https://use.fontawesome.com/releases/v5.0.9/js/all.js?v=17" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
     
      
      <script type="text/javascript" src="http://www.easysta.com/assets/js/main.js?v=17"></script>
     
      <link rel="icon" type="image/png" sizes="16x16" href="https://easysta.com/assets/img/icon.png">
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?v=17">
      
      <link rel="stylesheet" href="http://www.easysta.com/assets/css/progressive-image.min.css?v=17">
      <link rel="stylesheet" href="http://www.easysta.com/assets/css/shareme.css?v=17">
      <script src="http://www.easysta.com/assets/js/progressive-image.min.js?v=17"></script>
      <script src="http://www.easysta.com/assets/js/pagination.min.js?v=17"></script>
      
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css?v=17">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js?v=17"></script> 
      <img src="http://www.easysta.com/assets/img/loader.gif" id="loader-gif" style="margin: auto auto;padding-top: 120px;display: block;">
      <script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js?v=17"></script>
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?v=17"></script>
   <script>
         (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-2681492222039168",
          enable_page_level_ads: true
     });
</script>
   </head> 
   <body data-gr-c-s-loaded="true" style="">
   <div class="cont" style="display: none;">
      <style type="text/css">
         .login-page .form input[type="submit"] {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #4CAF50;
            width: 100%;
            padding: 1px !important;
            border: 0; 
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
         }
         #myBtn {
      display: none;
    position: fixed;
    bottom: 20px;
    /* padding-bottom: 15px; */
    right: 30px;
    z-index: 99;
    font-size: 18px;
    border: none;
        height: 50px;
    width: 50px;
    /* outline: none; */
    background-color: #cac3c3;
    color: white;
    cursor: pointer;
    padding: 15px;
    border-radius: 39px;
}
      </style>
      <div id="ad-heade" style="width: 100%; display: none;">
         <div id="h12c_300x250_688728" style="display: block; z-index: 2147483646; right: 0px; bottom: 0px; position: fixed; border: 0px solid rgb(0, 0, 0); padding: 0px; width: 300px; height: 250px;
"> 
              <!-- easysta-right-ad -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2681492222039168" data-ad-slot="2918551115" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <add key="webpages:Enabled" value="true" />
         </div>
      </div>
     
      <script async="" src="https://cdnjs.cloudflare.com/ajax/libs/loadjs/3.6.1/loadjs.min.js"></script>
      
     

      <div id="myModal" class="modal">
         <div class="login-page">
            <span class="close">×</span>
            <div class="form">
               <form class="register-form" action="modules/ajax.php" method="post">
                  <input name="email" type="email" placeholder="<?php echo langs::getLang('email'); ?>" required>
                  <input name="pwd" type="password" placeholder="<?php echo langs::getLang('password'); ?>" required>
                  <input type="hidden" name="callback" value="signup">
                  <input type="submit" name="submit" value="<?php echo langs::getLang('create_an_account'); ?>"> 
                  <p class="message">
                     <?php echo langs::getLang('already_registered'); ?>? <a href="javascript:;" class="create-account">
                     <?php echo langs::getLang('login'); ?> </a>
                  </p>
               </form>
                <form class="register-form class-regist" action="modules/ajax.php" 
                <?php if (!isset($_SESSION["UserLigin"]) || $_SESSION["UserLigin"] != 1) { ?> 
                  style="display: block !important;"
                <?php  } ?> method="post">
                  <input name="email" type="email" placeholder="<?php echo langs::getLang('email'); ?>">
                  <input name="pwd" type="password" placeholder="<?php echo langs::getLang('password'); ?>">
                  <input type="hidden" name="callback" value="signin">
                  <input type="submit" name="submit" value="<?php echo langs::getLang('login'); ?>"> 
                  <p class="message">
                     <?php echo langs::getLang('not_registered'); ?>? <a href="javascript:;" class="create-account">
                     <?php echo langs::getLang('create_an_account'); ?> </a>
                  </p>
               </form> 
            </div>
         </div>
      </div> 
      <style>
        
      </style>

      <div id="header">
         <header>
            <a href="http://www.easysta.com/" class="logo" rel="nofollow">
            <img src="http://www.easysta.com/assets/img/Logo.png" class="logo-img" layout="fixed">
            </a>
            <section>
               <ul class="left mob">
                  <li class="divider">
                     <?php echo langs::getLang('navigation'); ?> 
                  </li>
               </ul>
               <ul class="right menu-itams right-menu">
                  <li>
                     <a href="javascript:;" data-toggle="dropdown" aria-expanded="true" rel="nofollow" class="toggle open-nav"><i class="fas fa-ellipsis-v"></i></a>
                     <ul class="dropdown-menu pull-right mob">
                        <?php 
                           if (!isset($_SESSION["UserLigin"]) || $_SESSION["UserLigin"] != 1) {
                              ?> 
                                 <li>
                                    <a href="javascript:;" style="display: none;" class="authMe" title="<?php echo langs::getLang('login'); ?> ">
                                    <?php echo langs::getLang('login'); ?>  </a>
                                 </li>
                              <?php
                           }
                        ?>
                        
                        <li>
                           <a href="http://www.easysta.com/privacy.php" rel="nofollow" title="<?php echo langs::getLang('privacy_policy'); ?>">
                           <?php echo langs::getLang('privacy_policy'); ?></a>
                        </li>
                        <li>
                           <a href="http://www.easysta.com/contact.php" rel="nofollow" title="<?php echo langs::getLang('contact'); ?>">
                           <?php echo langs::getLang('contact'); ?> </a>
                        </li>
                        <?php 
                           if (isset($_SESSION["UserLigin"]) && $_SESSION["UserLigin"] == 1) {
                              ?> 
                                 <li>
                                    <a href="http://www.easysta.com/modules/ajax.php?logout=1" class="logout-me" title="<?php echo langs::getLang('logout'); ?>" rel="nofollow">
                                    <?php echo langs::getLang('logout'); ?> </a>
                                 </li>
                              <?php
                           }
                        ?>
                     </ul>
                  </li>
               </ul>
            </section>
            <ul class="right menu-itams">
               <li><a href="http://www.easysta.com/langs.php" title="<?php echo langs::getLang('english'); ?>"><i class="fas fa-language icon-language"></i></a></li>
               <li><a href="http://www.easysta.com/search.php" title="<?php echo langs::getLang('search'); ?>"><i class="fas fa-search icon-search"></i><span class="search-text"><?php echo langs::getLang('search'); ?></span></a></li>
               <li><a href="http://www.easysta.com/location.php" title="<?php echo langs::getLang('search_location'); ?>"><i class="fas fa-map-marker-alt icon-place"></i><span class="search-text"><?php echo langs::getLang('location'); ?></span></a></li>
               <li class="nav-toggle"><a href="javascript:;" class="toggle open-nav" rel="nofollow"><i><span></span><span></span><span></span></i></a></li>
            </ul>
            <nav id="mob">
               <section class="clearfix">
                  <ul class="">
                      <?php 
                           if (!isset($_SESSION["UserLigin"]) || $_SESSION["UserLigin"] != 1) {
                              ?> 
                                 <li>
                                    <a href="javascript:;" style="display: none;" class="authMe" title="<?php echo langs::getLang('login'); ?> ">
                                    <?php echo langs::getLang('login'); ?>  </a>
                                 </li>
                              <?php
                           }
                        ?> 
                     <li>
                        <a href="http://www.easysta.com/privacy.php" rel="nofollow" title="<?php echo langs::getLang('privacy_policy'); ?>">
                        <?php echo langs::getLang('privacy_policy'); ?></a>
                     </li>
                     <li>
                        <a href="http://www.easysta.com/contact.php" rel="nofollow" title="<?php echo langs::getLang('contact'); ?>">
                        <?php echo langs::getLang('contact'); ?> </a>
                     </li>
                        <?php

                           if (isset($_SESSION["UserLigin"]) && $_SESSION["UserLigin"] == 1) {
                              ?> 
                                 <li>
                                    <a href="http://www.easysta.com/modules/ajax.php?logout=1" class="logout-me" title="<?php echo langs::getLang('logout'); ?>" rel="nofollow">
                                    <?php echo langs::getLang('logout'); ?> </a>
                                 </li>
                              <?php
                           }
                        ?>
                  </ul>
               </section>
            </nav>
            <nav class="nav-bar nav-bar-full">
               <a href="http://www.easysta.com/inspirations.php?by=discover" title="<?php echo langs::getLang('discover'); ?>" style="display: none;"><?php echo langs::getLang('discover'); ?></a>
               <a href="http://www.easysta.com/inspirations.php?by=inspirations" title="<?php echo langs::getLang('inspirations'); ?>"><?php echo langs::getLang('inspirations'); ?></a>
               <a href="http://www.easysta.com/inspirations.php?by=girls" title="<?php echo langs::getLang('girls'); ?>"><?php echo langs::getLang('girls'); ?></a>
               <a href="http://www.easysta.com/inspirations.php?by=travel" title="<?php echo langs::getLang('travel'); ?>"><?php echo langs::getLang('travel'); ?></a>
               <a href="http://www.easysta.com/inspirations.php?by=funny" title="<?php echo langs::getLang('funny'); ?>"><?php echo langs::getLang('funny'); ?></a>
               <a href="http://www.easysta.com/t.php?hashtag=love" title="<?php echo langs::getLang('love'); ?>">#<?php echo langs::getLang('love'); ?></a>
               <a href="http://www.easysta.com/t.php?hashtag=instagood" title="<?php echo langs::getLang('instagood'); ?>">#<?php echo langs::getLang('instagood'); ?></a>
               <a href="http://www.easysta.com/t.php?hashtag=beautiful" title="<?php echo langs::getLang('beautiful'); ?>">#<?php echo langs::getLang('beautiful'); ?></a>
               <a href="http://www.easysta.com/tag.php" title="<?php echo langs::getLang('top_instagram_hashtags'); ?>" style="color: #2795e9;"><?php echo langs::getLang('top_instagram_hashtags'); ?></a> 
            </nav>
         </header>
      </div>
      <div id="header" class="header-nav-mob">
         <header style="z-index:10">
            <nav class="nav-bar">
               <a href="http://www.easysta.com/inspirations.php?by=discover" title="<?php echo langs::getLang('discover'); ?>" style="display: none;"><?php echo langs::getLang('discover'); ?></a>
               <a href="http://www.easysta.com/inspirations.php?by=inspirations" title="<?php echo langs::getLang('inspirations'); ?>"><?php echo langs::getLang('inspirations'); ?></a>
               <a href="http://www.easysta.com/inspirations.php?by=girls" title="<?php echo langs::getLang('girls'); ?>"><?php echo langs::getLang('girls'); ?></a>
               <a href="http://www.easysta.com/inspirations.php?by=travel" title="<?php echo langs::getLang('travel'); ?>"><?php echo langs::getLang('travel'); ?></a>
               <a href="http://www.easysta.com/inspirations.php?by=funny" title="<?php echo langs::getLang('funny'); ?>"><?php echo langs::getLang('funny'); ?></a>
               <a href="http://www.easysta.com/t.php?hashtag=love" title="<?php echo langs::getLang('love'); ?>">#<?php echo langs::getLang('love'); ?></a>
               <a href="http://www.easysta.com/t.php?hashtag=instagood" title="<?php echo langs::getLang('instagood'); ?>">#<?php echo langs::getLang('instagood'); ?></a>
               <a href="http://www.easysta.com/t.php?hashtag=beautiful" title="<?php echo langs::getLang('beautiful'); ?>">#<?php echo langs::getLang('beautiful'); ?></a>
            </nav>
         </header>
      </div>

<script type="text/javascript">
$( document ).ready(function() {
   instagram.init();
});
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144075422-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-144075422-1');
</script>

<div></div>