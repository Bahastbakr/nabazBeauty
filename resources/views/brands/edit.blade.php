<x-app-layout>
    <div class="flex flex-col gap-4 p-5">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl">Edit brand</h1>
        </div>
        <hr class="">

    </div>
    <form method="POST" action="{{ route('updateBrand', $brand->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="p-6 space-y-6">
            @livewire('image', ['brand' => $brand])
            <div class="relative z-0">
                <input required value="{{ $brand->name }}" type="text" name="name" id="small_standard"
                    class="block py-2 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " />
                <label for="small_standard"
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Brand
                    Name</label>

            </div>
            <button data-modal-toggle="small-modal" type="submit"
                class="text-white bg-yellow-400 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
        </div>
    </form>
</x-app-layout>
