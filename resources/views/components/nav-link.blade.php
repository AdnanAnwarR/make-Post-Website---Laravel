{{-- aktif rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white" aria-current="page" --}}
{{--tidak aktif rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white --}}

@props(['href' , 'current' => false , 'ariaCurrent' => false]) {{-- jadi si currentnya ditimpa makannya $current bukan  !$current --}}

@php
    if($current){
        $classes = 'bg-gray-900 text-white';
        $ariaCurrent = 'page';
    }else{
        $classes = 'text-gray-300 hover:bg-gray-700 hover:text-white';
    }
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'rounded-md px-3 py-2 text-sm font-medium ' . $classes , 'aria-current' => $ariaCurrent]) }}>{{ $slot }}</a>
