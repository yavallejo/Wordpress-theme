<?php get_header('nohome'); ?> <!-- header -->
    <!-- Main -->
                <div id="main-wrapper">
                    <div class="container">
                        <!-- Content -->
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <!-- post -->


                            <article class="box post">
                                <a href="#" class="image featured">
                                    <img src="<?php bloginfo('template_directory') ?>/images/pic01.jpg" alt="" /></a>
                                </a>
                                <header>
                                    <h2 class="text--red"><?php the_title(); ?></h2>
                                </header>
                                <?php the_content(); ?>
                             </article>

                             <?php endwhile; ?>
                                <!-- post navigation -->
                            <?php else: ?>
                                <!-- no posts found -->
                                <p>No hay nada para mostrar</p>
                             <?php endif; ?>

                    </div>
                </div>
<?php get_footer(); ?>

