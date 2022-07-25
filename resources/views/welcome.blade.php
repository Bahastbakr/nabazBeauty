<x-guest-layout>

    <section>
        <div class="ml-28">
            <h3 class="text-3xl milliard-light">Top Products</h3>
            <hr class="w-32">
        </div>
        <div class="grid grid-cols-1 justify-center md:grid-cols-2 md:px-48">
            <div class="items-center justify-center space-y-28 flex flex-col">
                <div class="flex flex-col items-start">
                    <h1 class="text-9xl magiesta">Be natural,</h1>
                    <h1 class="text-6xl magiesta">Be beautiful,</h1>
                    <h1 class="text-9xl magiesta nature-green">Be You..</h1>
                    <button type="button"
                        class="text-white mt-10 bg-nature-green  hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center text-4xl mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">More
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
        <img src="/images/paper2.png" class="fixed z-10 bottom-0 left-0 w-80 " alt="">

        <section class="flex flex-col gap-y-20 mb-48">
            <div class="flex justify-center">
                <h3 class="text-7xl magiesta">Our Brands</h3>
            </div>

            <div class="flex flex-col bg-nature-green-light py-10 mx-20">
                <div
                    class="grid grid-cols-1 md:grid-cols-4 items-center place-items-center  md:grid-rows-2 space-x-5 gap-y-5  px-10 py-10">
                    @foreach ($brands as $brand)
                        <a class="transition duration-200 hover:scale-110"
                            href="{{ route('indexProductClientWithId', $brand->id) }}">
                            <img src="/storage/images/brands/{{ $brand->logo }}" alt="brand1">
                        </a>
                    @endforeach
                </div>
                <div class="flex justify-center">
                    <button type="button"
                        class="text-white bg-nature-green milliard-light w-2/6 text-center hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center text-4xl mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">View
                        all</button>
                </div>
            </div>
        </section>

        <section class="flex flex-col gap-y-20  mb-48">
            <div class="flex flex-col">
                <div class="flex justify-center items-center">
                    <hr class="w-1/6" style="height:1px;border:none;color:#7d9672;background-color:#7d9672;" />
                    <h3 class="text-7xl magiesta">Advantages of</h3>
                    <hr class="w-1/6" style="height:1px;border:none;color:#7d9672;background-color:#7d9672;" />
                </div>
                <h3 class="text-6xl text-center magiesta">our products</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="flex flex-col justify-center items-center">
                    <img src="/images/Asset 14.png" alt="">
                    <h3 class="text-3xl milliard-medium mb-4">Only natural ingredients</h3>
                    <p class="text-xl md:px-32  milliard-thin text-justify">
                        Lorem ipsum dolor sit amet, consectetuer
                        adipiscing elit, sed diam nonummy nibh
                        euismod tincidunt ut laoreet dolore magna
                        aliquam erat volutpat. Ut wisi enim ad
                        minim veniam, quis nostrud exerci tation
                        ullamcorper suscipit lobortis nisl ut aliquip
                        ex ea commodo consequat. Duis autem
                        vel eum iriure dolor in
                    </p>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <img src="/images/Asset 13.png" alt="">
                    <h3 class="text-3xl milliard-medium mb-4">Gluten-free Products</h3>
                    <p class="text-xl md:px-32  milliard-thin text-justify">
                        Lorem ipsum dolor sit amet, consectetuer
                        adipiscing elit, sed diam nonummy nibh
                        euismod tincidunt ut laoreet dolore magna
                        aliquam erat volutpat. Ut wisi enim ad
                        minim veniam, quis nostrud exerci tation
                        ullamcorper suscipit lobortis nisl ut aliquip
                        ex ea commodo consequat. Duis autem
                        vel eum iriure dolor in
                    </p>

                </div>
            </div>

        </section>



        <section
            class="flex bg-[url('/images/quote.png')] bg-no-repeat bg-left bg-fixed	 relative flex-col gap-y-20 py-48 mb-28 bg-nature-green-dark">
            <div class="custom-shape-divider-top-1656103830">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path
                        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                        class="shape-fill"></path>
                </svg>
            </div>
            <div class="py-10">
                <h3 class="text-7xl magiesta text-white text-center">Happy Customers</h3>
                <div id="controls-carousel" class="relative md:px-96" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="overflow-hidden relative h-48 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <div
                                class="flex flex-col gap-2 block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2">
                                <p class="md:text-2xl text-white milliard-thin text-justify">
                                    Lorem ipsum dolor sit amet, consectetuer
                                    adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna
                                    aliquam erat volutpat. Ut wisi enim ad
                                    minim veniam, quis nostrud exerci tation
                                    ullamcorper suscipit lobortis nisl ut aliquip
                                    ex ea commodo consequat. Duis autem
                                    vel eum iriure dolor in
                                </p>
                                <div class="flex flex-col self-end text-white">
                                    <h3 class="text-2xl milliard-medium">Sozy kareem</h3>
                                    <h3 class="text-sm milliard-light">Reular Customer
                                    </h3>

                                </div>

                            </div>
                        </div>

                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div
                                class="flex flex-col gap-2 block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2">
                                <p class="md:text-2xl text-white milliard-thin text-justify">
                                    Lorem ipsum dolor sit amet, consectetuer
                                    adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna
                                    aliquam erat volutpat. Ut wisi enim ad
                                    minim veniam, quis nostrud exerci tation
                                    ullamcorper suscipit lobortis nisl ut aliquip
                                    ex ea commodo consequat. Duis autem
                                    vel eum iriure dolor in
                                </p>
                                <div class="flex flex-col self-end text-white">
                                    <h3 class="text-2xl milliard-medium">Sozy kareem</h3>
                                    <h3 class="text-sm milliard-light">Reular Customer
                                    </h3>

                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex justify-center items-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                            <span class="hidden">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex justify-center items-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7"></path>
                            </svg>
                            <span class="hidden">Next</span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="custom-shape-divider-bottom-1656103971">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path
                        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                        class="shape-fill"></path>
                </svg>
            </div>
        </section>


        <section class="flex flex-col gap-y-20  mb-48">
            <div class="flex flex-col">
                <h3 class="text-6xl text-center magiesta">Latest Articles</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-5 md:px-48">
                <div>
                    <img src="/images/latestA1.png" alt="latestA1">
                </div>
                <div>
                    <img src="/images/latestA2.png" alt="latestA2">
                </div>
                <div>
                    <img src="/images/latestA3.png" alt="latestA3">
                </div>
            </div>
        </section>

        <section class="flex flex-col gap-y-20  mb-48">

            <div class="grid grid-cols-1 space-y-28 md:px-48">
                <div class="grid grid-cols-2 gap-5">
                    <div class="flex flex-col">
                        <h3 class="text-9xl text-center magiesta">Contact us</h3>
                        <h3 class="text-8xl text-center magiesta">Anytime!</h3>
                    </div>
                    <div class="flex flex-col gap-y-4">
                        <div class="flex flex-col items-start">
                            <h3 class="text-3xl  text-nature-green-dark milliard-medium">E-mail:</h3>
                            <h3 class="text-2xl  milliard-light"><i> Info@nabazbeauty.com </i></h3>
                        </div>
                        <div class="flex flex-col items-start">
                            <h3 class="text-3xl  text-nature-green-dark milliard-medium">Address</h3>
                            <h3 class="text-2xl  milliard-light"><i> As Sulaymaniyah, Iraq, Ashaba Spi
                                    Building, NO.50
                                </i></h3>
                        </div>
                        <div class="flex flex-col items-start">
                            <h3 class="text-3xl  text-nature-green-dark milliard-medium">Phone</h3>
                            <h3 class="text-2xl  milliard-light"><i> +964 (0) 770 151 4166 </i>
                        </div>


                    </div>
                    <div class="grid grid-cols-2 gap-5"></div>
                </div>

                <div class="grid grid-cols-2 items-center gap-5">
                    <div class="flex flex-col">
                        <h3 class="text-5xl text-center magiesta">Or leave</h3>
                        <h3 class="text-8xl text-center magiesta">a Message</h3>
                    </div>
                    <form class="flex flex-col gap-y-10">
                        <div class="mb-5">
                            <div class="relative z-0">
                                <input type="text" id="floating_standard"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer"
                                    placeholder=" " />
                                <label for="floating_standard"
                                    class="absolute text-xl text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Your
                                    Name</label>
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="relative z-0">
                                <input type="text" id="floating_standard"
                                    class="block py-2.5 px-0 w-full text-xl text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer"
                                    placeholder=" " />
                                <label for="floating_standard"
                                    class="absolute text-xl text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Your
                                    E-mail</label>
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="relative z-0">
                                <input type="text" id="floating_standard"
                                    class="block py-2.5 px-0 w-full text-xl text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer"
                                    placeholder=" " />
                                <label for="floating_standard"
                                    class="absolute text-xl text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Your
                                    message</label>
                            </div>
                        </div>
                        <div class="mb-5">
                            <button type="button"
                                class="text-white bg-nature-green hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-900 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Send</button>

                        </div>

                    </form>
                    <div class="grid grid-cols-2 gap-5"></div>
                </div>
        </section>
    </section>

</x-guest-layout>
