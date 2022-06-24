<x-guest-layout>

    <nav class="bg-transparent px-2 py-2.5  dark:bg-gray-800">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="/" class="flex items-center">
                <img src="/images/logo.png" class="mr-3 h-6 sm:h-12" alt="nabaz beauty Logo">
            </a>
            <button data-collapse-toggle="mobile-menu" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden focus:outline-none  dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                <ul class="flex flex-col items-center mt-4  md:flex-row gap-8 milliard-thin md:text-2xl md:font-2xl">
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-neutral-900 md:p-0 dark:text-white">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pricing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>

                    <li class="flex gap-4">
                        <i class="fa-lg fa-brands fa-facebook-f"></i>
                        <i class="fa-lg fa-brands fa-instagram"></i>
                        <i class="fa-lg fa-brands fa-twitter"></i>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div class="m-10">
            <h3 class="text-3xl milliard-light">Top Products</h3>
            <hr class="w-32">
        </div>
        <div class="grid grid-cols-1 justify-center   md:grid-cols-2 md:px-44">
            <div class="items-center justify-center space-y-28 flex flex-col">
                <div class="flex flex-col items-center">
                    <h1 class="text-9xl magiesta">Be natural,</h1>
                    <div class="flex mr-80 items-start">
                        <h1 class="text-6xl magiesta">Be beautiful,</h1>
                    </div>
                </div>
                <div class="flex flex-col items-center">
                    <h1 class="text-9xl magiesta nature-green">Be You..</h1>
                    <button type="button"
                        class="text-white ml-44 bg-nature-green  hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center text-4xl mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">More
                        info</button>

                </div>
            </div>

            <div id="animation-carousel" class="relative" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="overflow-hidden relative h-80 md:h-screen">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-linear" data-carousel-item="active">
                        <div class="flex justify-center items-center">
                            <img src="/images/Asset 2.png" class="w-48 md:w-96" alt="...">
                        </div>
                    </div>
                    <div class="hidden duration-700 ease-linear" data-carousel-item>
                        <div class="flex justify-center">
                            <img src="/images/Asset 2.png" class="w-48 md:w-96 " alt="...">
                        </div>
                    </div>

                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="flex absolute top-0 left-0 z-30 justify-center  items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex justify-center items-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-6 h-6 text-dark dark:text-gray-800" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                        <span class="hidden">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex justify-center items-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-6 h-6 text-dark dark:text-gray-800" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                        <span class="hidden">Next</span>
                    </span>
                </button>
            </div>
        </div>
        <img src="/images/paper2.png" class="fixed bottom-0 left-0 w-80 " alt="">

        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique ipsa odio veritatis, praesentium
        labore
        accusantium numquam, laudantium at commodi necessitatibus ab omnis id quis, tenetur debitis nesciunt autem
        reprehenderit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique ipsa odio veritatis, praesentium
        labore
        accusantium numquam, laudantium at commodi necessitatibus ab omnis id quis, tenetur debitis nesciunt autem
        reprehenderit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique ipsa odio veritatis, praesentium
        labore
        accusantium numquam, laudantium at commodi necessitatibus ab omnis id quis, tenetur debitis nesciunt autem
        reprehenderit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique ipsa odio veritatis, praesentium
        labore
        accusantium numquam, laudantium at commodi necessitatibus ab omnis id quis, tenetur debitis nesciunt autem
        reprehenderit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique ipsa odio veritatis, praesentium
        labore
        accusantium numquam, laudantium at commodi necessitatibus ab omnis id quis, tenetur debitis nesciunt autem
        reprehenderit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique ipsa odio veritatis, praesentium
        labore
        accusantium numquam, laudantium at commodi necessitatibus ab omnis id quis, tenetur debitis nesciunt autem
        reprehenderit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique ipsa odio veritatis, praesentium
        labore
        accusantium numquam, laudantium at commodi necessitatibus ab omnis id quis, tenetur debitis nesciunt autem
        reprehenderit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique ipsa odio veritatis, praesentium
        labore
        accusantium numquam, laudantium at commodi necessitatibus ab omnis id quis, tenetur debitis nesciunt autem
        reprehenderit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique ipsa odio veritatis, praesentium
        labore
        accusantium numquam, laudantium at commodi necessitatibus ab omnis id quis, tenetur debitis nesciunt autem
        reprehenderit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique ipsa odio veritatis, praesentium
        labore
        accusantium numquam, laudantium at commodi necessitatibus ab omnis id quis, tenetur debitis nesciunt autem
        reprehenderit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique ipsa odio veritatis, praesentium
        labore
        accusantium numquam, laudantium at commodi necessitatibus ab omnis id quis, tenetur debitis nesciunt autem
        reprehenderit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique ipsa odio veritatis, praesentium
        labore
        accusantium numquam, laudantium at commodi necessitatibus ab omnis id quis, tenetur debitis nesciunt autem
        reprehenderit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique ipsa odio veritatis, praesentium
        labore
        accusantium numquam, laudantium at commodi necessitatibus ab omnis id quis, tenetur debitis nesciunt autem
        reprehenderit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique ipsa odio veritatis, praesentium
        labore
        accusantium numquam, laudantium at commodi necessitatibus ab omnis id quis, tenetur debitis nesciunt autem
        reprehenderit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique ipsa odio veritatis, praesentium
        labore
        accusantium numquam, laudantium at commodi necessitatibus ab omnis id quis, tenetur debitis nesciunt autem
        reprehenderit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique ipsa odio veritatis, praesentium
        labore
        accusantium numquam, laudantium at commodi necessitatibus ab omnis id quis, tenetur debitis nesciunt autem
        reprehenderit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique ipsa odio veritatis, praesentium
        labore
        accusantium numquam, laudantium at commodi necessitatibus ab omnis id quis, tenetur debitis nesciunt autem
        reprehenderit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique ipsa odio veritatis, praesentium
        labore
        accusantium numquam, laudantium at commodi necessitatibus ab omnis id quis, tenetur debitis nesciunt autem
        reprehenderit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique ipsa odio veritatis, praesentium
        labore
        accusantium numquam, laudantium at commodi necessitatibus ab omnis id quis, tenetur debitis nesciunt autem
        reprehenderit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique ipsa odio veritatis, praesentium
        labore
        accusantium numquam, laudantium at commodi necessitatibus ab omnis id quis, tenetur debitis nesciunt autem
        reprehenderit.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique ipsa odio veritatis, praesentium
        labore
        accusantium numquam, laudantium at commodi necessitatibus ab omnis id quis, tenetur debitis nesciunt autem
        reprehenderit.

    </section>

</x-guest-layout>
