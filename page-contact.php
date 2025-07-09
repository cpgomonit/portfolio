<?php get_header(); ?>

<section class="grow bg-[#1F2D3D] text-gray-300 py-20">
    <div class="container">
        <header>
            <h1 class="text-white text-3xl md:text-4xl font-bold">contact me</h1>
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
                    <button type="submit" id="submitButton" class="inline-block bg-cyan-600 hover:bg-cyan-700 shadow-xl/20 rounded-full cursor-pointer px-6 py-2 transform hover:scale-105 hover:-translate-y-0.5 transition font-bold text-lg">
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

<?php get_footer(); ?>