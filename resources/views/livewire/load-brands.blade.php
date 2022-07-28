<div>
    <div
        class="grid grid-cols-2 md:grid-cols-4 items-center place-items-center  md:grid-rows-2 md:space-x-5 gap-y-10 gap-x-10  px-10 py-5">
        @foreach ($brands as $brand)
            <a data-aos="zoom-in" data-aos-duration="1000" class="transition duration-200 hover:scale-110"
                href="{{ route('indexProductClientWithId', $brand->id) }}">
                <img class="w-32 md:w-52" src="/storage/images/brands/{{ $brand->logo }}" alt="brand1">
            </a>
        @endforeach
    </div>
    <div class="flex justify-center">
        <button wire:click="loadMore" type="button"
            class="text-white bg-nature-green milliard-light w-2/6 text-center hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center md:text-4xl mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">View
            all</button>
    </div>
</div>
