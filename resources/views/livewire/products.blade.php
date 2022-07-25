<div>
    <div class="mx-auto container">
        <label for="small" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Filter
            products</label>
        <select wire:model="selectedBrand" id="small"
            class="block p-2 mb-6 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-green-600 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
            <option value="" selected>All</option>
            @foreach ($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>
    </div>
    <section data-theme="white" data-autoslide="true"
        class="spotlight-group gap-x-4 gap-y-4 grid md:grid-cols-3 justify-items-center mx-auto container">
        @foreach ($products as $product)
            <div class="w-full bg-white rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                <div class="bg-nature-green-light flex justify-center p-4 rounded-b-2xl drop-shadow-lg">
                    <img src="/storage/images/brands/{{ $product->brand->logo }}" class="img-responsive  max-w-[25%]"
                        alt="">
                </div>
                <a data-description="{{ $product->description }}" data-title="{{ $product->name }}"
                    href="/storage/images/products/{{ $product->image }}" class="spotlight flex justify-center">
                    <img class="p-8 max-h-96 rounded-t-lg " src="/storage/images/products/{{ $product->image }}"
                        alt="product image" />
                </a>
                <div class="px-5 pb-5 text-justify">
                    <h5
                        class="text-2xl milliard-medium text-center font-semibold tracking-tight text-gray-900 dark:text-white">
                        {{ $product->name }}</h5>
                    <p class="milliard-thin">
                        {{ $product->description }}
                    </p>

                </div>
            </div>
        @endforeach
    </section>

</div>
