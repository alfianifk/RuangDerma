<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring focus:ring-green-900 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
