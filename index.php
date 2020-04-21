<?php include 'parts/header.php'; ?>
<div id="main">
   <div class="home">
      <div class="container">
         <div class="row">
            <h2><?php echo langs::getLang('discover_share_be_inspired'); ?></h2>
            <p style="margin-top: 20px;" class="select-trending"><?php echo langs::getLang('trending'); ?>&nbsp;:
               <span style="display: inline-block;"><a href="t.php?hashtag=love" title="<?php echo langs::getLang('search_for'); ?> <?php echo langs::getLang('love'); ?>"><?php echo langs::getLang('love'); ?></a>,</span>
               <span style="display: inline-block;"><a href="t.php?hashtag=travel" title="<?php echo langs::getLang('search_for'); ?> <?php echo langs::getLang('travel'); ?>"><?php echo langs::getLang('travel'); ?></a>,</span>
               <span style="display: inline-block;"><a href="t.php?hashtag=cute" title="<?php echo langs::getLang('search_for'); ?> <?php echo langs::getLang('cute'); ?>"><?php echo langs::getLang('cute'); ?></a>,</span>
               <span style="display: inline-block;"><a href="t.php?hashtag=selfie" title="<?php echo langs::getLang('search_for'); ?> <?php echo langs::getLang('selfie'); ?>"><?php echo langs::getLang('selfie'); ?></a>,</span>
               <span style="display: inline-block;"><a href="t.php?hashtag=food" title="<?php echo langs::getLang('search_for'); ?> <?php echo langs::getLang('food'); ?>"><?php echo langs::getLang('food'); ?></a></span>
            </p> 
            <form action="search.php" style="margin-top: 20px;">
               <div class="search-home"><i class="icon-search"></i><input name="q" type="text" class="searchKey" placeholder="<?php echo langs::getLang('search_for_user_or_tag'); ?>" value="" data-from="home" autocapitalize="off" autocomplete="off"><span class="clearSearch">×</span></div>
            </form> 
         </div>
      </div>
      <div class="container grid hot overhide">
      <div class="row select-category">
         <article>
            <div class="bg" style="background-image:url('assets/img/img2.jpg')"><a href="t.php?hashtag=travel" onclick="ga('send','event','click','main','tag_travel')"><span><?php echo langs::getLang('travel'); ?></span></a></div>
         </article>
         <article>
            <div class="bg" style="background-image:url('assets/img/img3.jpg')"><a href="t.php?hashtag=fashion" onclick="ga('send','event','click','main','tag_fashion')"><span><?php echo langs::getLang('fashion'); ?></span></a></div>
         </article>
         <article>
            <div class="bg" style="background-image:url('assets/img/img4.jpg')"><a href="t.php?hashtag=food" onclick="ga('send','event','click','main','tag_food')"><span><?php echo langs::getLang('food'); ?></span></a></div>
         </article>
         <article>
            <div class="bg" style="background-image:url('assets/img/img5.jpg')"><a href="t.php?hashtag=fitness" onclick="ga('send','event','click','main','tag_fitness')"><span><?php echo langs::getLang('fitness'); ?></span></a></div>
         </article>
         <article>
            <div class="bg" style="background-image:url('assets/img/img6.jpg')"><a href="t.php?hashtag=photography" onclick="ga('send','event','click','main','tag_photography')"><span><?php echo langs::getLang('photography'); ?></span></a></div>
         </article>
         <article>
            <div class="bg" style="background-image:url('assets/img/img7.jpg')"><a href="t.php?hashtag=art" onclick="ga('send','event','click','main','tag_art')"><span><?php echo langs::getLang('art'); ?></span></a></div>
         </article>
      </div>
   </div>  
</div>
<div id="google-ad-div" style="margin-top: 30px; width: 100%; display: none;">
   <div id="google_ad_div" style="margin: 0 auto;height: 90px; width: 728px; overflow:hidden; display: block; text-align: center; position:relative">
      <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2681492222039168" data-ad-slot="2567197326" data-ad-format="auto" data-full-width-responsive="true"></ins>
      <script>
         (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
   </div>  
</div>
<div class="posts-main">
   <img src="assets/img/loader.gif" id="loader-gif" class="loade-post" style="margin: auto auto;padding-top: 120px;display: block;"></div>
</div> 
<div class="scroller-status">
   <p class="infinite-scroll-last"></p>   
</div>

<?php include 'parts/footer.php'; ?>