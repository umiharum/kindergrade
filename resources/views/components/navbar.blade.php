<nav class="bg-gray-900 w-64 min-h-screen px-4 py-6">
    <div class="flex items-center justify-between mb-10">
        <div class="flex items-center">
            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
        </div>
        <button class="text-gray-400 hover:text-white md:hidden">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>
    <div class="space-y-4">
        <x-nav-link href="/dashboard" :active="request()->is('dashboard')">Dashboard</x-nav-link>
        
        <h3 class="text-sm font-medium text-gray-400">Data</h3>
        <x-nav-link href="/kelas" :active="request()->is('kelas')">Kelas</x-nav-link>
        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
            <span>Guru</span>
        </a>
        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
            <span>Murid</span>
        </a>
        <a href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
            <span>Orang Tua</span>
        </a>
    </div>
    <div class="mt-6">
        <h3 class="text-sm font-medium text-gray-400">Laporan</h3>
        <div class="mt-2 space-y-1">
            <a href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                <span>Harian</span>
            </a>
            <a href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                <span>Bulanan</span>
            </a>
            <a href="#" class="flex items-center px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                <span>Semester</span>
            </a>
        </div>
    </div>
</nav>
