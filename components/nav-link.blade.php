@props(['active', 'icon'])

@php
$commonClasses = 'flex items-center px-4 py-3 text-white rounded-lg transition-colors duration-200 ease-in-out';

$activeClasses = ($active ?? false)
    ? 'bg-blue-700 dark:bg-blue-900 shadow-inner font-semibold'
    : 'hover:bg-blue-500 hover:dark:bg-blue-700 font-medium';

$classes = $commonClasses . ' ' . $activeClasses;
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    @if(isset($icon))
        <i class="{{ $icon }} w-6 h-6 mr-3 text-center"></i>
    @endif
    <span class="flex-1">{{ $slot }}</span>
</a>
