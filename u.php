<?php include 'parts/header.php';  

  
  
  $nodes = new nodes(); 
  $node = $nodes->getSearchUserPosts($_GET['username']); 

  $UserInfo = user::getUser($node['UserID'])['user'];  
?>

<script type="text/javascript">
  seo.setTitle("<?php echo $UserInfo['username']; ?> Photos, Videos, Stories and Highlights - Easysta"); 
  seo.setKeywords("<?php echo trim(preg_replace('/\s+/', ' ', preg_replace("/[^a-zA-Z]$/", "", $UserInfo['biography']))); ?>"); 
  seo.setImg("<?php echo $UserInfo['profile_pic_url']; ?>");
</script>
<div id="main">
   <div class="user-profile">
      <div class="container">
         <article class="row" data-url="">
            <a href="#"><img class="picUrl" src="<?php echo $UserInfo['profile_pic_url']; ?>" width="75" height="75" alt=""></a>
              
            <p><b style="font-size: 19px;display: block;margin-top: 6px;"><?php echo $UserInfo['full_name']; ?> @<?php echo $UserInfo['username']; ?> Instagram Photos, Videos, Stories and Highlights - Easysta</b>
              <br/>
               &nbsp;&nbsp;<?php echo $UserInfo['biography']; ?>
            </p>
         </article>
      </div>  
      <nav>
         <span class="curr"><strong><?php echo $UserInfo['media_count']; ?></strong><small><?php echo langs::getLang('photos'); ?></small></span>
         <span class="c">
         
         <strong><?php echo $UserInfo['follower_count']; ?></strong>
         <small><?php echo langs::getLang('followers'); ?></small>
         
         </span>
         <span>
 
         <strong><?php echo $UserInfo['following_count']; ?></strong>
         <small><?php echo langs::getLang('following'); ?></small>
      
         </span>
      </nav>
   </div>
    <div id="google-ad-div" style="margin-top: 30px; width: 100%; display: none;">
         <div id="google_ad_div" style="margin: 0 auto;height: 90px; width: 1028px; overflow:hidden; display: block; text-align: center; position:relative">
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2681492222039168" data-ad-slot="2567197326" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
               (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
         </div>  
      </div> 
   <div class="container grid posts overhide">
   <h3 class="name"><span><?php echo langs::getLang('featured'); ?>FEATURED</span></h3>
   		<div class="row row-featured row-autoload"> 
     		<?php 
            if (!isset($node[0])) {
               $node = $nodes->getList('love');
            }
            
            for ($i=0; $i < 12; $i++) { 
              $OneNode = @$node[$i];
               
              include 'parts/post.php';   
            } 
        
        ?> 
   		</div>
	</div>
</div>

 <?php include 'parts/footer.php'; ?>