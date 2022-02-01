<x-layout>
    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                First Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Last Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Birthday
              </th>
              {{-- <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th> --}}
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">

            {{-- foreach persons as person --}}

            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                    <div class="text-sm text-gray-900">
                        {{-- Insert First name here --}}
                        Max

                    </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    {{-- Insert Last name here --}}
                    Mustermann

                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    {{-- Insert birthday here --}}
                    <span>01.01.1990</span>

                    {{-- Insert days until birth --}}
                    <span class="text-gray-600">(364 left)</span>
                </div>
              </td>
              <td class="hidden px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

                    {{-- Insert link to detail page here --}}
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">View</a>

                </td>
            </tr>

          </tbody>
        </table>
      </div>
</x-layout>
