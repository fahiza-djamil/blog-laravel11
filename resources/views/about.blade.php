<x-layout>
    <x-title :title="$title" />
    <section class="bg-gray-100 rounded-3xl mx-8 dark:bg-gray-900">
        <h2 class="text-3xl tracking-tight font-extrabold text-center text-gray-900 py-5 dark:text-white">Abous Us
        </h2>
        <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2">
            <img class="w-full dark:hidden"
                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup.svg"
                alt="dashboard image">
            <img class="w-full hidden dark:block"
                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/cta/cta-dashboard-mockup-dark.svg"
                alt="dashboard image">
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Let's create more
                    tools and ideas that brings us together.</h2>
                <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">Flowbite helps you connect with
                    friends and communities of people who share your interests. Connecting with your friends and family
                    as well as discovering new ones is easy with features like Groups.</p>
                <a href="#"
                    class="inline-flex items-center text-white bg-rose-500 hover:bg-rose-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                    Get started
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
</x-layout>
