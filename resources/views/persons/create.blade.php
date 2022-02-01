<x-layout>
    <div>
        <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Person</h3>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="#" method="POST">
            @csrf
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <div class="grid grid-cols-3 gap-6">
                    <div class="col-span-3 sm:col-span-2">

                        <label for="first-name" class="block text-sm font-medium text-gray-700">
                            First Name
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="first-name" id="first-name" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="Max" required>
                        </div>
                    </div>

                    <div class="col-span-3 sm:col-span-2">
                        <label for="first-name" class="block text-sm font-medium text-gray-700">
                            Last Name
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="text" name="last-name" id="last-name" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300" placeholder="Mustermann" required>
                        </div>
                    </div>

                    <div class="col-span-3 sm:col-span-2">
                        <label for="birthday" class="block text-sm font-medium text-gray-700">
                            Birthday
                        </label>
                        <div class="mt-1 flex rounded-md shadow-sm">
                            <input type="date" name="birthday" id="birthday" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-md sm:text-sm border-gray-300">
                        </div>
                    </div>
                    {{-- Error here --}}
                </div>


                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Create
                </button>
                </div>
            </div>
            </form>
        </div>
        </div>
  </div>


</x-layout>
