<header class="relative flex items-center justify-between flex-shrink-0 p-4">
    <form action="#" class="flex-1">
      <!--  -->
    </form>
    <div class="items-center hidden ml-4 sm:flex">
      <!-- Settings button -->
    

     

    <!-- Mobile sub header button -->
    <button
      @click="isSubHeaderOpen = !isSubHeaderOpen"
      class="p-2 text-gray-400 bg-white rounded-lg shadow-md sm:hidden hover:text-gray-600 focus:outline-none focus:ring focus:ring-white focus:ring-offset-blue-gray-100 focus:ring-offset-4"
    >
      <span class="sr-only">More</span>

      <svg
        aria-hidden="true"
        class="w-6 h-6"
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"
        />
      </svg>
    </button>

    <!-- Mobile sub header -->
    <div
      x-transition:enter="transform transition-transform"
      x-transition:enter-start="translate-y-full opacity-0"
      x-transition:enter-end="translate-y-0 opacity-100"
      x-transition:leave="transform transition-transform"
      x-transition:leave-start="translate-y-0 opacity-100"
      x-transition:leave-end="translate-y-full opacity-0"
      x-show="isSubHeaderOpen"
      @click.away="isSubHeaderOpen = false"
      class="absolute flex items-center justify-between p-2 bg-white rounded-md shadow-lg sm:hidden top-16 left-5 right-5"
    >
      <!-- Seetings button -->
      
      <!-- Messages button -->
      
      <!-- Notifications button -->
      
     
    </div>
  </header>

{{-- <header class="bg-white shadow p-4">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900">{{ $slot }}</h1>
        </div>
        <div class="flex items-center">
            {{-- <button type="button" class="relative text-gray-400 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <span class="sr-only">View notifications</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                </svg>
            </button> --}}
            {{-- <div class="relative ml-3">
                <button type="button" class="flex items-center max-w-xs bg-white rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
            </div>
        </div>
    </div>
</header> --}}
