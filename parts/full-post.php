<?php 

   $Data = explode(".", $_GET['id']);
   $UserInfo = user::getUser($Data[1])['user']; 
   $postInfo = nodes::getPostInfo($Data[0]);
 
   $_GET['desc'] = @$postInfo['graphql']['shortcode_media']['edge_media_to_caption']['edges']['0']['node']['text'];
   $_GET['TimeStamp'] = $postInfo['graphql']['shortcode_media']['taken_at_timestamp'];
   $_GET['IsVideo'] = $postInfo['graphql']['shortcode_media']['is_video'];
   $_GET['img'] = $postInfo['graphql']['shortcode_media']['display_url'];
   $_GET['Liked'] = $postInfo['graphql']['shortcode_media']['edge_media_preview_like']['count'];
   $_GET['Comment'] = @$postInfo['graphql']['shortcode_media']['edge_media_to_parent_comment']['count'];
   $_GET['cat'] = $postInfo['graphql']['shortcode_media']['__typename'];
      


 
?>
<script type="text/javascript">
   seo.setTitle("easysta - <?php echo trim(preg_replace('/\s+/', ' ', preg_replace("/[^a-zA-Z]$/", "", $_GET['desc']))); ?>");
   seo.setKeywords("easysta -  <?php echo trim(preg_replace('/\s+/', ' ', preg_replace("/[^a-zA-Z]$/", "", $_GET['desc']))); ?>");
   seo.setImg("<?php echo $_GET['img'];?>"); 
