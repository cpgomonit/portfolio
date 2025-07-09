<?php get_header(); ?>

<main>
    <section class="hero-section bg-[#3A506B] text-white py-14">
        <div class="container">
            <div class="md:flex md:flex-row-reverse md:items-center">
                <h1 class="text-3xl md:text-4xl font-bold">Hi! I'm Christian Gomonit, a WordPress developer in the Philippines, building both custom themes and simpler website solutions.</h1>
                <img src="<?php echo get_theme_file_uri('/images/me.webp'); ?>" alt="Black and white portrait of Christian wearing glasses and a t-shirt" class="grayscale scale-75 w-full h-full md:w-1/2 md:h-1/2 bg-white p-2 rounded-full mx-auto">
            </div>
            <p class="text-sm md:text-base text-gray-300">Whether you're looking to build a website from the ground up or refine an existing one, I provide solutions tailored to your goals.</p>
            <p class="text-sm md:text-base text-gray-300 mt-4">My aim is <strong>to give you a website that supports your goals and feels effortless for your audience to use.</strong></p>
        </div>
    </section>

    <section class="projects-section bg-[#2B345C] text-gray-300 py-20">
        <div class="container">
            <header>
                <h2 class="text-white text-2xl md:text-3xl font-bold">my projects</h2>
            </header>
            <div class="projects-thumbnails md:grid md:grid-cols-2 md:gap-10 mx-auto mt-12">
                <?php
                    $frontPageProjects = new WP_Query([
                        'post_type' => 'project',
                        'posts_per_page' => 4,
                    ]);

                    while ($frontPageProjects->have_posts()) {
                        $frontPageProjects->the_post(); ?>
                        <div class="project-thumbnail mt-12 max-w-lg mx-auto">
                            <div class="bg-white rounded-md p-1 mx-auto">
                                <?php the_post_thumbnail('768w-by-432l', ['class' => 'mx-auto rounded-md']); ?>
                            </div>
                            <h3 class="font-bold text-lg md:text-xl mt-4"><?php the_title(); ?></h3>
                            <p class="mt-2 text-sm md:text-base"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            <a href="<?php the_permalink(); ?>" class="mt-8 inline-block bg-sky-800 hover:bg-sky-900 shadow-xl/20 rounded-full cursor-pointer px-6 py-2 transform hover:scale-105 hover:-translate-y-0.5 transition font-bold">More details</a>
                        </div>
                    <?php }
                ?>
            </div>
            <div class="mt-20 max-w-lg md:max-w-5xl mx-auto">
                <a href="<?php echo get_post_type_archive_link('project'); ?>" class="inline-block bg-cyan-800 hover:bg-cyan-900 shadow-xl/20 rounded-full cursor-pointer px-6 py-2 transform hover:scale-105 hover:-translate-y-0.5 transition font-bold text-lg">More projects here</a>
            </div>
        </div>
    </section>

    <section class="skills-and-tools-section bg-[#173345] text-gray-300 py-20">
        <div class="container">
            <header>
                <h2 class="text-white text-2xl md:text-3xl font-bold">services offered</h2>
                <p class="text-sm md:text-base text-gray-300 mt-4">Here's how I can help you or your team build, manage, and grow your web presence.</p>
            </header>
            <ul class="mt-12 grid gap-8 md:grid-cols-3">
                <li class="flex gap-8 flex-col">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-monitor-icon lucide-monitor w-24 h-24"><rect width="20" height="14" x="2" y="3" rx="2"/><line x1="8" x2="16" y1="21" y2="21"/><line x1="12" x2="12" y1="17" y2="21"/></svg>
                    <div class="flex flex-col justify-start">
                        <h3 class="font-bold text-lg md:text-xl md:mt-4">Custom Website Development</h3>
                        <p class="mt-2 text-sm md:text-base">Whether you already have a design or need one created from scratch, I can bring your vision to life using WordPress.</p>
                    </div>
                </li>
                <li class="flex gap-8 flex-col">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench-icon lucide-wrench w-24 h-24"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                    <div class="flex flex-col justify-start">
                        <h3 class="font-bold text-lg md:text-xl md:mt-4">Website Maintenance</h3>
                        <p class="mt-2 text-sm md:text-base">Scheduled plugin updates, backups, and general upkeep so you can focus on bigger things.</p>
                    </div>
                </li>
                <li class="flex gap-8 flex-col">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text-icon lucide-file-text w-24 h-24"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/><path d="M14 2v4a2 2 0 0 0 2 2h4"/><path d="M10 9H8"/><path d="M16 13H8"/><path d="M16 17H8"/></svg>
                    <div class="flex flex-col justify-start">
                        <h3 class="font-bold text-lg md:text-xl md:mt-4">Content Management Support</h3>
                        <p class="mt-2 text-sm md:text-base">Blog post formatting, uploads, and SEO-friendly publishing on a recurring schedule.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="contact-section bg-[#1F2D3D] text-gray-300 py-20">
        <div class="container">
            <header>
                <h2 class="text-white text-2xl md:text-3xl font-bold">contact me</h2>
                <p class="text-sm md:text-base text-gray-300 mt-4">Have a question or a project in mind? I'd be happy to hear from you! Just fill out the form below or send me an email at <a href="mailto:hello&#64;cpgomonit&#46;com" class="text-[#4DA8FF] underline">hello@cpgomonit.com</a>.</p>
            </header>
            <div class="post mt-10">
                <form id="contactForm" class="max-w-lg mx-auto">
                    <div>
                        <label for="first-name">First Name</label>
                        <input id="firstName" name="first-name" required minlength="2" maxlength="30" placeholder="2-30 characters" class="block w-full border p-2 mt-2 rounded-md focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                    </div>
                    <div class="mt-4">
                        <label for="last-name">Last Name (optional)</label>
                        <input id="lastName" name="last-name" minlength="2" maxlength="50" placeholder="2-50 characters" class="block w-full border p-2 mt-2 rounded-md focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                    </div>
                    <div class="mt-4">
                        <label for="email">Email Address</label>
                        <input id="email" type="email" name="email" required placeholder="you@example.com" class="block w-full border p-2 mt-2 rounded-md focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                    </div>
                    <div class="mt-4">
                        <label for="phone">Phone Number</label>
                        <input id="phone" type="tel" name="phone" minlength="10" maxlength="15" pattern="^\+?[0-9]{10,15}$" required placeholder="Include your country code" class="block w-full border p-2 mt-2 rounded-md focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                    </div>
                    <div class="mt-4">
                        <div class="flex justify-between">
                            <label for="message">Your Message</label>
                            <span id="charCount">0/500</span>
                        </div>
                        <textarea id="message" name="message" maxlength="500" rows="5" oninput="countChars(this)" required class="block w-full border p-2 mt-2 rounded-md resize-none focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500" placeholder="Briefly describe your project, question, or idea"></textarea>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <button type="submit" id="submitButton" class="inline-block bg-cyan-800 hover:bg-cyan-900 shadow-xl/20 rounded-full cursor-pointer px-6 py-2 transform hover:scale-105 hover:-translate-y-0.5 transition font-bold text-lg">
                            <div class="flex justify-between items-center gap-1">
                                <svg id="submitButtonSpinIcon" class="mr-1 -ml-2 size-5 animate-spin text-white hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                <span id="submitButtonMessage">Send</span>
                            </div>
                        </button>
                        <span id="responseMessage"></span>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>