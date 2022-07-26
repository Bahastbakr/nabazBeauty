<x-app-layout>
    <div class="flex flex-col gap-y-5 md:flex-row md:space-x-10 items-center justify-center">
        <div
            class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Brands</h5>
            </div>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here you can see all the brands</p>
            <a href="{{ route('indexBrand') }}"
                class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                See
            </a>
        </div>
        <div
            class="p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Products</h5>
            </div>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here you can see all the brands</p>
            <a href="{{ route('indexProduct') }}"
                class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                See
            </a>
        </div>
    </div>
</x-app-layout>
