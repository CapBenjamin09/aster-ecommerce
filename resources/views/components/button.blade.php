@props(['type_button' => 'info'])

@php
    switch ($type_button) {
        case 'primary':
            $classes = 'focus:outline-none text-black bg-yellow-400 hover:bg-yellow-200 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2';
            break;

        case 'secondary':
            $classes = 'focus:outline-none text-black bg-gray-400 hover:bg-gray-200 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2';
            break;

        case 'danger':
            $classes = 'focus:outline-none text-white bg-red-400 hover:bg-red-200 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2';
            break;

        case 'info':
            $classes = 'focus:outline-none text-white bg-blue-400 hover:bg-blue-200 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2';

        default:
            $classes = 'focus:outline-none text-white bg-blue-400 hover:bg-blue-200 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2';
    }
@endphp

<button {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</button>
