<x-app-layout>
    <div class="mb-10 ml-10 underline">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </div>
    <table class="ml-10 border-separate border border-slate-500 ...">
        <thead>
          <tr>
            <th class="border border-slate-600 ...">Name Product:</th>
            <th class="border border-slate-600 ...">{{ $product->name }}</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border border-slate-700 ...">Barcode:</td>
            <td class="border border-slate-700 ...">{{ $product->barcode }}</td>
          </tr>
          <tr>
            <td class="border border-slate-700 ...">Includes Gelatine:</td>
            <td class="border border-slate-700 ...">{{ $allergies->contains('Gelatine') ? 'Yes' : 'No' }}</td>
          </tr>
          <tr>
            <td class="border border-slate-700 ...">Includes Gluten:</td>
            <td class="border border-slate-700 ...">{{ $allergies->contains('Gluten') ? 'Yes' : 'No' }}</td>
          </tr>
          <tr>
            <td class="border border-slate-700 ...">Includes AZO:</td>
            <td class="border border-slate-700 ...">{{ $allergies->contains('AZO') ? 'Yes' : 'No' }}</td>
          </tr>
          <tr>
            <td class="border border-slate-700 ...">Includes Lactose:</td>
            <td class="border border-slate-700 ...">{{ $allergies->contains('Lactose') ? 'Yes' : 'No' }}</td>
          </tr>
          <tr>
            <td class="border border-slate-700 ...">Includes Soja:</td>
            <td class="border border-slate-700 ...">{{ $allergies->contains('Soja') ? 'Yes' : 'No' }}</td>
          </tr>
        </tbody>
      </table>

      <div class="ml-10 mt-4" x-data="{ open: false }">
        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Delete</button>
        </form>
    </div>
</x-app-layout>
