<?php
/**
 * A Simple Category Template
 */

get_header(); ?>
    <section class="title-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><?php echo single_cat_title('' , true ); ?></h1>
                    <p>Latest articles from this category</p>
                </div>
            </div>
        </div>
    </section>
    <section class="main-blog">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="row">

            <?php
            // Check if there are any posts to display
            if ( have_posts() ) : ?>
                <?php

// The Loop
                while ( have_posts() ) : the_post(); ?>
                    <div class="col-lg-12">
                        <article class="normal-post">
                            <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                            <div class="row">
                                <?php if(get_the_post_thumbnail() != "") : ?>
                                    <div class="col-lg-4">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                <?php else : ?>
                                <?php endif; ?>
                                <div class="col-lg-12">
                                    <div class="post-content">

                                        <p><?php echo the_excerpt(20); ?></p>
                                        <span class="datetime"><?php echo the_time('jS F, Y');?></span>
                                        <div class="readmore">
                                            <a class="btn btn-primary" href="<?php the_permalink();?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                    </div>

                <?php endwhile;

            else: ?>
                <p>Sorry, no posts matched your criteria.</p>

            <?php endif; ?>
        </div>
                </div>
                    <?php include('blog-sidebar.php'); ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>