<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Overview Products from the range') }}
        </h2>
    </x-slot>

    <div x-data="{ open: false }">
        @if (session('success'))
            <div x-show="open" x-init="open = true; setTimeout(() => open = false, 3000)" class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif
    </div>
    <div x-data="{ open: false }">
        @if (session('error'))
            <div x-show="open" x-init="open = true; setTimeout(() => open = false, 3000)" class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4" role="alert">
                <p>{{ session('error') }}</p>
            </div>
        @endif
    </div>
    <form method="GET" action="{{ route('products') }}" class="flex flex-wrap justify-center">
        <div class="mb-4 mr-2">
            <label for="start_date" class="block text-gray-700 text-sm font-bold mb-2">Start Date:</label>
            <input type="date" id="start_date" name="start_date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4 mr-2">
            <label for="end_date" class="block text-gray-700 text-sm font-bold mb-2">End Date:</label>
            <input type="date" id="end_date" name="end_date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mt-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Maak selectie</button>
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" onclick="resetForm()">Clear Filter</button>
        </div>
    </form>
    <div class="py-12 flex justify-center">
        <table class="table-auto border-collapse border-2 border-gray-500">
            <thead>
                <tr>
                    <th class="border-2 border-gray-400 px-4 py-2">Name Leverancier</th>
                    <th class="border-2 border-gray-400 px-4 py-2">Contact Person</th>
                    <th class="border-2 border-gray-400 px-4 py-2">City</th>
                    <th class="border-2 border-gray-400 px-4 py-2">Product Name</th>
                    <th class="border-2 border-gray-400 px-4 py-2">End Date Delivery</th>
                    <th class="border-2 border-gray-400 px-4 py-2">Delete</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td class="border-2 border-gray-400 px-4 py-2">{{ $product->user_name }}</td>
                        <td class="border-2 border-gray-400 px-4 py-2">{{ $product->contact_person }}</td>
                        <td class="border-2 border-gray-400 px-4 py-2">{{ $product->product_name }}</td>
                        <td class="border-2 border-gray-400 px-4 py-2">{{ $product->city }}</td>
                        <td class="border-2 border-gray-400 px-4 py-2">{{ $product->end_date_delivery }}</td>
                        <td class="border-2 border-gray-400 px-4 py-2">
                            <form method="GET" action="{{ route('product.show', ['product' => $product->id]) }}">
                                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                                      </svg>
                                </button>
                            </form>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td class="border-2 border-gray-400 px-4 py-2 text-center" colspan="5">No products found in this period</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <script>
        function resetForm() {
            document.getElementById("start_date").value = "";
            document.getElementById("end_date").value = "";
        }
        </script>
</x-app-layout>
