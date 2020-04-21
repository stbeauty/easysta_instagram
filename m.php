<?php include 'parts/header.php'; ?>
      <div id="main">
         <link rel="stylesheet" href="http://www.easysta.com/assets/css/flickity.min.css">
         <script src="http://www.easysta.com/assets/js/flickity.pkgd.min.js"></script>
         <div id="google-ad-div" style="margin-top: 30px; width: 100%; display: none;">
         <div id="google_ad_div" style="margin: 0 auto;height: 90px; width: 1028px; overflow:hidden; display: block; text-align: center; position:relative">
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2681492222039168" data-ad-slot="2567197326" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
               (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
         </div>  
     
            </div>
         <?php include 'parts/full-post.php'; ?>
         <?php

            $_GET['hashtag'] = "love";

         ?>
         <h3 class="name"><span><?php echo langs::getLang('featured'); ?>FEATURED</span></h3>
         <?php include 'parts/loadInfo.php'; ?>
         <div class="row">
            <div class="looping-rhombuses-spinner load-spinner">
               <div class="rhombus"></div>
               <div class="rhombus"></div>
               <div class="rhombus"></div>
            </div>
         </div> 
         <input type="hidden" value="40" id="current-key">
         
         <script type="text/javascript" src="https://www.statcounter.com/counter/counter.js" async=""></script>
          
      </div>
      <!--[if lt IE 9]><script src="//html5media.googlecode.com/svn/trunk/src/html5media.min.js"></script><![endif]-->
      <!--[if IE]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
      <script src="https://www.gstatic.com/firebasejs/4.13.0/firebase.js"></script>
    </div> 
 <?php include 'parts/footer.php'; ?>