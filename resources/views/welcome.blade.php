<x-guest-layout>

    <section>
        <div class="md:ml-28 p-5">
            <h3 class="text-2xl md:text-3xl milliard-light">Top Products</h3>
            <hr class="w-32">
        </div>
        <div class="grid grid-cols-1 mb-32  justify-center md:grid-cols-2 md:px-48">
            <div class="items-center order-last md:order-none justify-center space-y-28 flex flex-col">
                <div class="flex flex-col items-start">
                    <h1 data-aos="fade-left" data-aos-duration="500" class="text-6xl md:text-9xl magiesta">Be natural,</h1>
                    <h1 data-aos="fade-right" data-aos-duration="1000" class="text-3xl md:text-6xl magiesta">Be
                        beautiful,
                    </h1>
                    <h1 data-aos="fade-left" data-aos-duration="1200"
                        class="text-6xl md:text-9xl magiesta nature-green">Be You..</h1>
                    <button data-aos="fade-up" data-aos-duration="500" type="button"
                        class="text-white md:mt-10 bg-nature-green  hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300  rounded-full text-sm px-5 py-2.5 text-center md:text-4xl mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">More
                        info</button>

                </div>

            </div>

            <div id="animation-carousel" data-aos="fade-up" data-aos-duration="1200" class="relative"
                data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="overflow-hidden relative h-80 md:h-screen">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="flex justify-center items-center">
                            <img loading="lazy" src="/images/testImg.png" class="w-80 md:w-full " alt="...">
                        </div>
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="flex justify-center items-center">
                            <img loading="lazy" src="/images/fan002.png" class="w-80 md:w-full ">
                        </div>
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <div class="flex justify-center items-center">
                            <img loading="lazy" src="/images/floractive.png" class="w-80 md:w-full  ">
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
        <img src="/images/paper2.png" class="fixed z-10 bottom-0 left-0 w-24 md:w-80 " alt="">


        <section class="flex flex-col gap-y-10 mb-48" id="aboutUs">
            <div data-aos="fade-down" data-aos-duration="500" class="flex justify-center">
                <h3 class="text-5xl md:text-7xl magiesta z-50">About Us</h3>
            </div>
            <div class="grid grid-cols-1 items-center p-5 md:grid-cols-2 gap-5 md:px-48">
                <div data-aos="fade-up" data-aos-duration="700" class="z-50 px-10">
                    <p class="md:text-2xl md:first-letter:text-9xl text-black milliard-thin text-justify">
                        <strong>Nabaz Beauty</strong> is one of the companies in the field
                        of import and
                        export of
                        beauty products
                        and
                        salon in Sulaimani, which has more than 6 years of experience in this field and has agents
                        of 13
                        international brands in the field of beauty in Iraq and Iran.
                    </p>
                </div>
                <div class="absolute bg-nature-green-light h-[70%] md:h-[55%]  w-[40%] z-0">

                </div>
                <div data-aos="fade-down" data-aos-duration="1000" class="z-50">
                    <img loading="lazy" src="/images/aboutUs.jpg" alt="latestA2" class="shadow-md">
                </div>

            </div>

        </section>


        <section class="flex flex-col gap-y-10 mb-48">
            <div data-aos="fade-down" data-aos-duration="500" class="flex justify-center">
                <h3 class="text-5xl md:text-7xl magiesta">Our Brands</h3>
            </div>

            <div class="flex flex-col bg-nature-green-light py-10 mx-10 md:mx-20">
                @livewire('load-brands')
            </div>
        </section>

        <section class="flex flex-col gap-y-20  mb-48">
            <div data-aos="fade-down" data-aos-duration="700" class="flex flex-col">
                <div class="flex justify-center items-center">
                    <hr class="w-1/6" style="height:1px;border:none;color:#7d9672;background-color:#7d9672;" />
                    <h3 class=" text-4xl md:text-7xl magiesta">Advantages of</h3>
                    <hr class="w-1/6" style="height:1px;border:none;color:#7d9672;background-color:#7d9672;" />
                </div>
                <h3 class=" text-4xl md:text-6xl text-center magiesta">our products</h3>
            </div>

            <div class="grid gap-y-14 md:px-32 grid-cols-1 md:grid-cols-4">
                <div data-aos="zoom-in" data-aos-duration="300" class="flex flex-col justify-center items-center">
                    <img class="w-14 md:w-20" src="/images/Asset 1.svg" alt="">
                    <h3 class="text-3xl magiesta ">Organic Product</h3>
                </div>
                <div data-aos="zoom-in" data-aos-duration="500" class="flex flex-col justify-center items-center">
                    <img class="w-14 md:w-20" src="/images/Asset 2.svg" alt="">
                    <h3 class="text-3xl magiesta ">Cruelty Free</h3>

                </div>
                <div data-aos="zoom-in" data-aos-duration="700" class="flex flex-col justify-center items-center">
                    <img class="w-14 md:w-20" src="/images/Asset 5.svg" alt="">
                    <h3 class="text-3xl magiesta ">Lab tested</h3>

                </div>
                <div data-aos="zoom-in" data-aos-duration="1000" class="flex flex-col justify-center items-center">
                    <img class="w-14 md:w-20" src="/images/Asset 6.svg" alt="">
                    <h3 class="text-3xl magiesta ">No toxic chemicals</h3>

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
                <h3 data-aos="fade-down" data-aos-duration="700"
                    class="text-4xl md:text-7xl magiesta text-white text-center">Happy Customers</h3>
                <div id="controls-carousel" class="relative px-12 md:px-96" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="overflow-hidden relative h-80 rounded-lg  md:h-80 2xl:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                            <div
                                class="flex flex-col gap-2 block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2">
                                <p class="md:text-2xl text-white milliard-thin text-justify">
                                    Your products are really perfect, I personally use it constantly and benefited a lot
                                    from it, thanks alot

                                </p>
                                <div class="flex flex-col self-end text-white">
                                    <h3 class="text-xl md:text-2xl milliard-medium">Niga A. Karem</h3>
                                </div>

                            </div>
                        </div>

                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <div
                                class="flex flex-col gap-2 block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2">
                                <p class="md:text-2xl text-white milliard-thin text-justify">
                                    Im as a salon owner, I can say that their products are the best we have used untill
                                    now
                                    And the people who visit us are satisfied with the product and visit us frequently
                                </p>
                                <div class="flex flex-col self-end text-white">
                                    <h3 class="text-xl md:text-2xl milliard-medium">Sozy O. Omar</h3>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="flex absolute top-0 left-0 z-30 justify-center items-center md:px-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex justify-center items-center w-10 h-10 rounded-full md:bg-white/30 dark:bg-gray-800/30 md:group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 md:group-focus:ring-4 md:group-focus:ring-white dark:group-focus:ring-gray-800/70 md:group-focus:outline-none">
                            <svg class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                            <span class="hidden">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="flex absolute top-0 right-0 z-30 justify-center items-center md:px-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex justify-center items-center w-10 h-10 rounded-full md:bg-white/30 dark:bg-gray-800/30 md:group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 md:group-focus:ring-4 md:group-focus:ring-white dark:group-focus:ring-gray-800/70 md:group-focus:outline-none">
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
            <div data-aos="fade-down" data-aos-duration="700" class="flex flex-col">
                <h3 class="text-5xl md:text-6xl text-center magiesta">Latest Articles</h3>
            </div>

            <div class="grid grid-cols-1 p-5 md:grid-cols-3 gap-5 md:px-48">
                <a href="https://www.instagram.com/p/CgPMNNet_b0/" data-aos="fade-up" data-aos-duration="700">
                    <img loading="lazy" src="/images/latestA1.jpg" alt="latestA1">
                </a>
                <a href="https://www.instagram.com/p/CfmF_e1IpVy/" data-aos="fade-down" data-aos-duration="1000">
                    <img loading="lazy" src="/images/latestA2.jpg" alt="latestA2">
                </a>
                <a href="https://www.facebook.com/nabazbeauty/photos/a.163372692886784/169263112297742/"
                    data-aos="fade-up" data-aos-duration="1200">
                    <img loading="lazy" src="/images/latestA3.jpg" alt="latestA3">
                </a>
            </div>
        </section>

        <section class="flex flex-col gap-y-20  mb-48" id="contact">

            <div class="grid grid-cols-1 space-y-28 md:px-48">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="flex flex-col mb-5">
                        <h3 class="text-5xl md:text-9xl text-center magiesta">Contact us</h3>
                        <h3 class="text-4xl md:text-8xl text-center magiesta">Anytime!</h3>
                    </div>
                    <div class="flex flex-col gap-y-4">
                        <div class="flex flex-col items-center md:items-start">
                            <h3 class="text-2xl md:text-3xl  text-nature-green-dark milliard-medium">E-mail:</h3>
                            <h3 class="text-lg md:text-2xl  milliard-light"><i> Info@nabazbeauty.com </i></h3>
                        </div>
                        <div class="flex flex-col items-center md:items-start">
                            <h3 class=" text-2xl md:text-3xl  text-nature-green-dark milliard-medium">Address</h3>
                            <h3 class="text-lg md:text-2xl text-center  milliard-light"><i> As Sulaymaniyah, Iraq,
                                    Ashaba
                                    Spi
                                    Building, NO.50
                                </i></h3>
                        </div>
                        <div class="flex flex-col items-center md:items-start">
                            <h3 class="text-2xl md:text-3xl  text-nature-green-dark milliard-medium">Phone</h3>
                            <h3 class="text-lg md:text-2xl milliard-light"><i> +964 (0) 770 151 4166 </i>
                        </div>


                    </div>
                    <div class="grid grid-cols-2 gap-5"></div>
                </div>

                <div class="grid md:grid-cols-2 items-center gap-5">

                    <div class="flex flex-col">
                        <h3 class="text-5xl text-center magiesta">Or leave</h3>
                        <h3 class="text-6xl md:text-8xl text-center magiesta">a Message</h3>
                    </div>
                    <form action="{{ route('storeEmail') }}" method="POST" class="flex p-5 flex-col gap-y-10">
                        @csrf

                        @if (session('success'))
                            <div id="submitted"
                                class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                                role="alert">
                                <span class="font-medium"> {{ session('success') }}
                            </div>
                        @endif

                        <div class="mb-5">
                            <div class="relative z-0">
                                <input required name="name" type="text" id="floating_standard"
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer"
                                    placeholder=" " />
                                <label for="floating_standard"
                                    class="absolute text-xl text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Your
                                    Name</label>
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="relative z-0">
                                <input required name="email" type="text" id="floating_standard"
                                    class="block py-2.5 px-0 w-full text-xl text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer"
                                    placeholder=" " />
                                <label for="floating_standard"
                                    class="absolute text-xl text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Your
                                    E-mail</label>
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="relative z-0">
                                <input required name="message" type="text" id="floating_standard"
                                    class="block py-2.5 px-0 w-full text-xl text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer"
                                    placeholder=" " />
                                <label for="floating_standard"
                                    class="absolute text-xl text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Your
                                    message</label>
                            </div>
                        </div>
                        <div class="mb-5">
                            <button type="submit"
                                class="text-white bg-nature-green hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-900 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Send</button>

                        </div>

                    </form>
                    <div class="grid grid-cols-2 gap-5"></div>
                </div>
        </section>
    </section>

</x-guest-layout>
