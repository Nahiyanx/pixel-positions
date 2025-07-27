@php
    $classes = 'p-4 bg-black/10 rounded-lg border border-transparent hover:border-white/50 transition-colors duration-400 group';
@endphp

<div {{ $attributes(['class'=>$classes]) }}>
    {{ $slot }}
</div>  

