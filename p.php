<?php include 'parts/header.php'; ?>


<div id="main">
	<div class="common-head bg">
   		<div class="container">
      		<div class="row">
         		<h1>
            	<?php echo langs::getLang('search_locations'); ?>
         		</h1>
      		</div>
   		</div>
	</div>

	<div class="container grid posts overhide">
   	<div class="row row-featured row-autoload"> 
     		<?php include 'parts/post.php'; ?>
     		<?php include 'parts/post.php'; ?>
     		<?php include 'parts/post.php'; ?>
     		<?php include 'parts/post.php'; ?>
     		<?php include 'parts/post.php'; ?>
     		<?php include 'parts/post.php'; ?>
     		<?php include 'parts/post.php'; ?>
   		</div>
	</div>
</div>


<?php include 'parts/footer.php'; ?>