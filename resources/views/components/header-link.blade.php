@props(['active' => false])

<li>
    <a class="{{ $active ? 'bg-rose-600 text-white' : 'hover:bg-gray-100' }} block py-2 px-4 mb-1 rounded-lg dark:text-white"
        aria-current="{{ $active ? 'page' : false }}" {{ $attributes }}>{{ $slot }}</a>
</li>
