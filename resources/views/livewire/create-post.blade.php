
<section class="text-gray-600 body-font relative max-h-screen">
    <div class="container px-5 py-6 mx-auto">
      <div class="flex flex-col text-center w-full mb-12">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">New Blog Post</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Start crafting your new post below.</p>
      </div>

      @if($saveSuccess)
      <div class="rounded-md bg-green-100 rounded-lg p-4">
          <div class="flex">
              <div class="flex-shrink-0">
                  <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
              </div>
              <div class="ml-3">
                  <h3 class="text-sm font-medium text-green-800">Successfully Saved Post</h3>
                  <div class="mt-2 text-sm text-green-700">
                      <p>Your new post has been saved.</p>
                  </div>
              </div>
          </div>
      </div>
  @endif
        <form wire:submit.prevent="savePost">
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <div class="flex flex-wrap -m-2">
                  <div class="p-2 w-full">
                    <div class="relative">
                      <label for="title" class="leading-7 text-sm text-gray-600">Title</label>
                      <input type="text" id="title" name="title" wire:model="title" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                      @error('title') <span class="error">{{ $message }}</span> @enderror
                    </div>
                  </div>
                  <div class="p-2 w-full">
                    <div class="relative">
                      <label for="description" class="leading-7 text-sm text-gray-600">Description</label>
                      <textarea id="description" name="description" wire:model="description" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                      @error('description') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <p class="my-2 text-sm text-gray-500">Add the body for your post.</p>
                  </div>
                </div>
                    <input type="submit" value="Submit Post" class="inline-flex justify-center px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-indigo-500 border border-transparent rounded-md hover:bg-indigo-600 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 cursor-pointer">
              </div>
        </form>
    </div>
  </section>
