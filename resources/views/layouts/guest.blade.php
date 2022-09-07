<!DOCTYPE html>
<html style="scroll-behavior: smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <script src="https://kit.fontawesome.com/5db2eb3dde.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="icon" type="image/x-icon" href="/images/logo.ico">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="spotlight.bundle.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        body {
            background-color: #c1ceb2;
        }
    </style>

    @livewireStyles

</head>

<body>

    <main class="xl:py-16 py-8 xl:mx-24 xl:my-24 mx-4 my-4 bg-white rounded-xl space-y-20 xl:rounded-[70px]">
        <nav class="bg-transparent px-5 xl:px-2 py-2.5   dark:bg-gray-800">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="/" class="flex items-center">
                    <img src="/images/logo.png" class="mr-3 h-10 sm:h-12" alt="nabaz beauty Logo">
                </a>
                <button data-collapse-toggle="mobile-menu" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-xl xl:hidden focus:outline-none  dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden mt-5 w-full xl:block xl:w-auto" id="mobile-menu">
                    <ul
                        class="flex flex-col items-center mt-4  xl:flex-row gap-8 milliard-thin xl:text-2xl xl:font-2xl">
                        <li>
                            <a href="/"
                                class="block {{ request()->is('/') ? 'border-b-2 border-green-700 rounded-none' : '' }} py-2 pr-4 pl-3 text-black  rounded xl:bg-transparent xl:text-neutral-900 xl:p-0 dark:text-white">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('indexProductClient') }}"
                                class="block py-2 pr-4 pl-3 text-gray-700  hover:bg-gray-50 xl:hover:bg-transparent xl:hover:text-green-700 xl:p-0 dark:text-gray-400 xl:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white hover:text-green-800 xl:dark:hover:bg-transparent dark:border-gray-700 {{ request()->is('products') ? 'border-b-2 border-green-700 rounded-none' : '' }} ">Products</a>
                        </li>
                        <li>
                            <a href="/#aboutUs"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 xl:hover:bg-transparent xl:border-0 xl:hover:text-green-700 xl:p-0 dark:text-gray-400 xl:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white xl:dark:hover:bg-transparent dark:border-gray-700">About</a>
                        </li>
                        <li>
                            <a href="/#contact"
                                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 xl:hover:bg-transparent xl:border-0 xl:hover:text-green-700 xl:p-0 dark:text-gray-400 xl:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white xl:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>


                        <li class="flex gap-4">
                            <a class="hover:scale-125 transion duration-300"
                                href="https://www.facebook.com/nabazbeauty"> <i
                                    class="fa-lg fa-brands fa-facebook-f"></i></a>
                            <a class="hover:scale-125 transion duration-300" href="https://instagram.com/nabazbeauty">
                                <i class="fa-lg fa-brands fa-instagram"></i></a>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{ $slot }}
    </main>
    <img style="z-index: -1;" src="/images/paper1.png" class="absolute xl:w-80 top-0 right-0" alt="">
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    @livewireScripts

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
