<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Kinder Grade</title>
</head>

<body>
    <div x-data="setup()" x-init="$refs.loading.classList.add('hidden');" @resize.window="watchScreen()">
        <div class="flex h-screen antialiased text-gray-900 bg-blue-gray-100 dark:bg-dark dark:text-light">
            <!-- Sidebar -->
            <x-navbar></x-navbar>
            <div class="flex flex-col flex-1">
                <x-header></x-header>
                <div class="flex flex-1">
                    <!-- Main -->
                    <main class="flex items-top justify-center flex-1 px-4 py-4">
                        <div class="flex flex-col flex-grow">
                            <div class="flex-grow p-6 bg-gray-200">
                                <div class="grid grid-cols-3 gap-6">
                                    <!-- welcome card-->
                                    <div class="text-sm leading-6 w-full">
                                        <figure class="relative flex flex-col bg-white rounded-lg p-4 sm:p-6 md:p-8 w-full">
                                            <img src="https://images.unsplash.com/photo-1632910121591-29e2484c0259?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw4fHxjb2RlcnxlbnwwfDB8fHwxNzEwMTY0NjIzfDA&ixlib=rb-4.0.3&q=80&w=1080" alt="" class="flex-none w-14 h-14 rounded-full object-cover mx-auto mb-4" loading="lazy" decoding="async">
                                            <figcaption class="flex flex-col items-center space-y-2">
                                                <div class="text-base sm:text-lg md:text-xl text-slate-900 font-semibold dark:text-slate-600 text-center">
                                                    Selamat Datang
                                                </div>
                                                <div class="mt-0.5 text-sm sm:text-base dark:text-slate-600 text-center">
                                                    Guru
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <!-- schedule card-->
                                    <div class="text-sm leading-5 bg-white border border-gray-300 p-4 rounded-lg shadow">
                                        <div class="divide-y divide-gray-600 dark:divide-gray-300">
                                            <div class="flex flex-col sm:flex-row sm:items-center justify-between">
                                                <p class="text-lg text-gray-700 sm:text-right p-2 rounded-lg">
                                                    08:00 - 08:30
                                                </p>
                                                <h3 class="text-lg font-semibold text-gray-800 dark:text-whitep-2 rounded-lg">
                                                    Pagi
                                                </h3>
                                            </div>
                                            <div class="flex flex-col sm:flex-row sm:items-center justify-between">
                                                <p class="text-lg text-gray-700 sm:text-right p-2 rounded-lg">
                                                    08:00 - 08:30
                                                </p>
                                                <h3 class="text-lg font-semibold text-gray-800 dark:text-whitep-2 rounded-lg">
                                                    Pagi
                                                </h3>
                                            </div>
                                            <div class="flex flex-col sm:flex-row sm:items-center justify-between">
                                                <p class="text-lg text-gray-700 sm:text-right p-2 rounded-lg">
                                                    08:00 - 08:30
                                                </p>
                                                <h3 class="text-lg font-semibold text-gray-800 dark:text-whitep-2 rounded-lg">
                                                    Pagi
                                                </h3>
                                            </div>
                                            <div class="flex flex-col sm:flex-row sm:items-center justify-between">
                                                <p class="text-lg text-gray-700 sm:text-right p-2 rounded-lg">
                                                    08:00 - 08:30
                                                </p>
                                                <h3 class="text-lg font-semibold text-gray-800 dark:text-whitep-2 rounded-lg">
                                                    Pagi
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- pengumuman -->                                    
                                    <div class="col-span-1 bg-white border border-gray-300 rounded-lg shadow p-4">
                                        <div class="flex flex-col justify-center items-center h-full text-center">
                                            <h3 class="text-lg font-bold mb-4">Pengumuman</h3>
                                            <p class="text-lg font-normal text-justify overflow-hidden text-ellipsis" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical;">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, impedit architecto voluptatum autem laboriosam aliquam quis minus vitae nemo consequatur dolorum aliquid dic.
                                            </p>
                                        </div>
                                    </div>                                  
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>

    <script>
        const setup = () => {
            return {
                isSidebarOpen: false,
                currentSidebarTab: null,
                isSettingsPanelOpen: false,
                isSubHeaderOpen: false,
                watchScreen() {
                    if (window.innerWidth <= 1024) {
                        this.isSidebarOpen = false
                    }
                },
            }
        }
    </script>
</body>

</html>
