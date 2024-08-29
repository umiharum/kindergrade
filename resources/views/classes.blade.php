<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <div class="flex justify-end">
       <a href="class/inpclass">
        <button class="text-white bg-green-600 hover:bg-green-700 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="">Add New Data</button></a>
    </div>
<div class="p-4">
    <div class="mx-auto flex h-[500px] max-w-[90rem] flex-col justify-start rounded-2xl bg-slate-500 bg-opacity-5 px-5 relative border-4">
        <ul role="list" class="divide-y divide-gray-100">
            @foreach ($classes as $class)
        
            <li class="flex justify-between gap-x-6 py-5">
              <div class="flex min-w-0 gap-x-4">
                <div class="min-w-0 flex-auto">
                    <a href="/classes/{{ $class['slug'] }}">
                  <p class="text-sm font-semibold leading-6 text-gray-900">{{ $class['name'] }}</p>
                    </a>
                  <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $class['description'] }}</p>
                </div>
              </div>
              <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                <p class="text-sm leading-6 text-gray-900">Assigned Teacher: {{ $class['teachers_assigned'] }}</p>
                <p class="text-sm leading-6 text-gray-900">Assigned Student: {{ $class['students_assigned'] }}</p>
                
              </div>
           
            @endforeach
          </ul>
    </div>
</div>
    
      
</x-layout>