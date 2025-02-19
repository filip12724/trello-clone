<x-layout>
    <div >
        <div class="max-w-7xl mx-auto">
            
            <div class="absolute top-4 right-4">
                @guest
                <div class="flex space-x-2">
                    <x-button href="/register" class="px-4 py-2 text-sm">
                        Register
                    </x-button>
                    <x-button href="/login" class="px-4 py-2 text-sm ">
                        Log in
                    </x-button>
                </div>
                
                
                @endguest

                @auth
                    <x-button href="/dashboard" class="px-4 py-2 text-sm mr-2">
                        Dashboard
                    </x-button>
                    
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg font-medium transition-colors">
                            Logout
                        </button>  
                    </form>
                @endauth
            </div>

            
            <div class="text-center pt-24 pb-16">
                <h1 class="text-5xl font-bold text-gray-900 mb-6">
                    Organize Your Work & Life with
                    <span class="text-blue-600">ToDo</span>
                </h1>
                
                <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
                    ToDo helps you organize tasks, collaborate with teams, and get things done efficiently. 
                    Create boards, add tasks, and track progress - all in one intuitive workspace.
                </p>

                @guest
                <x-button href="/register">
                    Get Started
                </x-button>
                @endguest
            </div>

            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
                <x-feature-card
                    title="Task Management"
                    description="Create, prioritize, and track tasks with our intuitive drag-and-drop interface."
                />
            
                <x-feature-card
                    title="Team Collaboration"
                    description="Work together in real-time, assign tasks, and keep everyone in sync."
                />
            
                <x-feature-card
                    title="Anywhere Access"
                    description="Access your boards from any device, whether desktop or mobile."
                />
            </div>
            

           
            <div class="mt-16 p-8">
                <h2 class="text-3xl font-bold text-gray-900 text-center mb-6">What Our Users Say</h2>
            
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <x-feature-card
                        title="- Alex P."
                        description="ToDo has transformed how I manage my tasks and collaborate with my team!"
                        class="border"
                    />
            
                    <x-feature-card
                        title="- Jamie L."
                        description="The intuitive interface makes organizing my work a breeze. Highly recommend!"
                        class="border"
                    />
            
                    <x-feature-card
                        title="- Taylor M."
                        description="An essential tool for staying organized in today's fast-paced world."
                        class="border"
                    />
                </div>
            </div>
            

        </div>
    </div>
</x-layout>
