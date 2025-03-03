<x-layout>
    <div class="min-h-screen flex items-center justify-center">
        <form method="POST" action="{{ route('login') }}" class="bg-white p-8 rounded-lg shadow-md w-96">
            @csrf
            <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Login</h2>

            <div class="mb-6">
                <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email</label>
                <input 
                    type="email" 
                    name="email" 
                    id="email" 
                    required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 @error('email') border-red-500 @enderror"
                >
            </div>

            <div class="mb-8">
                <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password</label>
                <input 
                    type="password" 
                    name="password" 
                    id="password" 
                    required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 @error('password') border-red-500 @enderror"
                >
            </div>

            <button 
                type="submit" 
                class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-200 font-semibold"
            >
                Log In
            </button>

            @if(session('error'))
            <div class="mt-4 text-red-500 text-sm">
                {{ session('error') }}
            </div>
            @endif
        </form>
    </div>
</x-layout>