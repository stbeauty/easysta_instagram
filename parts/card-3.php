<article>
    <div class="card">
        <a href="t.php?hashtag=<?php echo explode(" ", $name)[0]; ?>">
            <i class="place"><i style="margin-top: 10px !important;" class="fas fa-map-marker-alt icon-place place"></i></i><?php echo $name; ?><br><span><?php echo langs::getLang('see_posts'); ?></span>
        </a>
    </div>
</article>