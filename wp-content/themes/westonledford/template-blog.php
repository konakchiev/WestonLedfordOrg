<?php
/* 
    Template name: Blog 
*/
get_header();

$post_date = get_the_date( 'l, F j, Y' );
?>

    <section class="title-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Writing</h1>
                    <p>Latest articles from project management, team work and communication</p>
                </div>
            </div>
        </div>
    </section>

    <section class="main-blog">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h1 class="title-cat">Blog Posts</h1>
                    <div class="row">
                    <?php
                    $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
                    <?php $wpb_query = new WP_QUERY($wpb_all_query); ?>
                    <?php if ( $wpb_all_query->have_posts() ) : ?>
                    <?php
                    while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

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
                        <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
                        <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
                    <?php endwhile; ?>

                    <?php endif; ?>
                </div>

            </div>

                    <?php include('blog-sidebar.php'); ?>

        </div>
    </section>

    </div>

<?php 

    get_footer();

?>