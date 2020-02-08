<?php get_header(); ?>


<main id="content" class="main-class">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header class="header-container">
            <h1 class="entry-title"><?php the_title(); ?></h1> 

            <div class="edit-post-container">
                <?php edit_post_link(); ?>
            </div>
        </header>

        <div class="entry-content">

            <?php the_content(); ?>
            <div class="entry-links"><?php wp_link_pages(); ?></div>

        </div>

        <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>


    </article>
        
    <?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
    <?php endwhile; endif; ?>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>