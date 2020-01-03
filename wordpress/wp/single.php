<?php get_header(); ?>

    <div class="container">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="commanders" style="margin-top:45px">
            <h3 class="pull-right"><?php the_title(); ?></h3>
            
            <div class="clearfix"></div>
            <div class="row textbody">
            <?php the_content(); ?>
            </div>
        </div>
        <?php endwhile; endif; ?>
      

    </div>

    <?php get_footer(); ?>