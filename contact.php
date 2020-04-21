<?php include 'parts/header.php'; ?>
   <script type="text/javascript">
      seo.setTitle("easysta - "+"<?php echo langs::getLang('contact_us'); ?>");
      seo.setKeywords("<?php echo langs::getLang('contact_us'); ?>");
   </script>
	<div id="main">
   <div class="container clearfix" id="contact" style="text-align: center;">
      <h1><?php echo langs::getLang('contact_us'); ?></h1>
      <form action="contact.php" method="post" id="contactform">
            <input type="hidden" name="sendEmail">
      		<div style="display: inline-block; width: 100%;"> 
         		<input type="text" id="name" name="name" size="25" placeholder="<?php echo langs::getLang('name'); ?>" value="">
         		<input type="email"  id="email" name="email" size="25" placeholder="<?php echo langs::getLang('email'); ?>" value="">
         	</div>
         	<textarea style="display: inline-block; max-width: 420px; margin-top: 5px;" name="message" id="message" placeholder="<?php echo langs::getLang('message'); ?>"></textarea>
         	<div style="display: inline-block; width: 100%;">
         		<input type="submit"  id="send" style="width: 140px; padding: 0 !important;" value="<?php echo langs::getLang('send'); ?> <?php echo langs::getLang('message'); ?>">
         	</div> 
      </form>
   </div>
</div>

<?php
   if (isset($_POST['sendEmail'])) {
      $mess = "name : {$_POST['name']} <br/> email : {$_POST['email']} <br /> mess: {$_POST['message']}";
      mail("someone@example.com","Message From easysta.com", $msg);
      
   }
?>

<?php include 'parts/footer.php'; ?>