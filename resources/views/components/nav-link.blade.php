<a {{ $attributes }}
    class="{{ $active ? 'text-white bg-gray-800' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} 
    flex items-center px-3 py-2 text-sm font-medium rounded-md"
    aria-current="{{ $active ? 'page' : false }}">
    <span>{{ $slot }}</span>
</a>