</script>
<div class="container media">
   <div class="row">
      <article class="left grid post-info-full" data-url="">
         <div class="card">
            <section class="header">
               <div>
                  <a href="http://www.easysta.com/user/<?php echo $UserInfo['username']; ?>">
                     <img src="<?php echo $UserInfo['profile_pic_url']; ?>" width="40" height="40"><strong title="<?php echo $UserInfo['biography']; ?>"><?php echo $UserInfo['full_name']; ?> @<?php echo $UserInfo['username']; ?></strong></a>
                  <small>
                  <a href="#" title="<?php echo $_GET['desc'];?>" style="font-size: 100%;"><?php echo $_GET['cat'];?></a>
                  &nbsp;·&nbsp;<?php echo $_GET['TimeStamp'];?> </small>
               </div>

               <!-- like -->
               <div style="float: right">
                  <a href="javascript:;" aria-expanded="true" rel="nofollow" class="fav-content" data-type="media" data-id="2086154346991794809_5369121626">
                     <span style="color:gold" class="fa-layers fa-lg">
                        <svg class="svg-inline--fa fa-bookmark fa-w-12" aria-hidden="true" data-prefix="far" data-icon="bookmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                           <path fill="currentColor" d="M336 0H48C21.49 0 0 21.49 0 48v464l192-112 192 112V48c0-26.51-21.49-48-48-48zm0 428.43l-144-84-144 84V54a6 6 0 0 1 6-6h276c3.314 0 6 2.683 6 5.996V428.43z"></path>
                        </svg>
                        <!-- <i class="far fa-bookmark"></i> -->
                        <svg class="svg-inline--fa fa-heart fa-w-16 fa-inverse" data-fa-transform="shrink-10 up-2" style="color: Tomato;transform-origin: 0.5em 0.375em;" aria-hidden="true" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                           <g transform="translate(256 256)">
                              <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                 <path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" transform="translate(-256 -256)"></path>
                              </g>
                           </g>
                        </svg>
                        <!-- <i class="fa-inverse fas fa-heart" data-fa-transform="shrink-10 up-2" style="color:Tomato"></i> -->
                     </span>
                  </a>
               </div>
            <!-- like -->


            </section>
            <div class="m-pic">
               <?php   
                 
                  $comments = @$postInfo['graphql']['shortcode_media']['edge_media_to_parent_comment']; 
                  if ($_GET['IsVideo'] == "true" || $_GET['IsVideo'] == "1") {
                     $video = $postInfo['graphql']['shortcode_media']['video_url'];
                     ?> 
                        <video width="100%" height="100%" poster="<?php echo $_GET['img'];?>" class="picUrl" muted="" autoplay="" loop="" onmouseover="this.play()" playsinline="">
                           <source src="<?php echo $video ?>" type="video/mp4">Your browser does not support the video tag.</video>
                     <?php
                  } else {
                     ?> 
                        <img src="<?php echo $_GET['img'];?>">
                     <?php
                  }
               ?>
               
            </div>
            <section class="header">
               <div>
                  <a href="http://www.easysta.com/user/<?php echo str_replace(' ', '-', $UserInfo['username']); ?>" title="<?php echo $_GET['desc'];?>"><img src="<?php echo $UserInfo['profile_pic_url']; ?>" width="40" height="40"><strong title="<?php echo $UserInfo['biography']; ?>"><?php echo $UserInfo['full_name']; ?> @<?php echo $UserInfo['username']; ?></strong></a>
                  <small>
                  <a href="#" title="<?php echo $_GET['desc'];?>" style="font-size: 100%;"><?php echo $_GET['cat'];?></a>
                  &nbsp;·&nbsp;<?php echo $_GET['TimeStamp'];?></small>
               </div>

               <!-- like -->
               <div style="float: right">
                  <a href="javascript:;" aria-expanded="true" rel="nofollow" class="fav-content" data-type="media" data-id="<?php echo $Data[0]; ?>">
                     <span style="color:gold" class="fa-layers fa-lg">
                        <svg class="svg-inline--fa fa-bookmark fa-w-12" aria-hidden="true" data-prefix="far" data-icon="bookmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                           <path fill="currentColor" d="M336 0H48C21.49 0 0 21.49 0 48v464l192-112 192 112V48c0-26.51-21.49-48-48-48zm0 428.43l-144-84-144 84V54a6 6 0 0 1 6-6h276c3.314 0 6 2.683 6 5.996V428.43z"></path>
                        </svg>
                        <!-- <i class="far fa-bookmark"></i> -->
                        <svg class="svg-inline--fa fa-heart fa-w-16 fa-inverse" data-fa-transform="shrink-10 up-2" style="color: Tomato;transform-origin: 0.5em 0.375em;" aria-hidden="true" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                           <g transform="translate(256 256)">
                              <g transform="translate(0, -64)  scale(0.375, 0.375)  rotate(0 0 0)">
                                 <path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" transform="translate(-256 -256)"></path>
                              </g>
                           </g>
                        </svg>
                        <!-- <i class="fa-inverse fas fa-heart" data-fa-transform="shrink-10 up-2" style="color:Tomato"></i> -->
                     </span>
                  </a>
               </div>
               <!-- like -->


            </section>
            <section class="caption">
               <p class="m-p">
                  <?php echo $_GET['desc'];?>
               </p>
            </section>
            <footer class="clearfix">
               <span><i class="icon-like"></i><?php echo $_GET['Liked'];?></span>
               <span><i class="icon-comment"></i><?php echo $_GET['Comment'];?></span>
               <?php

                  if ($_GET['IsVideo'] == "true" || $_GET['IsVideo'] == "1") {
                     $video = $postInfo['graphql']['shortcode_media']['video_url'];
                     $file_url = $video; 
                     $newfileName = $Data[0] . ".mp4";
                     ?>  
                        <span><a href="http://www.easysta.com/doun/<?php echo $newfileName; ?>" download target="_blank"><i class="icon-down" ></i><?php echo langs::getLang('download'); ?></span> 
                     <?php 
                  } else {
         
                     $file_url = $_GET['img']; 
                     $newfileName = $Data[0] . ".jpg";
                     ?>  

                        <span><a href="http://www.easysta.com/doun/<?php echo $newfileName; ?>"  download="<?php echo $UserInfo['full_name'];?>" target="_blank"><i class="icon-down" ></i><?php echo langs::getLang('download'); ?></span>
                     <?php
                  }

                  include 'doun.php';
               ?>
            </footer>
         </div>
      </article>
      <?php 
      if (isset($comments['edges'])) {
         foreach ($comments['edges'] as $comment) {
            $comment = $comment['node'];
            include 'comments.php'; 
         }
      }  
      ?>
      <div id="gotop" class="icon-up"></div>
   </div>
</div>