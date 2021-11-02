<div class="blog-box wow fadeIn">
    <div class="post-media">
        <a href="<?php the_permalink(); ?>" title="">
            <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'title' => 'Feature image']);?>
            <div class="hovereffect">
                <span></span>
            </div>
            <!-- end hover -->
        </a>
    </div>
    <!-- end media -->
    <div class="blog-meta big-meta text-center">
        <div class="post-sharing">
            <ul class="list-inline">
                <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div><!-- end post-sharing -->
        <h4><a href="<?php the_permalink(); ?> title=""><?php the_title(); ?></a></h4>
        <p><?php the_excerpt(); ?><a href="<?php the_permalink(); ?>>Read more...</a></p>
        <small><a href="marketing-category.html" title=""><?php the_category(); ?></a></small>
        <small><a href="marketing-single.html" title=""><?php the_date(); ?></a></small>
        <small><a href="#" title="">by <?php the_author(); ?></a></small>
        <small><a href="#" title=""><i class="fa fa-eye"></i> 2291</a></small>
    </div><!-- end meta -->
</div><!-- end blog-box -->

<hr class="invis">