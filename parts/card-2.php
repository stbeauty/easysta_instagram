<article>
    <div class="card"><a target="_blank" href="user/<?php echo str_replace(' ', '-', $insta_array['username']); ?>">
    	<img src="<?php echo $insta_array['profile_pic_url']; ?>" width="35" height="35"><strong><?php echo $insta_array['username']; ?></strong><br><span>@<?php echo $insta_array['username']; ?></span></a></div>
</article>