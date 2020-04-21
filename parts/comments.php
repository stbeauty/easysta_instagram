<!-- <article class="left like post-info-full">
   <div class="card">
      <h3 class="title"><?php  echo $comment['edge_liked_by']['count']; ?> <?php echo langs::getLang('likes'); ?></h3>
   </div>
</article> -->
<article class="left comment post-info-full">
   <div class="card">
<!--       <h3 class="title" style="display: inline-block;">1 <?php echo langs::getLang('comments'); ?></h3> -->
      <a href="javascript:;" style="line-height: 20px; height: auto; display: none;" class="button show-comments" disabled="disabled"><?php echo langs::getLang('load_comments'); ?></a>
      <div class="comments-place" style="padding-bottom: 1px;">
         <section class="comment-item">
            <ul>
               <li>
                  <a target="_blank" href="http://www.easysta.com/user/<?php echo str_replace(' ', '-', $comment['owner']['username']); ?>" title="<?php  echo $comment['owner']['username']; ?>"><img src="<?php  echo $comment['owner']['profile_pic_url']; ?>" width="40" height="40" rel="nofollow"><strong><?php  echo $comment['owner']['username']; ?></strong></a><small><?php echo gmdate("Y:m:d", $comment['created_at']);?></small>
                  <p>
                     <?php echo $comment['text']; ?>
                  </p>
               </li>
            </ul>
         </section>
      </div>
   </div>
</article>