<?php get_header(); ?>

    <section class="grow bg-[#173345] text-gray-300 py-20">
        <div class="container">
            <header>
                <h1 class="text-white text-3xl md:text-4xl font-bold">my articles</h1>
            </header>
            <?php while (have_posts()) {
                the_post(); ?>
                <div class="post mt-20 border-b-1 border-[#5d7a91] pb-20">
                    <h2 class="text-2xl md:text-3xl font-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="mt-2 text-sm"><?php the_time('F jS Y'); ?></p>
                    <div class="text-sm md:text-base mt-8"><?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink(); ?>" class="mt-6 inline-block bg-cyan-800 hover:bg-cyan-900 shadow-xl/20 rounded-full cursor-pointer px-6 py-2 transform hover:scale-105 hover:-translate-y-0.5 transition font-bold text-lg">Read more</a>
                </div>
            <?php } 

            echo paginate_links(); ?>
        </div>
    </section>

    
<?php get_footer(); ?>