<?php get_header(); ?>

    <section class="grow bg-[#2B345C] text-gray-300 py-20">
        <div class="container">
            
            <?php while (have_posts()) {
                the_post(); ?>
                <header>
                    <h1 class="wp-block-title text-white"><?php the_title(); ?></h1>
                    <span class="post-date"><?php the_time('F jS Y'); ?></span>
                </header>
                <div class="bg-white rounded-md max-w-3xl p-1 mt-16 mx-auto">
                    <?php the_post_thumbnail('768w-by-432l', ['class' => 'rounded-md']); ?>
                </div>
                <div class="wp-block-content"><?php the_content(); ?></div>
            <?php } 

            echo paginate_links(); ?>
        </div>
    </section>

<?php get_footer(); ?>