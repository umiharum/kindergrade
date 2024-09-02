<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="p-4">
        <div class="mx-auto flex h-[500px] max-w-[90rem] flex-col justify-start rounded-2xl bg-slate-500 bg-opacity-5 px-5 relative border-4">
            <ul role="list" class="divide-y divide-gray-100">
                @foreach ($students as $student)
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex min-w-0 gap-x-4">
                        <div class="min-w-0 flex-auto">
                            <a href="/students/{{ $student['slug'] }}">
                                <p class="text-sm font-semibold leading-6 text-gray-900">{{ $student['name'] }}</p>
                            </a>
                            <p class="text-sm font-normal leading-5 text-slate-800">Age: {{ $student['age'] }}</p>
                        </div>
                    </div>
                        <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                            <p class="text-sm leading-6 text-gray-900">Grade: {{ $student['grade'] }}</p>
                            <p class="text-sm leading-6 text-gray-900">Class: {{ $student['class'] }}</p>
                            
                          </div>
                    
                </li>
                @endforeach
                
            </ul>
        </div>
    </div>
</x-layout>
