@props(['href'])

<a href="{{ $href }}" 
   {{ $attributes->merge([
       'class' => 'bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg text-lg font-semibold transition-colors'
   ]) }}>
   {{ $slot }}
</a>
