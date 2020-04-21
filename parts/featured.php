<div class="container media"></div>
 
<div class="container grid posts overhide">
   <h3 class="name"><span><?php echo langs::getLang('featured'); ?></span></h3>
   <div class="row row-featured row-autoload"> 
    <?php
    	$nodes = new nodes();
    	$node = $nodes->getList($_GET['cat']);

      if (!$node) die();
    	for ($i=0; $i < count($node); $i++) { 
    		$OneNode = $node[$i];
    		include 'post.php'; 	
    	} 
     ?>
   </div>
</div>