<x-layout>
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <span class="font-semibold text-gray-700">Templates</span>
                <span class="text-gray-500">|</span>
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900">
                    Home
                </a>
                <a href="#" class="text-gray-600 hover:text-gray-900">
                    {{ auth()->user()->name }}
                </a>
                <a href="#" class="text-gray-600 hover:text-gray-900">
                    Templates & Resources
                </a>
            </div>
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 flex items-center">
                <span class="mr-2">+</span> New
            </button>
        </div>
    </nav>

    <!-- Boards Section -->
    <main class="max-w-7xl mx-auto px-4 py-8">
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Sturred Boards</h1>
            <h2 class="text-lg text-gray-600 mt-1">BIG FAT Projects</h2>
        </div>

        <!-- Boards Container -->
        <div class="flex overflow-x-auto pb-4 space-x-4">
            <!-- Board Column -->
            <div class="min-w-[300px] bg-gray-100 rounded-lg p-4">
                <h3 class="font-semibold mb-4">Content Calendar</h3>
                <div class="space-y-2">
                    <div class="bg-white p-3 rounded shadow-sm">Kim</div>
                    <div class="bg-white p-3 rounded shadow-sm">Sales Swipe ● Content Ideas</div>
                    <div class="bg-white p-3 rounded shadow-sm">Kim</div>
                </div>
            </div>

            <!-- Board Column -->
            <div class="min-w-[300px] bg-gray-100 rounded-lg p-4">
                <h3 class="font-semibold mb-4">Content Bank</h3>
                <div class="space-y-2">
                    <div class="bg-white p-3 rounded shadow-sm">Kim</div>
                    <div class="bg-white p-3 rounded shadow-sm">Training Library</div>
                    <div class="bg-white p-3 rounded shadow-sm">Kim</div>
                </div>
            </div>

            <!-- Board Column -->
            <div class="min-w-[300px] bg-gray-100 rounded-lg p-4">
                <h3 class="font-semibold mb-4">2020 Strategy (Yearly Planning)</h3>
                <div class="space-y-2">
                    <div class="bg-white p-3 rounded shadow-sm">Newb Design</div>
                    <div class="bg-white p-3 rounded shadow-sm">SKINCARE</div>
                </div>
            </div>

            <!-- Additional Board Column -->
            <div class="min-w-[300px] bg-gray-100 rounded-lg p-4">
                <h3 class="font-semibold mb-4">Team Info Hub</h3>
                <div class="space-y-2">
                    <div class="bg-white p-3 rounded shadow-sm">Team Meetings</div>
                    <div class="bg-white p-3 rounded shadow-sm">PASsion</div>
                    <div class="bg-white p-3 rounded shadow-sm">Pearf's To Do's</div>
                </div>
            </div>
        </div>
    </main>
</x-layout>