<x-layout>
    <h1>This is a slot </h1>

    @guest
        <a href="/register">Register</a>
        <a href="/login">Log in</a>     
    @endguest

    @auth
    <form method="POST" action="{{ route('logout') }}" class="inline">
        @csrf
        <button type="submit" class="bg-transparent border-none text-blue-500 hover:text-blue-700 cursor-pointer">
            Logout
        </button>
    </form>
    @endauth
   
</x-layout>