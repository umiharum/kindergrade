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
                                     {{ $slot }}                                 
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
