<div class="category-title">
    <h1><?php echo single_cat_title(); ?></h1>
</div>
<div class="row">
    <div class="col-md-9 col-sm-12">
       <div class="row">
       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-xs-12 col-sm-6 col-md-4 all-post">
                    <div class="card post-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" class="card-link"><img class="card-img-top" src="<?php echo esc_url(wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'prefered-thumb')[0]); ?>" alt="slid image"></a>
                        <?php else : ?><a href="<?php the_permalink(); ?>" class="card-link"><img class="card-img-top" src="<?php echo get_template_directory_uri() . "/images/alter.jpg" ?>" alt="post thumbnail" width="239" height="239"></a> <?php endif; ?>
                        <h5 class="card-header"><?php the_title(); ?></h5>
                        <span class="content">
                            <p class="card-text"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="card-link">Read more </a>
                        </span>
                    </div>
                </div>
        <?php endwhile;
        else : endif ?>
       </div>
    </div>
    <div class="col-md-3 col-sm-12">
    <div class="sidebar-container">
    <?php dynamic_sidebar('blog-sidebar'); ?>
</div>
    </div>

</div>
<div class="next-back"><?php posts_nav_link("", 'previouse', 'next') ?> </div>