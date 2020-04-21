<?php include 'parts/header.php'; ?>
<script type="text/javascript">
   seo.setTitle("easysta - Search Locations");
   seo.setKeywords("easysta - Search Locations");
</script>
<div id="main">
   <h1 class="fade">
      Search Locations
   </h1>
   <div class="search-header">
      <div class="fix">
         <section>
            <form action="t.php">
               <i class="icon-search"></i><input name="hashtag" value="<?php isset($_GET['q']) ? $_GET['q'] : '' ?>" type="text" class="searchKey in" placeholder="<?php echo langs::getLang('search_locations'); ?>" autocapitalize="off" autocomplete="off">
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
   <div class="container grid overhide">
      <div class="row"></div>
      <div class="row">
         <div class="left grid search overhide left_grid_search_overhide_data" style="margin-left: 50px;">
            <div class="row">
              <?php 
                foreach ($countries as $key => $name) {
                  include 'parts/card-3.php';
                } 
              ?>                
            </div>
         </div>
      </div>
      <div id="gotop" class="icon-up" style="display: none;"></div>
   </div> 
</div>

<?php include 'parts/footer.php'; ?>