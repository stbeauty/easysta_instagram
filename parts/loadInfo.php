<div class="container grid posts overhide"> 
   <div class="row row-featured row-autoload hashtag-data-container">
    <?php 
  
      if (isset($_GET['hashtag'])) {
        $nodes = new nodes();
        $node = $nodes->getList($_GET['hashtag']);
         
        if (!$node) die("<h2 style='text-align:center;'>:( Sorry. Nothing Found</h2>");
        if (isset($_GET['pageno'])) {
          $pageno = $_GET['pageno'];
        } else {
          $pageno = 3;
        }

        $no_of_records_per_page = 24;
        $offset = ($pageno) * $no_of_records_per_page; 
        
        $total_rows = count($node);
        $total_pages = count($node) / 8;

        $curl = "http://www.easysta.com/t.php?hashtag=".$_GET['hashtag'];

        if ($offset == 0) {
          $offset = $no_of_records_per_page;
        }

        for ($i=8; $i < $offset; $i++) { 
          if (isset($node[$i])) { 
            $OneNode = $node[$i];
            include 'parts/post.php';
          }   
        } 
      }
     ?>
   </div>
   <div class="scroller-status" style="text-align: center;">
    <div class="infinite-scroll-request loader-ellips">
    <img src="http://easysta.com/assets/img/loader.gif">
    </div> 
</div>
   <ul class="pagination" style="display: none;">
      <li><a href="<?php $curl ?>?pageno=1">First</a></li>
      <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
        <a href="<?php echo $curl; if($pageno <= 1){ echo '#'; } else { echo "&pageno=".($pageno - 1); } ?>">Prev</a>
      </li>
      <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
        <a class="pagination__next" href="<?php echo $curl; if($pageno >= $total_pages){ echo '#'; } else { echo "&pageno=".($pageno + 1); } ?>">Next</a>
      </li>
      <li><a href="<?php $curl ?>?pageno=<?php echo $total_pages; ?>">Last</a></li>
  </ul>
</div> 




<div calss="loader-data"></div>