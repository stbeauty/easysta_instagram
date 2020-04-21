<?php

if (isset($OneNode['ID']) && $OneNode['ID'] != "") { 

?>

<article data-url="PostLink" title="<?php echo $OneNode['Desc']; ?>" class="post-hashtag-data">
   <div class="card">
      <a href="http://www.easysta.com/m/<?php echo $OneNode['ShortCode']; ?>.<?php echo $OneNode['UserID']; ?>">

         <?php if ($OneNode['IsVideo'] == "true") { ?>
            <img class="play-media" src="/assets/img/play.jpg">
         <?php } ?>

         <div class="pic picUrl progressive progressive-loading replace" data-src="<?php echo $OneNode['PhotoImg']; ?>" poster="<?php echo $OneNode['Desc']; ?>"></div>
         <img class="article_photo_img" style="" src="<?php echo $OneNode['PhotoImg']; ?>" poster="<?php echo $OneNode['Desc']; ?>">
      </a>
      <section class="caption">
         <small><?php echo gmdate("Y:m:d", $OneNode['TimeStamp']);?></small>
         <p><?php echo $OneNode['Desc']; ?></p>
      </section>
      <footer class="clearfix">
         <span><i class="icon-like"></i><?php echo $OneNode['Liked']; ?></span><span><i class="icon-comment"></i><?php echo $OneNode['Comment']; ?></span>
      </footer>
   </div>
</article>
<?php } ?>