<x-layout>
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <span class="font-semibold text-gray-700">Boards</span>
                <span class="text-gray-500">|</span>
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900">
                    Home
                </a>
                <a href="#" class="text-gray-600 hover:text-gray-900">
                    {{ auth()->user()->name }}
                </a>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 py-8">
        <div class="mb-6">
         <x-button href="{{  route('board.create') }}">+ New Board</x-button>
         <div class="flex overflow-x-auto pb-4 space-x-4 py-8">
            <!-- Board Column -->
            
            <div class="min-w-[300px] bg-gray-100 rounded-lg p-4">
                <h3 class="font-semibold mb-4">Content Calendar</h3>
                <div class="space-y-2">
                    @foreach(auth()->user()->boards as $board)
                        <div class="bg-white p-3 rounded shadow-sm relative min-h-[100px] overflow-hidden">
                            <div class="absolute inset-0 z-0">
                                <img src="{{ $board->background_image }}" alt="{{ $board->title }} background" class="w-full h-full object-cover">
                            </div>
                            <div class="relative z-10 text-white font-bold text-xl">
                                {{ $board->title }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

           
        </div>
    </main>
</x-layout>