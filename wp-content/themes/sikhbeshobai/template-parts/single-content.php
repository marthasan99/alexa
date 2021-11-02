<div class="page-wrapper">
    <div class="blog-title-area">
        <ol class="breadcrumb hidden-xs-down">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Blog</a></li>
            <li class="breadcrumb-item active"><?php the_title(); ?></li>
        </ol>

        <span class="color-yellow"><a href="" title=""><?php the_category(); ?></a></span>

        <h3><?php the_title(); ?></h3>

        <div class="blog-meta big-meta">
            <small><a href="marketing-single.html" title=""><?php the_date(); ?></a></small>
            <small><a href="blog-author.html" title="">by <?php the_author(); ?></a></small>
        </div><!-- end meta -->

        
    </div><!-- end title -->

    <div class="single-post-media">
        <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'title' => 'Feature image']);?>
    </div><!-- end media -->

    <div class="blog-content">  
        <div class="pp">
        <?php the_content(); ?>
        </div><!-- end pp -->
    </div><!-- end content -->

    <div class="blog-title-area">
        <div class="tag-cloud-single">
            <span>Tags</span>
            <small><a href="#" title=""><?php the_tags(); ?></a></small>
        </div><!-- end meta -->
    </div><!-- end title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="banner-spot clearfix">
                <div class="banner-img">
                    <img src="upload/banner_01.jpg" alt="" class="img-fluid">
                </div><!-- end banner-img -->
            </div><!-- end banner -->
        </div><!-- end col -->
    </div><!-- end row -->

    <hr class="invis1">

    <div class="custombox authorbox clearfix">
        <h4 class="small-title">About author</h4>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <img src="upload/author.jpg" alt="" class="img-fluid rounded-circle"> 
            </div><!-- end col -->

            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <h4><a href="#"><?php the_author(); ?></a></h4>
                <p></p>

            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end author-box -->

    <hr class="invis1">

    <hr class="invis1">
    <!-- Comment Section -->
    <div class="custombox clearfix">
        <h4 class="small-title">3 Comments</h4>
        <div class="row">
            <div class="col-lg-12">
                <div class="comments-list">
                    <div class="media">
                        <a class="media-left" href="#">
                            <img src="upload/author.jpg" alt="" class="rounded-circle">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading user_name">Amanda Martines <small>5 days ago</small></h4>
                            <p>Exercitation photo booth stumptown tote bag Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation, photo booth et 8-bit kale chips proident chillwave deep v laborum. Aliquip veniam delectus, Marfa eiusmod Pinterest in do umami readymade swag. Selfies iPhone Kickstarter, drinking vinegar jean.</p>
                            <a href="#" class="btn btn-primary btn-sm">Reply</a>
                        </div>
                    </div>
                    <div class="media">
                        <a class="media-left" href="#">
                            <img src="upload/author_01.jpg" alt="" class="rounded-circle">
                        </a>
                        <div class="media-body">

                            <h4 class="media-heading user_name">Baltej Singh <small>5 days ago</small></h4>

                            <p>Drinking vinegar stumptown yr pop-up artisan sunt. Deep v cliche lomo biodiesel Neutra selfies. Shorts fixie consequat flexitarian four loko tempor duis single-origin coffee. Banksy, elit small.</p>

                            <a href="#" class="btn btn-primary btn-sm">Reply</a>
                        </div>
                    </div>
                    <div class="media last-child">
                        <a class="media-left" href="#">
                            <img src="upload/author_02.jpg" alt="" class="rounded-circle">
                        </a>
                        <div class="media-body">

                            <h4 class="media-heading user_name">Marie Johnson <small>5 days ago</small></h4>
                            <p>Kickstarter seitan retro. Drinking vinegar stumptown yr pop-up artisan sunt. Deep v cliche lomo biodiesel Neutra selfies. Shorts fixie consequat flexitarian four loko tempor duis single-origin coffee. Banksy, elit small.</p>

                            <a href="#" class="btn btn-primary btn-sm">Reply</a>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end custom-box -->

    <hr class="invis1">

    <div class="custombox clearfix">
        <h4 class="small-title">Leave a Reply</h4>
        <div class="row">
            <div class="col-lg-12">
                <form class="form-wrapper">
                    <input type="text" class="form-control" placeholder="Your name">
                    <input type="text" class="form-control" placeholder="Email address">
                    <input type="text" class="form-control" placeholder="Website">
                    <textarea class="form-control" placeholder="Your comment"></textarea>
                    <button type="submit" class="btn btn-primary">Submit Comment</button>
                </form>
            </div>
        </div>
    </div>
</div><!-- end page-wrapper -->

<style>
    ul{
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: inline-block;
    }
</style>