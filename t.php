<?php include 'parts/header.php'; ?>
<script type="text/javascript">
   seo.setTitle("easysta - <?php echo langs::getLang('photos_videos'); ?>");
   seo.setKeywords("<?php  echo $_GET['hashtag']; ?>"); 
</script>
<div id="main">
   <div class="common-head bg">
      <div class="container">
         <div class="row">
            <h3 style="display: inline-block;padding: 10px;"> <?php if (isset($_GET['hashtag'])) {
        echo $_GET['hashtag'];
      } ?>  <?php echo langs::getLang('photos_videos'); ?></h3>
         </div>
      </div>
   </div>
</div>

    <div id="google-ad-div" style="margin-top: 30px; display: none;">
      <div id="google_ad_div" style="margin: 0 auto;height: 170px; width: 1028px; overflow:hidden; display: block; text-align: center; position:relative">
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2681492222039168" data-ad-slot="2567197326" data-ad-format="auto" data-full-width-responsive="true"></ins>
          <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
      </div>  
    </div>
<?php include 'parts/loadInfo.php'; ?>

<?php include 'parts/footer.php'; ?>