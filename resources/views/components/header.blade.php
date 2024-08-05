<header class="relative flex items-center justify-between flex-shrink-0 p-4">
    <form action="#" class="flex-1">
        <!--  -->
    </form>
    <div class="items-center hidden ml-4 sm:flex">
        <!-- User avatar button -->
        <div class="relative flex items-center flex-shrink-0 p-2" x-data="{ isOpen: false }">
            <button @click="isOpen = !isOpen; $nextTick(() => {isOpen ? $refs.userMenu.focus() : null})"
                class="transition-opacity rounded-lg opacity-80 hover:opacity-100 focus:outline-none focus:ring focus:ring-primary focus:ring-offset-white focus:ring-offset-2">
                <img class="w-8 h-8 rounded-lg shadow-md"
                    src="https://avatars.githubusercontent.com/u/57622665?s=460&u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&v=4"
                    alt="Ahmed Kamel" />
                <span class="sr-only">User menu</span>
            </button>
            <div x-show="isOpen" @click.away="isOpen = false" @keydown.escape="isOpen = false" x-ref="userMenu"
                tabindex="-1"
                class="absolute w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg focus:outline-none"
                style="top: 100%; right: 0;" role="menu" aria-orientation="vertical" aria-label="user menu">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your
                    Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                    role="menuitem">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign
                    out</a>
            </div>
        </div>
    </div>
</header>
