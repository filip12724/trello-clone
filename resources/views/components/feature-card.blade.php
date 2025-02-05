@props(['title', 'description'])

<div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
    <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $title }}</h3>
    <p class="text-gray-600">
        {{ $description }}
    </p>
</div>
