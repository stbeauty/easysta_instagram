<?php include 'parts/header.php';
   
   $tags = [
      "love",
      "sushi",
      "streetstyle",
      "cheers",
      "fashion",
      "beautiful",
      "happy",
      "selfie",
      "summer",
      "friends",
      "amazing",
      "music",
      "sunset",
      "sky",
      "beach"
   ];

   $simular = [];
?>
<script type="text/javascript">
   seo.setTitle("easysta - <?php echo langs::getLang('search_instagram_users_tags'); ?>");
   seo.setKeywords("love, sushi, streetstyle, cheers, fashion, beautiful, happy, selfie, summer, friends, amazing, music, sunset, sky, beach"); 
</script>
<style type="text/css">
   @media (min-width: 750px) {
      .posts.grid article {
         height: 446px;
         width: 345px;
      }
      .grid .media {
         height: 320px;
      }
   }
</style>
<div id="main">
   <h1 class="fade">
      <?php echo langs::getLang('search_instagram_users_tags'); ?>
   </h1>
   <div class="search-header">
      <div class="fix">
         <section>
            <form action="search.php" action="modules/ajax.php" method="get">
               <i class="icon-search"></i><input name="q" type="text" class="searchKey in" value="<?php echo isset($_GET['q']) ? $_GET['q'] : '' ?>" placeholder="<?php echo langs::getLang('search_for_user_or_tag'); ?>" autocapitalize="off" autocomplete="off">
               <span class="clearSearch">×</span>
            </form>
         </section>
      </div>
   </div>
     <div id="google-ad-div" style="margin-top: 30px; display: none;">
         <div id="google_ad_div" style="margin: 0 auto;height: 90px; width: 1028px; overflow:hidden; display: block; text-align: center; position:relative">
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2681492222039168" data-ad-slot="2567197326" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
               (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
         </div>  
      </div>
   <div class="container media">
      <div class="row"> 
         <article class="left search-tab" <?php if (!isset($_GET['q'])) { ?> style="display: none;" <?php }  ?>>
            <ul class="card clearfix">
               <li>
                  <a href="#" class="curr">
                  <?php echo langs::getLang('users_tags'); ?> </a>
               </li>
               <li><a href="t.php?hashtag=<?php if (isset($_GET['q'])) { echo $_GET['q']; }  ?>"><?php echo langs::getLang('posts'); ?></a></li>
            </ul>
         </article> 
         <div class="left grid search overhide left_grid_search_overhide">   
            <h3 class="name" <?php if (isset($_GET['q'])) { ?> style="display: none;" <?php }  ?>><span><?php echo langs::getLang('top_instagram_hashtags'); ?></span></h3>
            <div class="row" style=";">
               <div class="row" style="">
               <?php 
                  if (isset($_GET['q'])) { 
                     $nodes = new nodes();
                     $node = $nodes->getList($_GET['q'], null, 1); 
                     if (!$node) die(); 
                      if (count($node) > 12) {
                        $countTag = 12;
                     } else {
                        $countTag = count($node);
                     }

                     for ($i=0; $i < $countTag; $i++) {
                        $OneNode = $node[$i];    
                        
                        if ($i < 3) {  
                           $simulas = explode("#", $OneNode['Desc']);

                           if (count($simulas) > 2) { 
           
                              for ($i=0; $i < count($simulas); $i++) {
                             
                                 if (preg_match('/[^A-Za-z0-9]/', $simulas[$i])) { 

                                    $pattern = "/[^0-9!&',-.\\/a-z\n]/"; 
                                    $simular[] = preg_quote(preg_replace($pattern, "", $simulas[$i]));
                                 }
                              }  
                           }  
                        } 
                        $insta_source = @file_get_contents('https://i.instagram.com/api/v1/users/'.$OneNode['UserID'].'/info/');
                        if (!$insta_source) {

                           if ($i < 1) {
                              die("<h2 style='text-align:center;'>:( Sorry. Nothing Found</h2>");   
                           } 
                        }
                        $insta_array = json_decode($insta_source, TRUE)['user']; 
                        include 'parts/card-2.php'; 
                     }
                  }
               ?>
            </div>
            <div class="row">  
               <?php 
                  if (!isset($_GET['q'])) { 
                     if (count($tags) > 12) {
                        $countTag = 12;
                     } else {
                        $countTag = count($tags);
                     }

                     for ($i = 0; $i < $countTag; $i++) { 
                        $name = $tags[$i];
                        include 'parts/card.php';
                     }
                  } else {
                     if (count($simular) > 12) { 
                        $countTag = 12;
                     } else {
                        $countTag = count($simular);
                     }

                     for ($i = 0; $i < $countTag; $i++) { 
                        $name = $simular[$i];
                        include 'parts/card.php';
                     }
                  } 
               ?>  
            </div>
         </div> 
      </div>
   </div> 
   <?php 
      if (!isset($_GET['q'])) {  
   ?>
   <div class="container grid posts overhide">
      <h3 class="name"><span><?php echo langs::getLang('featured'); ?></span></h3>
      <div class="row row-featured row-autoload">
         <?php 
            $nodes = new nodes();
            $node = $nodes->getList("love");

            for ($i=0; $i < count($node); $i++) { 
               $OneNode = $node[$i];
               include 'parts/post.php';   
            } 
         ?>
      </div> 
   </div> 
   <?php
      }
   ?>
</div>

<?php include 'parts/footer.php'; ?>