<?php get_header(); ?>


    <div class="container">


        <div id="commanders" style="margin-top:5px">
            <h3 class="pull-right"><?php single_cat_title();?></h3>
           

            <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>" >
                        <div class="col-xl-3 col-md-4 col-12">
                            <div class="wrapper">
                                <div class="tumb-image">
                                    <img src="<?php
                                    if ( has_post_thumbnail() ) {
                                    $thumb_id = get_post_thumbnail_id();
                                    $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
                                    echo $thumb_url[0];
                                    }
                                    ?> alt="<?php the_title(); ?>">
                                </div>
                                <h4><?php the_title(); ?></h4>
                            </div>
                        </div>
                    </a>
                <?php endwhile; else: ?>
                        پستی برای نمایش وجود ندارد        
      <?php endif; ?>
      </div>
                
            </div>
        </div>

 
    <?php get_footer(); ?>