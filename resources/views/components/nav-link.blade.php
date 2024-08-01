@props(['active' => false])
<a {{ $attributes }}
    class="{{ $active ? 'text-gray-800 bg-gray-300' : 'text-gray-800 hover:bg-gray-700 hover:text-white' }} 
    flex items-center px-3 py-2 text-sm font-medium rounded-md w-full"
    aria-current="{{ $active ? 'page' : false }}">
    <span>{{ $slot }}</span>
</a>
