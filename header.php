<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (is_post_type_archive('project')) { ?>
        <meta name="description" content="View WordPress projects by Christian Gomonit featuring custom themes.">
    <?php } elseif (is_post_type_archive('article')) { ?>
        <meta name="description" content="Read insights and experiences on WordPress development by Christian Gomonit">
    <?php } else { ?>
        <meta name="description" content="<?php the_field('meta_description'); ?>">
    <?php } ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class('font-inter flex flex-col min-h-screen'); ?>>
    <header>
        <nav class="py-6 bg-[#0B132B] text-white">
            <ul class="flex flex-wrap justify-center uppercase text-xl font-bold">
                <li class="mx-2 p-2">
                    <?php
                        if (is_front_page()) { ?>
                            <a class="text-[#A2D6F9] hover:underline hover:underline-offset-6 cursor-pointer" href="<?php echo site_url(); ?>">Home</a>
                        <?php } else { ?>
                            <a class="hover:text-[#A2D6F9] hover:underline hover:underline-offset-6 cursor-pointer" href="<?php echo site_url(); ?>">Home</a>
                        <?php }
                    ?>
                </li>
                <li class="mx-2 p-2">
                    <?php
                        if (get_post_type() == 'project') { ?>
                            <a class="text-[#A2D6F9] hover:underline hover:underline-offset-6 cursor-pointer" href="<?php echo get_post_type_archive_link('project'); ?>">Projects</a>
                        <?php } else { ?>
                            <a class="hover:text-[#A2D6F9] hover:underline hover:underline-offset-6 cursor-pointer" href="<?php echo get_post_type_archive_link('project'); ?>">Projects</a>
                        <?php }
                    ?>
                </li>
                <li class="mx-2 p-2">
                    <?php
                        if (get_post_type() == 'article') { ?>
                            <a class="text-[#A2D6F9] hover:underline hover:underline-offset-6 cursor-pointer" href="<?php echo get_post_type_archive_link('article'); ?>">Articles</a>
                        <?php } else { ?>
                            <a class="hover:text-[#A2D6F9] hover:underline hover:underline-offset-6 cursor-pointer" href="<?php echo get_post_type_archive_link('article'); ?>">Articles</a>
                        <?php }
                    ?>
                </li>
                <li class="mx-2 p-2">
                    <?php
                        if (is_page('contact')) { ?>
                            <a class="text-[#A2D6F9] hover:underline hover:underline-offset-6 cursor-pointer" href="<?php echo get_permalink(get_page_by_path('contact')); ?>">Contact</a>
                        <?php } else { ?>
                            <a class="hover:text-[#A2D6F9] hover:underline hover:underline-offset-6 cursor-pointer" href="<?php echo get_permalink(get_page_by_path('contact')); ?>">Contact</a>
                        <?php }
                    ?>
                </li>
            </ul>
        </nav>
    </header>