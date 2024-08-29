<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
    <div class="bg-white border-4 rounded-lg shadow relative m-10">
        <div class="p-6 space-y-6">
            <form action="#">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="class_name" class="text-sm font-medium text-gray-900 block mb-2">Name of Class</label>
                        <input type="text" name="class_name" id="class_name"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                            placeholder="e.g: Class 1" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="category" class="text-sm font-medium text-gray-900 block mb-2">Category</label>
                        <select name="category" id="category" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                            <option value="Kindergarten 1">Kindergarten 1</option>
                            <option value="Kindergarten 2">Kindergarten 2</option>
                        </select>
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="teacher_assigned" class="text-sm font-medium text-gray-900 block mb-2">Assinged Teacher</label>
                        <input type="number" name="teacher_assigned" id="teacher_assigned"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                            placeholder="3" required="">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label for="student_assigned" class="text-sm font-medium text-gray-900 block mb-2">Assinged Student</label>
                        <input type="number" name="student_assigned" id="student_assigned"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                            placeholder="16" required="">
                    </div>
                    <div class="col-span-full">
                        <label for="class-details" class="text-sm font-medium text-gray-900 block mb-2">Class Details</label>
                        <textarea id="class-details" rows="3"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4"
                            placeholder="Details or notes"></textarea>
                    </div>
                    <!-- upload file-->
                    {{-- <div class="col-span-full">
                        <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Cover
                            photo</label>
                        <div
                            class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                            <div class="text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                    <label for="file-upload"
                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                        <span>Upload a file</span>
                                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </form>
        </div>

        <div class="p-6 border-t border-gray-200 rounded-b sm:flex sm:flex-row gap-x-2 justify-end">
            <button
                class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="submit">Save all</button>
            <button
                class="text-white bg-red-600 hover:bg-red-700 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                type="">Reset</button>
            <div class="mt-1 flex items-center gap-x-1.5 ml-auto">
                <button
                    class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                    type="">Back</button>
            </div>
        </div>

    </div>

</x-layout>
