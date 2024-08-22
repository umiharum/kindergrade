@props(['active' => false])
<a {{ $attributes }}
    class="{{ $active ? 'text-gray-300 bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} 
    flex items-center px-3 py-2 text-sm font-medium rounded-md w-full"
    aria-current="{{ $active ? 'page' : false }}">
    <span>{{ $slot }}</span>
</a>
