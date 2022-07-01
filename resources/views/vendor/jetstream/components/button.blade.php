<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex focus:bg-green-500 items-center px-4 py-2 bg-nature-green border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-700 focus:outline-none  focus:ring focus:ring-green-500 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
