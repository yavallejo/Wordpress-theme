<?php /* Template Name: Left sidebar */ ?>

<?php get_header('nohome'); ?> <!-- header -->

            <!-- Main -->
                <div id="main-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="4u 12u(mobile)">

                                <!-- Sidebar -->
                                    <section class="box">
                                        <a href="#" class="image featured">
                                           <img src="images/pic09.jpg" alt="" />
                                        </a>
                                        <header>
                                            <h3>Sed etiam lorem nulla</h3>
                                        </header>
                                        <p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
                                        <footer>
                                            <a href="#" class="button alt">Magna sed taciti</a>
                                        </footer>
                                    </section>
                                    <section class="box">
                                        <header>
                                            <h3>Feugiat consequat</h3>
                                        </header>
                                        <p>Veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat sed lorem consequat feugiat lorem dolore.</p>
                                        <ul class="divided">
                                            <li><a href="#">Sed et blandit consequat sed</a></li>
                                            <li><a href="#">Hendrerit tortor vitae sapien dolore</a></li>
                                            <li><a href="#">Sapien id suscipit magna sed felis</a></li>
                                            <li><a href="#">Aptent taciti sociosqu ad litora</a></li>
                                        </ul>
                                        <footer>
                                            <a href="#" class="button alt">Ipsum consequat</a>
                                        </footer>
                                    </section>

                            </div>
                            <div class="8u 12u(mobile) important(mobile)">
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <!-- Content -->
                                    <article class="box post">
                                        <a href="#" class="image featured">
                                           <?php
                                                        // check if the post has a Post Thumbnail assigned to it.
                                                            if ( has_post_thumbnail() ) {
                                                                the_post_thumbnail('category-full');
                                                            }
                                                       ?>
                                        </a>
                                        <header>
                                            <h2><?php the_title(); ?></h2>

                                        </header>
                                        <p>
                                            <?php the_content(); ?>
                                        </p>
                                    </article>
                                <?php endwhile; ?>
                                            <!-- post navigation -->
                                            <?php else: ?>
                                            <!-- no posts found -->
                                            <h3>No hay nada</h3>
                                            <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>

           <?php get_footer(); ?>