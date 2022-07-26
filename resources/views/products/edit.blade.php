<x-app-layout>
    <div class="flex flex-col gap-4 p-5">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl">Edit Product</h1>
        </div>
        <hr class="">

    </div>
    <form method="POST" action="{{ route('updateProduct', $product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="p-6 space-y-6">
            @livewire('image', ['product' => $product])
            <div class="relative z-0">
                <input value="{{ $product->name }}" required autocomplete="off" type="text" name="name"
                    class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " />
                <label for="small_standard"
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Product
                    Name</label>
            </div>
            <div class="relative z-0">
                <label for="underline_select" class="sr-only">Product's Brand</label>
                <select required name="brand_id" id="underline_select"
                    class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                    <option selected>Select Brand</option>
                    @foreach ($brands as $brand)
                        <option @if ($product->brand->id == $brand->id) selected @endif value="{{ $brand->id }}">
                            {{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="relative z-0">
                <input value="{{ $product->description }}"required autocomplete="off" type="text" name="description"
                    class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " />
                <label for="small_standard"
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Description</label>
            </div>
            <button data-modal-toggle="small-modal" type="submit"
                class="text-white bg-yellow-400 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
        </div>
        <!-- Modal footer -->
    </form>
</x-app-layout>
