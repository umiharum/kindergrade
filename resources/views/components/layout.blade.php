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
            <main class="flex items-center justify-center flex-1 px-4 py-8">
              <h1 class="text-5xl font-bold text-gray-500">In progress</h1>
              <!-- Content -->
            </main>
          </div>
        </div>
      </div>

      <!-- Panels -->

      <!-- Settings Panel -->
      <!-- Backdrop -->
      <div
        x-show="isSettingsPanelOpen"
        class="fixed inset-0 bg-black bg-opacity-50"
        @click="isSettingsPanelOpen = false"
        aria-hidden="true"
      ></div>
      <!-- Panel -->
      <section
        x-transition:enter="transform transition-transform duration-300"
        x-transition:enter-start="translate-x-full"
        x-transition:enter-end="translate-x-0"
        x-transition:leave="transform transition-transform duration-300"
        x-transition:leave-start="translate-x-0"
        x-transition:leave-end="translate-x-full"
        x-show="isSettingsPanelOpen"
        class="fixed inset-y-0 right-0 w-64 bg-white border-l border-primary-100 rounded-l-3xl"
      >
        <div class="px-4 py-8">
          <h2 class="text-lg font-semibold">Settings</h2>
        </div>
      </section>
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
