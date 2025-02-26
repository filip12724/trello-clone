<x-layout>
    <div class="flex items-center justify-center min-h-screen">
        <form class="w-full max-w-lg p-8 space-y-6 bg-white rounded-lg shadow-xl" 
              action="{{  route('board.store') }}" 
              method="POST"
              enctype="multipart/form-data">
            @csrf


            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                    Board Title
                </label>
                <input type="text" 
                       id="title" 
                       name="title"
                       class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500"
                       placeholder="Enter board title">
            </div>


            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Background Image
                </label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                    <div class="space-y-1 text-center">

                        <svg class="mx-auto h-12 w-12 text-gray-400" 
                             stroke="currentColor" 
                             fill="none" 
                             viewBox="0 0 48 48">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" 
                                  stroke-width="2" 
                                  stroke-linecap="round" 
                                  stroke-linejoin="round" />
                        </svg>

                        <div class="text-center"> 
                            <div class="text-sm text-gray-600">
                                <label for="background_image" 
                                       class="inline-block cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                    <span class="block">Upload a file</span>
                                    <input id="background_image" 
                                           name="background_image" 
                                           type="file" 
                                           class="sr-only">
                                </label>
                            </div>
                        
                            <p class="mt-1 text-xs text-gray-500 text-center">
                                PNG, JPG, GIF up to 5MB
                            </p>
                        </div>
                    </div>
                </div>

                <div id="image-preview" class="mt-4 hidden">
                    <img id="preview" class="max-h-48 rounded-md">
                </div>

            </div>

            <button 
                    class="w-full px-4 py-2 text-white bg-indigo-600 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Create Board
            </button>
            
        </form>
    </div>

    <script>
        const fileInput = document.getElementById('background_image');
        const previewContainer = document.getElementById('image-preview');
        const previewImage = document.getElementById('preview');

        fileInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                previewContainer.classList.remove('hidden');
                reader.addEventListener('load', function() {
                    previewImage.setAttribute('src', this.result);
                });
                reader.readAsDataURL(file);
            }
        });
    </script>
</x-layout>