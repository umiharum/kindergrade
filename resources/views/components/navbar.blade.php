<div class="flex flex-shrink-0 transition-all">
    <div x-show="isSidebarOpen" @click="isSidebarOpen = false" class="fixed inset-0 z-10 bg-black bg-opacity-50 lg:hidden">
    </div>
    <div x-show="isSidebarOpen" class="fixed inset-y-0 z-10 w-16 bg-white"></div>

    <!-- Mobile bottom bar -->
    <nav aria-label="Options"
        class="fixed inset-x-0 bottom-0 flex flex-row-reverse items-center justify-between px-4 py-2 bg-white border-t sm:hidden shadow-t border-primary-100 rounded-t-3xl">
        <!-- Menu button -->
        <button
            @click="(isSidebarOpen && currentSidebarTab == 'fullTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'fullTab'"
            class="p-2 transition-colors rounded-lg shadow-md hover:bg-primary-darker hover:text-white focus:outline-none focus:ring focus:ring-primary focus:ring-offset-white focus:ring-offset-2"
            :class="(isSidebarOpen && currentSidebarTab == 'fullTab') ? 'text-white bg-primary' : 'text-gray-500 bg-white'">
            <span class="sr-only">Data</span>
            <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
            </svg>
        </button>

        <!-- Logo -->
        <div>
            <x-nav-link 
                style="background: url('https://cdn.builder.io/api/v1/image/assets/TEMP/cab8fb6008b054870c4bbc6de405a4d5d979c49d71b4db44beae91c5d1b4a87a?apiKey=2f2c809389da4ff0b822b22c50e6baf5&') no-repeat center center; background-size: contain; display: block; width:40px; height: 40px;" 
                href="/dashboard" 
                :active="request()->is('dashboard')">
            </x-nav-link>
        </div>
        
        

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
                class="absolute w-48 py-1 mt-2 origin-bottom-left bg-white rounded-md shadow-lg left-10 bottom-14 focus:outline-none"
                role="menu" aria-orientation="vertical" aria-label="user menu">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your
                    Profile</a>

                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                    role="menuitem">Settings</a>

                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign
                    out</a>
            </div>
        </div>
    </nav>

    <!-- Left mini bar -->
    <nav aria-label="Options"
        class="z-20 flex-col items-center flex-shrink-0 hidden w-16 py-4 bg-white border-r-2 shadow-md sm:flex rounded-tr-3xl rounded-br-3xl border-primary-100">
        <!-- Logo -->
        <div class="flex flex-col items-center justify-center py- space-y-2">
            <x-nav-link 
                style="background: url('https://cdn.builder.io/api/v1/image/assets/TEMP/cab8fb6008b054870c4bbc6de405a4d5d979c49d71b4db44beae91c5d1b4a87a?apiKey=2f2c809389da4ff0b822b22c50e6baf5&') no-repeat center center; background-size: 40%; display: block; width: 100px; height: 100px;" 
                href="/dashboard" 
                :active="request()->is('dashboard')">
            </x-nav-link>
        </div>
        
        <div class="flex flex-col items-center flex-1 p-2 space-y-4">
            <!-- Menu Input Data -->
            <button
                @click="(isSidebarOpen && currentSidebarTab == 'linksTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'"
                class="p-2 transition-colors rounded-lg shadow-md hover:bg-primary-darker hover:text-white focus:outline-none focus:ring focus:ring-primary focus:ring-offset-white focus:ring-offset-2"
                :class="(isSidebarOpen && currentSidebarTab == 'linksTab') ? 'text-white bg-primary' : 'text-gray-500 bg-white'">
                <span class="sr-only">Data</span>
                <img src="https://img.icons8.com/?size=100&id=14512&format=png&color=000000" alt="Data">
            </button>

            <!-- Menu Input Report -->
            <button
                @click="(isSidebarOpen && currentSidebarTab == 'reportTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'reportTab'"
                class="p-2 transition-colors rounded-lg shadow-md hover:bg-primary-darker hover:text-white focus:outline-none focus:ring focus:ring-primary focus:ring-offset-white focus:ring-offset-2"
                :class="(isSidebarOpen && currentSidebarTab == 'reportTab') ? 'text-white bg-primary' : 'text-gray-500 bg-white'">
                <span class="sr-only">Laporan</span>
                <img src="https://img.icons8.com/?size=100&id=7SDxQwWmjb1X&format=png&color=000000" alt="Laporan">
            </button>
        </div>
    </nav>

    <div x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="-translate-x-full"
        x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300"
        x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-show="isSidebarOpen"
        class="fixed inset-y-0 left-0 z-10 flex-shrink-0 w-64 bg-white border-r-2 shadow-lg sm:left-16 border-primary-100 rounded-tr-3xl rounded-br-3xl sm:w-72 lg:static lg:w-64">
        <nav x-show="currentSidebarTab == 'linksTab'" aria-label="Main" class="flex flex-col h-full">
            <!-- Logo -->
            <div class="flex items-center justify-center flex-shrink-0 py-10">
                <img class="w-10 h-auto"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/cab8fb6008b054870c4bbc6de405a4d5d979c49d71b4db44beae91c5d1b4a87a?apiKey=2f2c809389da4ff0b822b22c50e6baf5&" />
            </div>

            <div class="flex-1 px-4 space-y-2 overflow-hidden hover:overflow-auto">
                <div class="mt-5 text-xs tracking-wider leading-5 uppercase text-zinc-400">Data</div>
                <div class="flex gap-5 mt-5 whitespace-nowrap rounded-md">
                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=18444&format=png&color=000000"
                        class="shrink-0 w-[27px] h-[27px]" />
                    <x-nav-link href="/kelas" :active="request()->is('kelas')">Kelas</x-nav-link>
                </div>
                <div class="flex gap-5 mt-5 whitespace-nowrap">
                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=ggAxR7mNzNK6&format=png&color=000000"
                        class="shrink-0 w-[27px] h-[27px]" />
                    <x-nav-link href="/guru" :active="request()->is('guru')">Guru</x-nav-link>
                </div>
                <div class="flex gap-5 mt-5 whitespace-nowrap">
                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=18200&format=png&color=000000"
                        class="shrink-0 w-[27px] h-[27px]" />
                    <x-nav-link href="/murid" :active="request()->is('murid')">Murid</x-nav-link>
                </div>
                <div class="flex gap-5 mt-5 whitespace-nowrap">
                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=14970&format=png&color=000000"
                        class="shrink-0 aspect-square w-[27px] h-[27px]" />
                    <x-nav-link href="/orangtua" :active="request()->is('orangtua')">Orang Tua</x-nav-link>
                </div>
            </div>

        </nav>

        <section x-show="currentSidebarTab == 'reportTab'" aria-label="Main" class="flex flex-col h-full">
            <div class="flex items-center justify-center flex-shrink-0 py-10">
                <img class="w-10 h-auto"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/cab8fb6008b054870c4bbc6de405a4d5d979c49d71b4db44beae91c5d1b4a87a?apiKey=2f2c809389da4ff0b822b22c50e6baf5&" />
            </div>
            <div class="flex-1 px-4 space-y-2 overflow-hidden hover:overflow-auto">
                <div class="mt-5 text-xs tracking-wider leading-5 uppercase text-zinc-400">Laporan</div>
                <div class="flex gap-5 mt-5 whitespace-nowrap">
                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=16704&format=png&color=000000"
                        class="shrink-0 w-[27px] h-[27px]" />
                    <x-nav-link href="/harian" :active="request()->is('harian')">Harian</x-nav-link>
                </div>
                <div class="flex gap-5 mt-5 whitespace-nowrap">
                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=Zo3-bT74qE1g&format=png&color=000000"
                        class="shrink-0 w-[27px] h-[27px]" />
                    <x-nav-link href="/bulanan" :active="request()->is('bulanan')">Bulanan</x-nav-link>
                </div>
                <div class="flex gap-5 mt-5 whitespace-nowrap">
                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=39362&format=png&color=000000"
                        class="shrink-0 w-[27px] h-[27px]" />
                    <x-nav-link href="/semester" :active="request()->is('semester')">Semester</x-nav-link>
                </div>
            </div>
        </section>

        <section x-show="currentSidebarTab == 'notificationsTab'" class="px-4 py-6">
            <h2 class="text-xl">Notifications</h2>
        </section>

        <nav x-show="currentSidebarTab == 'fullTab'" aria-label="Main" class="flex flex-col h-full">
            <!-- Logo -->
            <div class="flex items-center justify-center flex-shrink-0 py-10">
                <img class="w-10 h-auto"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/cab8fb6008b054870c4bbc6de405a4d5d979c49d71b4db44beae91c5d1b4a87a?apiKey=2f2c809389da4ff0b822b22c50e6baf5&" />
            </div>
            <!-- Menu -->
            <div class="flex-1 px-4 space-y-2 overflow-hidden hover:overflow-auto">
                <div class="mt-5 text-xs tracking-wider leading-5 uppercase text-zinc-400">Data</div>
                <div class="flex gap-5 mt-5 whitespace-nowrap rounded-md">
                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=18444&format=png&color=000000"
                        class="shrink-0 w-[27px] h-[27px]" />
                    <x-nav-link href="/kelas" :active="request()->is('kelas')">Kelas</x-nav-link>
                </div>
                <div class="flex gap-5 mt-5 whitespace-nowrap">
                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=ggAxR7mNzNK6&format=png&color=000000"
                        class="shrink-0 w-[27px] h-[27px]" />
                    <x-nav-link href="/guru" :active="request()->is('guru')">Guru</x-nav-link>
                </div>
                <div class="flex gap-5 mt-5 whitespace-nowrap">
                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=18200&format=png&color=000000"
                        class="shrink-0 w-[27px] h-[27px]" />
                    <x-nav-link href="/murid" :active="request()->is('murid')">Murid</x-nav-link>
                </div>
                <div class="flex gap-5 mt-5 whitespace-nowrap">
                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=14970&format=png&color=000000"
                        class="shrink-0 aspect-square w-[27px] h-[27px]" />
                    <x-nav-link href="/orangtua" :active="request()->is('orangtua')">Orang Tua</x-nav-link>
                </div>

                <div class="mt-5 text-xs tracking-wider leading-5 uppercase text-zinc-400">Laporan</div>
                <div class="flex gap-5 mt-5 whitespace-nowrap">
                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=16704&format=png&color=000000"
                        class="shrink-0 w-[27px] h-[27px]" />
                    <x-nav-link href="/harian" :active="request()->is('harian')">Harian</x-nav-link>
                </div>
                <div class="flex gap-5 mt-5 whitespace-nowrap">
                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=Zo3-bT74qE1g&format=png&color=000000"
                        class="shrink-0 w-[27px] h-[27px]" />
                    <x-nav-link href="/bulanan" :active="request()->is('bulanan')">Bulanan</x-nav-link>
                </div>
                <div class="flex gap-5 mt-5 whitespace-nowrap">
                    <img loading="lazy" src="https://img.icons8.com/?size=100&id=39362&format=png&color=000000"
                        class="shrink-0 w-[27px] h-[27px]" />
                    <x-nav-link href="/semester" :active="request()->is('semester')">Semester</x-nav-link>
                </div>
            </div>
        </nav>
    </div>
</div>
