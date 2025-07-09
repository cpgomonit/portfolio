<?php get_header(); ?>

    <section class="grow bg-[#173345] text-gray-300 py-20">
        <div class="container">
            
            <?php while (have_posts()) {
                the_post(); ?>
                <header>
                    <h1 class="wp-block-title text-white"><?php the_title(); ?></h1>
                    <span class="post-date"><?php the_time('F jS Y'); ?></span>
                </header>
                <div class="wp-block-content"><?php the_content(); ?></div>
            <?php } 

            echo paginate_links(); ?>
        </div>
    </section>

<?php get_footer(); ?>