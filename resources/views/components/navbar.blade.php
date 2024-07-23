<nav class="bg-gray-200 w-64 min-h-screen px-4 py-6">
    <div class="flex flex-no-wrap">
        <!-- Sidebar starts -->
        <div class="w-64 absolute sm:relative bg-gray-400 shadow md:h-full flex flex-col justify-between">
            <div class="flex flex-col pb-2 bg-neutral-200 max-w-[280px]">
                <div class="flex gap-0.5 px-10 py-2 text-base font-bold whitespace-nowrap rounded-none bg-sky-950 text-stone-500">
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/cab8fb6008b054870c4bbc6de405a4d5d979c49d71b4db44beae91c5d1b4a87a?apiKey=2f2c809389da4ff0b822b22c50e6baf5&" class="shrink-0 aspect-square w-[30px]" />
                    <div class="my-auto">KinderGrade</div>
                </div>
                <div class="flex flex-col mt-9 ml-8 max-w-full text-sm font-medium leading-5 text-zinc-700 w-[110px]">
                    <div class="flex gap-5 whitespace-nowrap text-zinc-900">
                        <img loading="lazy" src="https://img.icons8.com/?size=100&id=sUJRwjfnGwbJ&format=png&color=000000" class="shrink-0 w-[27px] h-[27px]" />
                        <x-nav-link href="/dashboard" :active="request()->is('dashboard')">Dashboard</x-nav-link>
                    </div>
                    <div class="mt-11 text-xs tracking-wider leading-5 uppercase text-zinc-400">Data</div>
                    <div class="flex gap-3.5 mt-8 whitespace-nowrap rounded-md">
                        <img loading="lazy" src="https://img.icons8.com/?size=100&id=18444&format=png&color=000000" class="shrink-0 w-[27px] h-[27px]" />
                        <x-nav-link href="/kelas" :active="request()->is('kelas')">Kelas</x-nav-link>
                    </div>
                    <div class="flex gap-5 mt-5 whitespace-nowrap">
                        <img loading="lazy" src="https://img.icons8.com/?size=100&id=ggAxR7mNzNK6&format=png&color=000000" class="shrink-0 w-[27px] h-[27px]" />
                        <div>Guru</div>
                    </div>
                    <div class="flex gap-5 mt-6 whitespace-nowrap">
                        <img loading="lazy" src="https://img.icons8.com/?size=100&id=18200&format=png&color=000000" class="shrink-0 w-[27px] h-[27px]" />
                        <div>Murid</div>
                    </div>
                    <div class="flex gap-5 mt-6 whitespace-nowrap">
                        <img loading="lazy" src="https://img.icons8.com/?size=100&id=14970&format=png&color=000000" class="shrink-0 aspect-square w-[27px] h-[27px]" />
                        <div class="my-auto">Orang Tua</div>
                    </div>
                    <div class="mt-5 text-xs tracking-wider leading-5 uppercase text-zinc-400">Laporan</div>
                    <div class="flex gap-5 mt-7 whitespace-nowrap">
                        <img loading="lazy" src="https://img.icons8.com/?size=100&id=16704&format=png&color=000000" class="shrink-0 w-[27px] h-[27px]" />
                        <div>Harian</div>
                    </div>
                    <div class="flex gap-5 mt-5 whitespace-nowrap">
                        <img loading="lazy" src="https://img.icons8.com/?size=100&id=Zo3-bT74qE1g&format=png&color=000000" class="shrink-0 w-[27px] h-[27px]" />
                        <div>Bulanan</div>
                    </div>
                    <div class="flex gap-5 mt-5 whitespace-nowrap">
                        <img loading="lazy" src="https://img.icons8.com/?size=100&id=39362&format=png&color=000000" class="shrink-0 w-[27px] h-[27px]" />
                        <div>Semester</div>
                    </div>
                </div>
            </div>
            <div class="flex gap-5 px-8 py-4 whitespace-nowrap mt-auto text-zinc-900 bg-gray-400">
                <img loading="lazy" src="https://img.icons8.com/?size=100&id=Q1xkcFuVON39&format=png&color=000000" class="shrink-0 aspect-[1.06] w-[27px] h-[27px]" />
                <div>Logout</div>
            </div>
        </div>
        <!-- Sidebar ends -->
    </div>
</nav>
