<x-layouts.admin-layout>

    <div class="m-8">
        <a href="{{ route('product.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Button
        </a>
    </div>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-gray-600">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Imagen
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Stock:
                </th>
                <th scope="col" class="px-6 py-3">
                    Price:
                </th>
                <th scope="col" class="px-6 py-3">
                    Categoria:
                </th>
                <th scope="col" class="px-6 py-3">
                    Acciones
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <img src="{{ asset($product->image_path) }}" class="h-[100px] w-[100px]" alt="">
                    </th>
                    <td class="px-6 py-4">
                        {{ $product->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $product->stock }}
                    </td>
                    <td class="px-6 py-4">
                        Q.{{ $product->price }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $product->category->name }}
                    </td>
                    <td class="px-6 py-4">
                        <div class="grid grid-cols-2 gap-4">
                            <x-a-button href="{{ route('product.edit', $product) }}">Editar</x-a-button>
                            <form action="{{ route('product.destroy', $product) }}" method="post" class="inline">
                                @csrf
                                @method('delete')
                                <x-button type="submit" type_button="danger">Eliminar</x-button>
                            </form>
                        </div>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    </div>

</x-layouts.admin-layout>
