<?php 
/*
    template name: Home
*/

get_header(); 
the_post();
?>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                    <section>
                        <?php the_content(); ?>
                    </section>
                </article>

            </div> <!-- #main -->

        </div> <!-- #main-container -->

         <?php 
        $args = array(
                        'post_type' => 'cupcakes', 
                        'post_per_page' => -1, 
                        'orderby' => 'ID', 
                        'order' => 'ASC',
                    );

        $query = new WP_Query($args); 
        if( $query -> have_posts()):
        ?>

        <div class="cupcakes">
             <div class="wrapper clearfix">

                <article>
                    <h2><?php echo get_post_meta(get_the_ID(), 'cpt_title', true);  ?></h2>
                    <span class="intro"><?php echo get_post_meta(get_the_ID(), 'cpt_description', true);  ?></span>
                    <div class="section group">
                        <?php while( $query -> have_posts() ): $query -> the_post(); ?>
                            <div class="col span_1_of_3">
                                <?php if(has_post_thumbnail()): ?>
                                    <div class="circle"><?php the_post_thumbnail(); ?></div>
                                <?php else: ?>
                                    <div class="circle"></div>
                                <?php endif; ?>
                                <span class="name"><?php the_title(); ?></span>
                                <button class="nomnom hvr-sweep-to-top">EAT IT</button>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </article>

            </div> <!-- #main -->
        </div> <!-- #cupcakes -->

        <?php endif; ?>

<?php get_footer(); ?>