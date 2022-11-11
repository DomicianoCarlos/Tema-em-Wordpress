<?php get_header(); ?>
        <h1> <?php bloginfo('name'); ?></h1>
        <h2> <?php bloginfo('description'); ?></h2>

        <?php
        if( have_posts() ) :
            while( have_posts() ) :
                the_post();
                ?>
            <h3><?php the_title(); ?></h3>
            <div>
               <?php the_content(); ?>
            </div>
            <?php
          endwhile;
        else:
            ?>
             <h3>Post not found!</h3>
          <?php  
        endif;
        ?>
         <?php get_footer(); 
         ?>
