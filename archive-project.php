<?php get_header(); ?>

    <section class="grow bg-[#2B345C] text-gray-300 py-20">
        <div class="container">
            <header>
                <h1 class="text-white text-3xl md:text-4xl font-bold">my projects</h1>
            </header>
            <div class="divide-y divide-[#6a809a]">
            <?php while (have_posts()) {
                the_post(); ?>
                <div class="py-20">
                    <h2 class="text-2xl md:text-3xl font-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="mt-2 text-sm"><?php the_time('F jS Y'); ?></p>
                    <div class="mt-6 bg-white rounded-md max-w-3xl p-1 mx-auto">
                        <?php the_post_thumbnail('768w-by-432l', ['class' => 'rounded-md']); ?>
                    </div>
                    <div class="text-sm md:text-base mt-6"><?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink(); ?>" class="mt-6 inline-block bg-cyan-800 hover:bg-cyan-900 shadow-xl/20 rounded-full cursor-pointer px-6 py-2 transform hover:scale-105 hover:-translate-y-0.5 transition font-bold text-lg">Read more</a>
                </div>
            <?php } ?>
            </div>
            <?php echo paginate_links(); ?>
        </div>
    </section>

    
<?php get_footer(); ?>