<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Dashboard</title>
</head>

<body class="h-full">
    <div class="flex min-h-full">
        <!-- Sidebar -->
        <x-navbar></x-navbar>
        <!-- Main content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <x-header>{{ $title }}</x-header>
            <!-- Main content -->
            <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
                <div class="py-6">
                    <div class="px-4 sm:px-6 lg:px-8">
                        <div class="border-4 border-dashed border-gray-200 rounded-lg h-96">
                            <!-- Replace with your content -->
                            <div class="h-full flex items-center justify-center text-gray-400">
                                <h3>{{ $slot }}</h3>
                            </div>
                            <!-- /End replace -->
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
