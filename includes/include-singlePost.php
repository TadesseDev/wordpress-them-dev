<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="single-post">
            <h3 class="title"><?php the_title(); ?></h3>
            <div class="container">
                <?php echo get_the_date('D: m/y'); ?>
                <?php if(has_post_thumbnail()):?>
                <div>
                <?php echo the_post_thumbnail('slider');?>
                  
                </div>  <?php endif;?>
                <div class="contetn">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="author-info">
                <?php $fname = get_the_author_meta('first_name');
                $lname = get_the_author_meta('last_name');
                $email = get_the_author_meta('user_email');
                $website = get_the_author_meta('user_url'); ?>
                <p>posted by <?php echo $fname . ' ' . $lname; ?></p>
                <p class="email">email: <?php echo $email; ?></p>
                <p class="website"><a href="<?php echo $website; ?>">see who...</a></p>
            </div>
            <?php $tags = get_the_tags();
            if($tags){
                foreach($tags as $tag):
                    ?>
                    <span class="related-tages"><a href="<?php echo get_tag_link($tag->term_id);?>"><?php echo $tag->name;?></a></span>
                    <?php
                    endforeach;
            }?>
        </div>
<?php endwhile;
else : endif ?>